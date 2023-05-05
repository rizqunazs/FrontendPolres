@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])
@section('title', 'Form')

@push('css')
<link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Form</a></li>
    <li class="breadcrumb-item active">Form Mahasiswa</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">@yield('title') <small>Mahasiswa</small></h1>
<!-- end page-header -->

<form name="form-skck" action="{{ isset($data) ? route('admin.mahasiswa.update', $data->id) : route('admin.mahasiswa.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($data))
    {{ method_field('PUT') }}
    @endif
    <div class="row">
        <div class="col-xl-8 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Data @yield('title') Mahasiswa</h4>
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
                                    <label for="hubungan"><small><b> USER ID</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="user_id" class="form-control" placeholder="USER ID" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Tanggal</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="tanggal" class="form-control" placeholder="Nama Lengkap"  required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> NPM</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="npm" class="form-control" placeholder="Nomor Pokok Mahasiswa"  required />
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
                                    <label for="agama"><small><b> Tahun</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="tahun_id" class="form-control" placeholder="Tahun" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Gelombang</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="gelombang_id" class="form-control" required  />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Prodi</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="prodi_id" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Semester</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="semester" class="form-control" required/>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Nama Lengkap</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="nama" class="form-control" placeholder="Nama Lengkap" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Tempat Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir"  required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir"  required />
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
                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> Jenis Kelamin</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="jk" class="form-control" placeholder="Jenis Kelamin" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Agama</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="agama" class="form-control" placeholder="Agama"  required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> NIK</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="nik" class="form-control" placeholder="NIK"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Kawin</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kawin" class="form-control" placeholder="Kawin"  required />
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
                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> Bekerja</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="bekerja" class="form-control" placeholder="Bekerja" required />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><small><b> RT</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_rt" class="form-control" placeholder="RT"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><small><b> RW</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_rw" class="form-control" placeholder="RW"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="fullname"> <small><b>Asal Jalan</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_jalan" class="form-control" placeholder="Asal Jalan"  required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Asal Dusun</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_dusun" class="form-control" placeholder="Dusun" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Asal Kelurahan</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_kelurahan" class="form-control" placeholder="Kelurahan"  required />
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
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Asal Kecamatan</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_kecamatan" class="form-control" placeholder="Kecamatan" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Asal Kabupaten</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_kabupaten" class="form-control" placeholder="Kabupaten"  required />
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
                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> Asal Kodepos</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="asal_kodepos" class="form-control" placeholder="Kodepos" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Asal Provinsi</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_provinsi" class="form-control" placeholder="Provinsi"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> No. Telp</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="telp" class="form-control" placeholder="No. Telp"  required />
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
                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> No. Hp</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="hp" class="form-control" placeholder="No. Hp" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Email</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> KPS</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kps" class="form-control" placeholder="KPS"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> No. KPS</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="no_kps" class="form-control" placeholder="No KPS"  required />
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
                                <div class="col-md-4">
                                    <label for="hubungan"><small><b> Ijazah</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ijazah" class="form-control" placeholder="Ijazah" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Tahun</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="tahun" class="form-control" placeholder="Tahun"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Jurusan</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="jurusan" class="form-control" placeholder="Jurusan"  required />
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
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Asal Sekolah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="asal_sekolah" class="form-control" placeholder="Sekolah" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Kota Sekolah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kota_sekolah" class="form-control" placeholder="Kota Sekolah"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
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
                                    <label for="hubungan"><small><b> Nama Ayah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="ayah_nama" class="form-control" placeholder="Nama Ayah" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Pendidikan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ayah_pendidikan" class="form-control" placeholder="Pendidikan"  required />
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
                                <div class="col-md-5">
                                    <label for="hubungan"><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ayah_pekerjaan" class="form-control" placeholder="Pekerjaan Ayah" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Penghasilan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ayah_penghasilan" class="form-control" placeholder="Penghasilan"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="ayah_tgl_lhr" class="form-control" placeholder="Tanggal Lahir"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        Wali

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Nama Ibu</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="ibu_nama" class="form-control" placeholder="Nama Ibu" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Pendidikan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ibu_pendidikan" class="form-control" placeholder="Pendidikan"  required />
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
                                <div class="col-md-5">
                                    <label for="hubungan"><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ibu_pekerjaan" class="form-control" placeholder="Pekerjaan Ibu" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Penghasilan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="ibu_penghasilan" class="form-control" placeholder="Penghasilan"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="ibu_tgl_lhr" class="form-control" placeholder="Tanggal Lahir"  required />
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
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Nama Wali</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="wali_nama" class="form-control" placeholder="Nama Wali" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Pendidikan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="wali_pendidikan" class="form-control" placeholder="Pendidikan"  required />
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
                                <div class="col-md-5">
                                    <label for="hubungan"><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="wali_pekerjaan" class="form-control" placeholder="Pekerjaan Wali" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Penghasilan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="wali_penghasilan" class="form-control" placeholder="Penghasilan"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tanggal Lahir</b></small></label>
                                    <div class="input-group">
                                        <input type="date" name="wali_tgl_lhr" class="form-control" placeholder="Tanggal Lahir"  required />
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
                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> KK Mahasiswa</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kk_mahasiswa" class="form-control" placeholder="KK Mahasiswa" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> KK Ayah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kk_ayah" class="form-control" placeholder="KK Ayah"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> KK ibu</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kk_ibu" class="form-control" placeholder="KK Ibu"  required />
                                        {{-- <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Status</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="status" class="form-control" placeholder="Status"  required />
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
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Foto Diri</b></small></label>
                                    <div class="input-group">
                                        <input type="file" name="foto" class="form-control" placeholder="Foto Diri" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="hubungan"><small><b> Signature</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="signature" class="form-control" placeholder="Signature" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--  Alamat Sekarang  --}}
                    {{-- <div class="row">
                        <div class="col-md-12 mb-2">
                            <label class="col-form-label ">Alamat Sekarang<span class="text-danger">&nbsp;*</span></label>
                            <textarea class="form-control" name="data_keluarga_alamat[]" cols="30" placeholder="Nama Jalan, No Rumah atau Nama Dukuh, RT RW" required></textarea>
                        </div>
                    </div> --}}
                    {{-- Alamat Prov kab --}}
                    {{-- <div class="row form-group ">
                        <div class="col-md-12">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="">Provinsi</label>
                                        <div class="input-group">
                                            <x-form.Dropdown name="data_keluarga_provinsi_id :options="$provinsi" placeholder="Pilih Provinsi"  required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kabupaten</label>
                                    <div class="input-group">
                                        <x-form.Dropdown name="data_keluarga_kabupaten_id :options="$kabupaten" placeholder="Pilih Kabupaten"  required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Alamat Kec Kelurahan --}}
                    {{-- <div class="row form-group ">
                        <div class="col-md-12">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="">Kecamatan</label>
                                        <div class="input-group">
                                            <x-form.Dropdown name="data_keluarga_kecamatan_id  :options="$kecamatan" placeholder="Pilih Kecamatan"  required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-m d-6">
                                    <label for="">Kelurahan</label>
                                    <div class="input-group">
                                        <x-form.Dropdown name="data_keluarga_kelurahan_id  :options="$kelurahan" placeholder="Pilih Kelurahan"  required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="row d-flex justify-content-center">
                        <button role="btn-add-family" class="btn btn-primary mr-1" type="button"><i class="fa fa-plus"></i> Tambah Family</button>
                        <button role="btn-remove-family" class="btn btn-warning ml-1" type="button" @if($key==0) hidden @endif><i class="fa fa-trash"></i> Hapus Family</button>
                    </div> --}}
            

        
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

        {{-- <div class="col-xl-4 ui-sortable">
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
                    {{-- <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'lampiran_kartu_keluarga')->first()['public_url']) : null" name="lampiran_kartu_keluarga" title="Kartu Keluarga" />
                    </div>
                    <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'lampiran_akta_lahir')->first()['public_url']) : null" name="lampiran_akta_lahir" title="Akta Kelahiran" />
                    </div>
                    <div class="row">
                        <x-form.imageuploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'lampiran_pas_foto')->first()['public_url']) : null" name="lampiran_pas_foto" title="Pas Foto" />
                    </div>
                </div>
            </div>
            <!-- end panel-body -->
        </div>  --}}
    </div>
    </div>
</form>
@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/js/custom/string-helper.js') }}"></script>
<script src="{{ asset('/assets/js/custom/wilayah-dropdown.js') }}"></script>
<script>
    function initParsley() {
        "use strict";
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                if (parsleyField.$element.hasClass('select2')) {
                    parsleyField = parsleyField.$element.closest('div').children('span').last();
                }
                return parsleyField
            }
        };
        $('form[name="form-skck"]').parsley(parsleyConfig);
    }

    $(function() {
        handleWilayahSelectEvent('#pemohon_provinsi_id', '#pemohon_kabupaten_id', '#pemohon_kecamatan_id', '#pemohon_kelurahan_id');
        initParsley();
    })
</script>
@endpush