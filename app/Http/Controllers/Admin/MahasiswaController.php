<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agama;
use App\Models\Regency;
use App\Models\Mahasiswa;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Helpers\DataHelper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use BaconQrCode\Renderer\Path\Move;
use App\DataTables\Admin\MahasiswaDatatable;
use App\Models\District;
use App\Models\Province;
use App\Models\StatusKawin;
use App\Models\Village;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MahasiswaDatatable $datatable)
    {
        return $datatable->render('pages.admin.mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DataHelper $dataHelper)
    {
        $pendidikan = Pendidikan::pluck('nama', 'id');
        $pekerjaan = Pekerjaan::pluck('nama', 'id');
        $agama = Agama::pluck('nama', 'id');
        $status_kawin = StatusKawin::pluck('nama', 'id');
        $provinsi = Province::pluck('name', 'id');
        $kabupaten = [];
        $kecamatan = [];
        $kelurahan = [];

        if (old('asal_provinsi')) {
            $kabupaten = Province::find(old('asal_provinsi'))->regencies->pluck('name', 'id');
        }

        if (old('asal_kabupaten')) {
            $kecamatan = Regency::find(old('asal_kabupaten'))->districts->pluck('name', 'id');
        }

        if (old('asal_kecamatan')) {
            $kelurahan = District::find(old('asal_kecamatan'))->villages->pluck('name', 'id');
        }
    
        
        return view('pages.admin.mahasiswa.add-edit',[
        
        'pendidikan' => $pendidikan,
        'pekerjaan' => $pekerjaan,
        'agama' => $agama,
        'status_kawin' => $status_kawin,
        'provinsi' => $provinsi,
        'kabupaten' => $kabupaten,
        'kecamatan'=> $kecamatan,
        'kelurahan' => $kelurahan
    
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
        //$validate
        $request->validate([

            'user_id' => 'required',
            'nama' => 'required',
            'nik' => 'required | min:0 | max:16',
            'tgl_lahir' => 'required',
            'email' => 'required | email',
            'foto' => 'required'

        ]);

        $input = $request->all();

        if ($image=$request->file('foto')) {
            $destinationPath ='foto/'; 
            $profileImage = date('YmdHis'). "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto']="$profileImage"; 
            # code...
        }

        Mahasiswa::create($input);

        return redirect()->route('admin.mahasiswa.index')
        ->with('success','Sukses Menambahkan Mahasiswa.');


        

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit( $id, DataHelper $dataHelper)
    {
        $data = Mahasiswa::findOrFail($id);
        $pendidikan = Pendidikan::pluck('nama','id');
        $pekerjaan = Pekerjaan::pluck('nama','id');
        $agama = Agama::pluck('nama','id');
        $status_kawin = StatusKawin::pluck('nama', 'id');
        $provinsi = Province::pluck('name', 'id');
        $kabupaten = [];
        $kecamatan = [];
        $kelurahan = [];

        if (old('asal_provinsi') || $data->asal_provinsi) {
            $dt=old('asal_provinsi') ?? $data->asal_provinsi;
            $kabupaten = Province::find($dt)->regencies->pluck('name', 'id');
        }

        if (old('asal_kabupaten') || $data->asal_kabupaten) {
            $dt=old('asal_kabupaten') ?? $data->asal_kabupaten;
            $kecamatan = Regency::find($dt)->districts->pluck('name', 'id');
        }

        if (old('asal_kecamatan') || $data->asal_kecamatan) {
            $dt = old('asal_kecamatan') ?? $data->asal_kecamatan;
            //$dt=$data->asal_kecamatan;
            $kelurahan = District::find($dt)->villages->pluck('name', 'id');
        }

        return view('pages.admin.mahasiswa.add-edit', [
            'data' => $data, 
            'pendidikan' => $pendidikan,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'status_kawin' => $status_kawin,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan'=> $kecamatan,
            'kelurahan' => $kelurahan
        ]);
    }

    public function update(Request $request, $id)
    {

        try {
            $request->validate([
                'user_id' => 'required',
                'nama' => 'required',
                'tgl_lahir' => 'required',
                'nik' => 'required | min:0 | max:16',
                'email' => 'required | email',
                
            ]);

            $data = $request->all();

            if ($image=$request->file('foto')) {
                $destinationPath ='foto/';
                $profileImage = date('YmdHis'). "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['foto']="$profileImage"; 
                # code...
            }
            else{
                unset($data['foto']);
            }


        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Mahasiswa::findOrFail($id);
            
            $data->update($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }




        return redirect(route('admin.mahasiswa.index'))->withToastSuccess('Data tersimpan');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
    }
}