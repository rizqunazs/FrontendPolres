<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status; 
use App\DataTables\Admin\StatusDataTable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StatusDataTable $statusDataTable)
    {
        return $statusDataTable->render('pages.admin.status.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.status.add-edit'); 
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
                'tgl' => 'required',
                'pendaftar' => 'required',
                'kategori' => 'required', 
                'status' => 'required',
            ]); 
        }catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]); 
        }

        try{
            Status::create($request->all()); 
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong'); 
        }

        return redirect()->route('admin.status.index')
        ->with('success','Sukses Menambahkan Prodi.');

        // $validate = $request->validate([
        //     'tgl' => 'required',
        //     'pendaftar' => 'required',
        //     'kategori' => 'required',
        //     'status' => 'required',
        //     'signature' => 'required',
        // ]);
  
        // $input = $request->all();
  
        // if ($image = $request->file('signature')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['signature'] = "$profileImage";
        // }
    
        // Status::create($input);

        // return redirect()->route('admin.status.index')
        // ->with('success','Sukses Menambahkan Status.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.admin.status.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Status::findOrFail($id);
        return view('pages.admin.status.add-edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'tgl' => 'required',
                'pendaftar' => 'required',
                'kategori' => 'required', 
                'status' => 'required',
            ]); 
        }catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]); 
        }

        try{
            $data = Status::findOrFail($id); 
            $data->update($request->all()); 
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong'); 
        }

        return redirect(route('admin.status.index'))->withToastSuccess('Data Tersimpan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete(); 
    }
}
