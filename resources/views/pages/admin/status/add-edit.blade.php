@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Status' : 'Create Status' )

@push('css')
<link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">@yield('title')</h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.status.update', $data->id) : route('admin.status.store') }}" id="form" name="form" method="POST" enctype="multipart/form-data" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form Status</h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
      </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body p-t-10">
      <div class="panel-body">
        <div class="row row-space-5">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"><b>Tanggal</b></label>
              <input type="date" name="tgl" placeholder="Masukkan Tanggal" class="form-control" autofocus data-parsley-required="true" value="{{{ old('tgl') ?? $data->tgl ?? null }}}">
            </div>
            <div class="form-group">
              <label for="name"><b>Pendaftar</b></label>
              <input type="text" name="pendaftar" placeholder="Masukkan Nama Pendaftar" class="form-control" data-parsley-required="true" value="{{{ old('pendaftar') ?? $data->pendaftar ?? null }}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"><b>Kategori</b></label>
              <input type="text" name="kategori" placeholder="Masukkan Kategori" class="form-control" data-parsley-required="true" value="{{{ old('kategori') ?? $data->kategori ?? null }}}">
            </div>
            <div class="form-group">
              <label for="name"><b>Status</b></label>
              <select class="default-select2 form-control" name="status">
                  <option value="">Pilih Status</option>
                  <option value="Diterima">Diterima</option>
                  <option value="Ditolak">Ditolak</option>
              </select>
            </div>
          </div>
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
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush