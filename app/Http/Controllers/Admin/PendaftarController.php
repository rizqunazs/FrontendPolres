<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agama;
use App\Models\Prodi;
use App\Models\Status;
use App\Models\Gelombang;
use App\Models\Pekerjaan;
use App\Models\Pendaftar;
use App\Models\Pendidikan;
use App\Helpers\DataHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\PendaftarDataTable;
use App\Http\Requests\Admin\PendaftarForm;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PendaftarDataTable $pendaftarDataTable)
    {
        return $pendaftarDataTable->render('pages.admin.pendaftar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DataHelper $dataHelper)
    {
        $gelombang = Gelombang::pluck('gelombang', 'id');
        $agama = Agama::pluck('nama', 'id');
        $pendidikan = Pendidikan::pluck('nama', 'id');
        $pekerjaan = Pekerjaan::pluck('nama', 'id');
        $prodi = Prodi::pluck('prodi', 'id');
        $status = Status::pluck('status', 'id');
        $dropdownTahun  = $dataHelper->yearDropdownData();
        return view('pages.admin.pendaftar.add-edit',[
            'dropdownTahun'     => $dropdownTahun,
            'gelombang' => $gelombang,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'prodi' => $prodi,
            'status' => $status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendaftarForm $request)
    {
        try {
           Pendaftar::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.pendaftar.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit($id, DataHelper $dataHelper)
    {
        $data = Pendaftar::findOrFail($id);
        $gelombang = Gelombang::pluck('gelombang', 'id');
        $agama = Agama::pluck('nama', 'id');
        $pendidikan = Pendidikan::pluck('nama', 'id');
        $pekerjaan = Pekerjaan::pluck('nama', 'id');
        $prodi = Prodi::pluck('prodi', 'id');
        $status = Status::pluck('status', 'id');
        $dropdownTahun  = $dataHelper->yearDropdownData();
        return view('pages.admin.pendaftar.add-edit',[
            'data' => $data,
            'dropdownTahun'     => $dropdownTahun,
            'gelombang' => $gelombang,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'prodi' => $prodi,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(PendaftarForm $request, $id)
    {
        $data = Pendaftar::findOrFail($id);
        try {
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Error saving data');
        }
        return redirect(route('admin.pendaftar.index'))->withInput()->withToastSuccess('Data tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Pendaftar::find($id)->delete();
    }
}
