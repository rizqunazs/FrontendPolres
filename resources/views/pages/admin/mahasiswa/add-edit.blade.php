@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])
@section('title', isset($data) ? 'Edit Mahasiswa' : 'Create Mahasiswa' )

@push('css')
<link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Form</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">@yield('title') <small>Mahasiswa</small></h1>
<!-- end page-header -->

<form action="{{ isset($data) ? route('admin.mahasiswa.update', $data->id) : route('admin.mahasiswa.store') }}" method="post" enctype="multipart/form-data " data-parsley-validate="true">
    @csrf
    @if(isset($data))
    @method('PUT')
    @endif
    <div class="row">
        <div class="col-xl-8 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Form @yield('title')</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- end panel-heading -->
                <div class="panel-body">
                    {{-- @include('pages.admin.mahasiswa.form-mahasiswa') --}}
                    <!-- Hubungan keluarga -->
                    <br>
                    <h3>Data Diri</h3>
                    <hr>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="user_id"><small><b> USER ID</b></small></label>
                                    <div class="input-group">
                                        <input type="number" id="user_id" name="user_id" class="form-control" placeholder="USER ID" value="{{{ $data->user_id ?? old('user_id') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="tanggal"> <small><b>Tanggal</b></small></label>
                                    <div class="input-group">
                                        <input type="date" id name="tanggal" class="form-control" placeholder="Tanggal" value="{{{ $data->tanggal ?? old('tanggal') }}}"  required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> NPM</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="npm" class="form-control" placeholder="Nomor Pokok Mahasiswa" value="{{{ $data->npm ?? old('npm') }}}"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Agama Kewarganegaraan Pekerjaan --}}
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="tahun_id"><small><b> Tahun</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="tahun_id" class="form-control" placeholder="Tahun" value="{{{ $data->tahun ?? old('tahun') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="gelombang"> <small><b>Gelombang</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="gelombang_id" class="form-control" value="{{{ $data->gelombang_id ?? old('gelombang_id') }}}"  required  />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="prodi"> <small><b>Prodi</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="prodi_id" class="form-control" value="{{{ $data->prodi_id ?? old('prodi_id') }}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="semester"> <small><b>Semester</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="semester" class="form-control" value="{{{ $data->semester ?? old('semester') }}}" required/>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="nama"><small><b> Nama Lengkap</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{{ $data->nama ?? old('nama') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="tmp_lahir"> <small><b>Tempat Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" value="{{{ $data->tmp_lahir ?? old('tmp_lahir') }}}"  required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{{ $data->tgl_lahir ?? old('tgl_lahir') }}}"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="gender">Jenis Kelamin</label>
                                    <div>
                                        <x-form.genderRadio name="gender" selected="{{{ $data->gender ?? old('gender') ?? 'laki-laki'}}}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="agama"> <small><b>Agama</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="agama_id" :options="$agama" selected="{{{ $data['agama_id'] ?? old('agama_id') }}}" required />
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> NIK</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="nik" class="form-control" placeholder="NIK" value="{{{ $data->nik ?? old('nik') }}}" required />
                                    </div>
                                </div>
                
                                <div class="col-md-3">
                                    <label for=""><small><b> Kawin</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="kawin" :options="$status_kawin" selected="{{{ $data['kawin'] ?? old('kawin') }}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="bekerja"><small><b> Bekerja</b></small></label>
                                    <select class="select2 form-control" id="bekerja" name="bekerja" >

                                        <option value="bekerja"{{{ $data->bekerja ?? old('bekerja') }}}>Bekerja</option>
                                        <option value="tidak_bekerja"{{{ $data->bekerja ?? old('bekerja') }}}>Tidak Bekerja</option>

                                        {{-- <option value="bekerja" {{{ ($data->bekerja === 'bekerja') ? 'Selected' : '' }}} >Bekerja</option>
                                        <option value="belum_bekerja" {{{ ($data->bekerja === 'belum_bekerja') ? 'Selected' : ''}}} >Belum Bekerja</option> --}}
                                      </select>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><small><b> RT</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_rt" class="form-control" placeholder="RT" value="{{{ $data->asal_rt ?? old('asal_rt') }}}"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><small><b> RW</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_rw" class="form-control" placeholder="RW" value="{{{ $data->asal_rw ?? old('asal_rw') }}}"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="fullname"> <small><b>Asal Jalan</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_jalan" class="form-control" placeholder="Asal Jalan" value="{{{ $data->asal_jalan ?? old('asal_jalan') }}}"  required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for=""><small><b> Asal Provinsi</b></small></label>
                                    <div class="input-group mb-2">
                                        <x-form.Dropdown name="asal_provinsi" :options="$provinsi" selected="{{{ $data['asal_provinsi'] ?? old('asal_provinsi') }}}" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for=""><small><b> Asal Kabupaten</b></small></label>
                                    <div class="input-group">
                                      
                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="asal_kabupaten" :options="$kabupaten" placeholder="Pilih" selected="{{{ $data['asal_kabupaten'] ?? old('asal_kabupaten') }}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="asal_kecamatan"><small><b> Asal Kecamatan</b></small></label>
                                    <div class="input-group mb-2">
                                        <x-form.Dropdown name="asal_kecamatan" :options="$kecamatan" selected="{{{ $data['asal_kecamatan'] ?? old('asal_kecamatan') }}}" required />
                                    </div>
                                </div>
                        
                                <div class="col-md-6">
                                    <label for=""><small><b> Asal Kelurahan</b></small></label>
                                    <div class="input-group mb-2">
                                        <x-form.Dropdown name="asal_kelurahan" :options="$kelurahan" selected="{{{ $data['asal_kelurahan'] ?? old('asal_kelurahan') }}}" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="asal_dusun"><small><b> Asal Dusun</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_dusun" class="form-control" placeholder="Dusun" value="{{{ $data->asal_dusun ?? old('asal_dusun') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="asal_kodepos"><small><b> Asal Kodepos</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="asal_kodepos" class="form-control" placeholder="Kodepos" value="{{{ $data->asal_kodepos ?? old('asal_kodepos') }}}" required />
                                    </div>
                                </div>
                            

                                <div class="col-md-3">
                                    <label for=""><small><b> No. Telp</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="telp" class="form-control" placeholder="No. Telp" value="{{{ $data->telp ?? old('telp') }}}"  required />
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="hp"><small><b> No. Hp</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="hp" class="form-control" placeholder="No. Hp" value="{{{ $data->hp ?? old('hp') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Email</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{{ $data->email ?? old('email') }}}"  required />
                                       
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> KPS</b></small></label>
                                    <div class="input-group">
                                          <div class="input-group mb-2">

                                           

                                        
                                        <select class="select2 form-control" id="kps" name="kps">

                                            <option value="punya"{{{ $data->kps ?? old('kps') }}}>Punya</option>
                                            <option value="tidak_punya"{{{ $data->punya ?? old('kps') }}}>Tidak Punya</option>

                                            {{-- show value select --}}
                                            {{-- <option value="Punya"{{{ ($data->kps === 'punya') ? 'Selected' : ''}}}>Punya</option>
                                            <option value="Tidak_Punya"{{{ ($data->kps === 'tidak_punya') ? 'Selected' : ''}}}>Tidak Punya</option> --}}
                                          </select> 
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> No. KPS</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="no_kps" class="form-control" placeholder="No KPS" value="{{{ $data->no_kps ?? old('no_kps') }}}"  required />
                                     
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-4">
                                    <label for="ijazah"><small><b> Ijazah</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ijazah" class="form-control" placeholder="Ijazah" value="{{{ $data->ijazah ?? old('tahun') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Tahun</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="tahun" class="form-control" placeholder="Tahun" value="{{{ $data->tahun ?? old('tahun') }}}"  required />
                                     
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Jurusan</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{{ $data->jurusan ?? old('jurusan') }}}"  required />
                                      
                                    </div>
                                </div>
                         
                               
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="asal_sekolah"><small><b> Asal Sekolah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_sekolah" class="form-control" placeholder="Sekolah" value="{{{ $data->asal_sekolah ?? old('asal_sekolah') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Kota Sekolah</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group mb-2">

                                            <input type="text" name="kota_sekolah" class="form-control" placeholder="Kota Sekolah" value="{{{ $data->kota_sekolah ?? old('kota_sekolah') }}}" required />
                                            {{-- <x-form.Dropdown name="kota_sekolah" :options="$kabupaten" selected="{{{ $data['kota_sekolah'] ?? old('kota_sekolah') }}}" required /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Data Orang Tua</h3>
                    <hr>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="ayah_nama"><small><b> Nama Ayah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="ayah_nama" class="form-control" placeholder="Nama Ayah" value="{{{ $data->ayah_nama ?? old('ayah_nama') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Pendidikan</b></small></label>
                                    <div class="input-group">

                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="ayah_pendidikan" :options="$pendidikan" selected="{{{ $data['ayah_pendidikan'] ?? old('ayah_pendidikan') }}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-5">
                                    <label for="ayah_pekerjaan"><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="ayah_pekerjaan" :options="$pekerjaan" selected="{{{ $data['ayah_pekerjaan'] ?? old('ayah_pekerjaan') }}}" required />
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Penghasilan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ayah_penghasilan" class="form-control" placeholder="Penghasilan" value="{{{ $data->ayah_penghasilan ?? old('ayah_penghasilan') }}}"  required />
                                       
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="ayah_tgl_lhr" class="form-control" placeholder="Tanggal Lahir" value="{{{ $data->ayah_tgl_lhr ?? old('ayah_tgl_lhr') }}}"  required />
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="ibu_nama"><small><b> Nama Ibu</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="ibu_nama" class="form-control" placeholder="Nama Ibu" value="{{{ $data->ibu_nama ?? old('ibu_nama') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Pendidikan</b></small></label>
                                    <div class="input-group">

                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="ibu_pendidikan" :options="$pendidikan" selected="{{{ $data['ibu_pendidikan'] ?? old('ibu_pendidikan') }}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-5">
                                    <label for="ibu_pekerjaan"><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="ibu_pekerjaan" :options="$pekerjaan" selected="{{{ $data['ibu_pekerjaan'] ?? old('ibu_pekerjaan') }}}" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Penghasilan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ibu_penghasilan" class="form-control" placeholder="Penghasilan" value="{{{ $data->ibu_penghasilan ?? old('ibu_penghasilan') }}}"  required />
                                      
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="ibu_tgl_lhr" class="form-control" placeholder="Tanggal Lahir" value="{{{ $data->ibu_tgl_lhr ?? old('ibu_tgl_lhr') }}}"  required />
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="wali_nama"><small><b> Nama Wali</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="wali_nama" class="form-control" placeholder="Nama Wali" value="{{{ $data->wali_nama ?? old('wali_nama') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Pendidikan</b></small></label>
                                    <div class="input-group">

                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="wali_pendidikan" :options="$pendidikan" selected="{{{ $data['wali_pendidikan'] ?? old('wali_pendidikan') }}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-5">
                                    <label for="wali_pekerjaan"><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group mb-2">
                                            <x-form.Dropdown name="wali_pekerjaan" :options="$pekerjaan" selected="{{{ $data['wali_pekerjaan'] ?? old('wali_pekerjaan') }}}" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Penghasilan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="wali_penghasilan" class="form-control" placeholder="Penghasilan" value="{{{ $data->wali_penghasilan ?? old('wali_penghasilan') }}}"  required />
                                       
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="wali_tgl_lhr" class="form-control" placeholder="Tanggal Lahir" value="{{{ $data->wali_tgl_lhr ?? old('wali_tgl_lhr') }}}"  required />
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="kk_mahasiswa"><small><b> KK Mahasiswa</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kk_mahasiswa" class="form-control" placeholder="KK Mahasiswa" value="{{{ $data->kk_mahasiswa ?? old('kk_mahasiswa') }}}" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> KK Ayah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kk_ayah" class="form-control" placeholder="KK Ayah" value="{{{ $data->kk_ayah ?? old('kk_ayah') }}}"  required />
                                    
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> KK ibu</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kk_ibu" class="form-control" placeholder="KK Ibu" value="{{{ $data->kk_ibu ?? old('kk_ibu') }}}"  required />
                                   
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Status</b></small></label>
                                    <div class="input-group">
                                    <div class="input-group mb-2">

                                        <select class="select2 form-control" id="status" name="status">
                                            
                                            <option value="aktif"{{{ $data->status ?? old('status') }}}>Aktif</option>
                                            <option value="tidak_aktif"{{{ $data->status ?? old('status') }}}>Tidak Aktif</option>
                                          
                                        </select>
                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="foto"><small><b> Foto Diri</b></small></label>
                             
                                </div>
                            </div>
                        </div>
                    </div>


              

        
            <!-- end panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-body -->
                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="checkagree" value="true" name="checkagree" required>
                            <span class="text-muted" lang="id"> Keterangan yang saya buat dengan sebenarnya
                                atas sumpah menurut
                                kepercayaan saya, apabila dikemudian hari ternyata keterangan ini tidak
                                benar maka saya sanggup
                                dituntut berdasarkan hukum yang berlaku.</span>
                        </label>
                    </div>
                </div>
                <!-- end panel-body -->
                <div class="panel-footer text-right">
                    <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i>
                        &nbsp;Kosongkan</button>&nbsp;
                    <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i>
                        &nbsp;Simpan</button>&nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="col-xl-4 ui-sortable">
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Lampiran Berkas</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    @php
                    $imageSrc = null;
                    if(isset($data->dokumen)){
                    $imageSrc = $data->dokumen->toArray();
                    }
                    @endphp
                    {{-- <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'foto)->first()['public_url']) : null" name="foto" title="Foto Diri" />
                    </div> --}}
                    <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'foto')->first()['public_url']) : null" name="foto" title="Foto Diri" />
                    </div>
                    {{-- <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'lampiran_akta_lahir')->first()['public_url']) : null" name="lampiran_akta_lahir" title="Akta Kelahiran" />
                    </div>
                    <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'lampiran_pas_foto')->first()['public_url']) : null" name="lampiran_pas_foto" title="Pas Foto" />
                    </div> --}}
                </div>
            </div>
            <!-- end panel-body -->
        </div> 
    
</form>
@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/js/custom/string-helper.js') }}"></script>
<script src="{{ asset('/assets/js/custom/wilayah-dropdown.js') }}"></script>
{{-- f --}}

<script>

$(function() {
            handleWilayahSelectEvent('#asal_provinsi', '#asal_kabupaten', '#asal_kecamatan', '#asal_kelurahan');
            //handleDateTimePicker();
            initParsley();
        })

</script>
@endpush