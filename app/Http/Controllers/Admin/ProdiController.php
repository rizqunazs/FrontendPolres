<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prodi; 
use App\DataTables\Admin\ProdiDataTable;
use App\Helpers\DataHelper;
use App\Models\Fakultas;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Contracts\Service\Attribute\Required;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProdiDataTable $prodiDataTable)
    {
        return $prodiDataTable->render('pages.admin.prodi.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DataHelper $dataHelper)
    {
        $dropdownJenjang = $dataHelper->jenjangDropdownData();  
        $fakultas = Fakultas::pluck('fakultas', 'id'); 
        return view('pages.admin.prodi.add-edit',[ 
            'dropdownJenjang' => $dropdownJenjang, 
            'fakultas' => $fakultas
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try{
            $request->validate([
                'fakultas_id' => 'required',
                'jenjang_id' => 'required',
                'kode_prodi' => 'required', 
                'prodi' => 'required',
                'kaprodi' => 'required',
            ]); 
        }catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]); 
        }

        try{
            Prodi::create($request->all()); 
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong'); 
        }

        return redirect()->route('admin.prodi.index')
        ->with('success','Sukses Menambahkan Prodi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.admin.prodi.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, DataHelper $dataHelper)
    {
        $data = Prodi::findOrFail($id);
        $dropdownJenjang = $dataHelper->jenjangDropdownData(); 
        $fakultas = Fakultas::pluck('fakultas', 'id');  
        return view('pages.admin.prodi.add-edit',[
            'data' => $data,
            'dropdownJenjang' => $dropdownJenjang,
            'fakultas' => $fakultas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        try{
            $request->validate([
                'fakultas_id' => 'required',
                'jenjang_id' => 'required',
                'kode_prodi' => 'required', 
                'prodi' => 'required',
                'kaprodi' => 'required',
            ]); 
        }catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]); 
        }

        try{
            $data = Prodi::findOrFail($id); 
            $data->update($request->all()); 
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong'); 
        }

        return redirect(route('admin.prodi.index'))->withToastSuccess('Data Tersimpan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete(); 
    }
}
