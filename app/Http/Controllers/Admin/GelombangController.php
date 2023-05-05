<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gelombang;
use App\Helpers\DataHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\GelombangDataTable;
use App\Http\Requests\Admin\GelombangForm;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GelombangDataTable $gelombangDataTable)
    {
        return $gelombangDataTable->render('pages.admin.gelombang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DataHelper $dataHelper)
    {
        $dropdownTahun  = $dataHelper->yearDropdownData();
        return view('pages.admin.gelombang.add-edit',[
            'dropdownTahun'     => $dropdownTahun
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GelombangForm $request)
    {
        try {
           Gelombang::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.gelombang.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function edit($id, DataHelper $dataHelper)
    {
        $dropdownTahun  = $dataHelper->yearDropdownData();
        $data = Gelombang::findOrFail($id);
        return view('pages.admin.gelombang.add-edit', [
            'data' => $data,
            'dropdownTahun' => $dropdownTahun
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function update(GelombangForm $request, $id)
    {
        $data = Gelombang::findOrFail($id);
        try {
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Error saving data');
        }
        return redirect(route('admin.gelombang.index'))->withInput()->withToastSuccess('Data tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Gelombang::find($id)->delete();
    }
}
