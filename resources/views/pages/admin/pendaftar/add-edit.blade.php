@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Pendaftar' : 'Create Pendaftar' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header"> @yield('title')</h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.pendaftar.update', $data->id) : route('admin.pendaftar.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
    @csrf
    @if(isset($data))
    {{ method_field('PUT') }}
    @endif

    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Form @yield('title')</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_daftar">Tanggal Daftar</label>
                                <input type="text" id="tgl_daftar" name="tgl_daftar" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('tgl_daftar') ?? (isset($data['tgl_daftar']) ? $data['tgl_daftar']->format('dd-mm-YYYY') : null) ?? null}}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun_id">Tahun</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="tahun_id" :options="$dropdownTahun" selected="{{{ old('tahun_id') ?? ($data['tahun_id'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gelombang_id">Gelombang</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="gelombang_id" :options="$gelombang" selected="{{{ old('gelombang_id') ?? ($data['gelombang_id'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_pendaftaran">No Pendaftaran</label>
                                <input type="text" id="no_pendaftaran" name="no_pendaftaran" class="form-control" autofocus data-parsley-required="true" value="{{{ old('no_pendaftaran') ?? ($data['no_pendaftaran'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" id="jenis" name="jenis" class="form-control" autofocus data-parsley-required="true" value="{{{ old('jenis') ?? ($data['jenis'] ?? null) }}}">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ old('nama') ?? ($data['nama'] ?? null) }}}">
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <div>
                                    <x-form.genderRadio name="gender" selected="{{{ old('gender') ?? ($data['gender'] ?? null) }}}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="agama_id">Agama</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="agama_id" :options="$agama" selected="{{{ old('agama_id') ?? ($data['agama_id'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tmp_lhr">Tempat Lahir</label>
                                <input type="text" id="tmp_lhr" name="tmp_lhr" class="form-control" autofocus data-parsley-required="true" value="{{{ old('tmp_lhr') ?? ($data['tmp_lhr'] ?? null) }}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lhr">Tanggal Lahir</label>
                                <input type="text" id="tgl_lhr" name="tgl_lhr" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('tgl_lhr') ?? (isset($data['tgl_lhr']) ? $data['tgl_lhr']->format('dd-mm-YYYY') : null) ?? null}}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ old('alamat') ?? ($data['alamat'] ?? null) }}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telp">Nomor Telepon</label>
                                <input type="text" id="telp" name="telp" class="form-control" autofocus data-parsley-required="true" value="{{{ old('telp') ?? ($data['telp'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pendidikan_akhir">Pendidikan Terkahir</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="pendidikan_akhir" :options="$pendidikan" selected="{{{ old('pendidikan_akhir') ?? ($data['pendidikan_akhir'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pendidikan_akhir_tahun">Tahun Lulus</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="pendidikan_akhir_tahun" :options="$dropdownTahun" selected="{{{ old('pendidikan_akhir_tahun') ?? ($data['pendidikan_akhir_tahun'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pendidikan_akhir_jurusan">Jurusan Terakhir</label>
                                <input type="text" id="pendidikan_akhir_jurusan" name="pendidikan_akhir_jurusan" class="form-control" autofocus data-parsley-required="true" value="{{{ old('pendidikan_akhir_jurusan') ?? ($data['pendidikan_akhir_jurusan'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pendidikan_akhir_nama">Nama Instansi Pendidikan Terakhir</label>
                                <input type="text" id="pendidikan_akhir_nama" name="pendidikan_akhir_nama" class="form-control" autofocus data-parsley-required="true" value="{{{ old('pendidikan_akhir_nama') ?? ($data['pendidikan_akhir_nama'] ?? null) }}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nilai_rata">Nilai Rata-Rata Kelulusan</label>
                                <input type="text" id="nilai_rata" name="nilai_rata" class="form-control" autofocus data-parsley-required="true" value="{{{ old('nilai_rata') ?? ($data['nilai_rata'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ortu_nama">Nama Orang Tua</label>
                                <input type="text" id="ortu_nama" name="ortu_nama" class="form-control" autofocus data-parsley-required="true" value="{{{ old('ortu_nama') ?? ($data['ortu_nama'] ?? null) }}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ortu_kerja">Pekerjaan</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="ortu_kerja" :options="$pekerjaan" selected="{{{ old('ortu_kerja') ?? ($data['ortu_kerja'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ortu_alamat">Alamat Orang Tua</label>
                                <input type="text" id="ortu_alamat" name="ortu_alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ old('ortu_alamat') ?? ($data['ortu_alamat'] ?? null) }}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ortu_telp">Nomor Telepon</label>
                                <input type="text" id="ortu_telp" name="ortu_telp" class="form-control" autofocus data-parsley-required="true" value="{{{ old('ortu_telp') ?? ($data['ortu_telp'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jurusan1">Pilihan 1</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="jurusan1" :options="$prodi" selected="{{{ old('jurusan1') ?? ($data['jurusan1'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jurusan2">Pilihan 2</label>
                                <div class="input-group mb-2">
                                    <x-form.Dropdown name="jurusan2" :options="$prodi" selected="{{{ old('jurusan2') ?? ($data['jurusan2'] ?? null) }}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jurusan_diterima">Diterima</label>
                                <input type="text" id="jurusan_diterima" name="jurusan_diterima" class="form-control" autofocus data-parsley-required="true" value="{{{ old('jurusan_diterima') ?? ($data['jurusan_diterima'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rekomendasi_nim">Rekomendasi NIM</label>
                                <div class="input-group mb-2">
                                    <input type="text" id="rekomendasi_nim" name="rekomendasi_nim" class="form-control" autofocus data-parsley-required="true" value="{{{ old('rekomendasi_nim') ?? ($data['rekomendasi_nim'] ?? null) }}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rekomendasi_nama">Rekomendasi Nama</label>
                                <div class="input-group mb-2">
                                    <input type="text" id="rekomendasi_nama" name="rekomendasi_nama" class="form-control" autofocus data-parsley-required="true" value="{{{ old('rekomendasi_nama') ?? ($data['rekomendasi_nama'] ?? null) }}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rekomendasi_hp">Rekomendasi Nomor Telepon</label>
                                <input type="text" id="rekomendasi_hp" name="rekomendasi_hp" class="form-control" autofocus data-parsley-required="true" value="{{{ old('rekomendasi_hp') ?? ($data['rekomendasi_hp'] ?? null) }}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <div class="input-group mb-2">
                    <x-form.Dropdown name="status" :options="$status" selected="{{{ old('status') ?? ($data['status'] ?? null) }}}" required />
                </div>
            </div>
                
        </div>
        <!-- end panel-body -->
        <!-- begin panel-footer -->
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
        <!-- end panel-footer -->
    </div>
    <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
    <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('/assets/js/custom/datetime-picker.js') }}"></script>
<script>
    $( document ).ready(function() {
        $("#from-datepicker").datepicker({ 
            format: 'yyyy-mm-dd'
        });
        $("#from-datepicker").on("change", function () {
            var fromdate = $(this).val();
            alert(fromdate);
        });
    }); 
    </script>
@endpush
