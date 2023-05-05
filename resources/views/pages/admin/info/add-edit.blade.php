@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Info' : 'Create Info' )

@push('css')
<link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" />
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
<form action="{{ isset($data) ? route('admin.info.update', $data->id) : route('admin.info.store') }}"  method="POST" enctype="multipart/form-data" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form Info</h4>
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
      <div class="panel-body">  
        <div class="form-group">
          <label for="name"><b>Judul</b></label>
          <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" autofocus data-parsley-required="true" value="{{{ old('judul') ?? $data->judul ?? null }}}">
        </div>
        <div class="form-group">
          <label for="name"><b>Info</b></label>
          <textarea type="text" name="info" id="wysihtml5" rows="25" placeholder="Masukkan Info" class="wysihtml5" data-parsley-required="true" value="{{{ old('info') ?? $data->info ?? null }}}">{{{ old('info') ?? $data->info ?? null }}}</textarea>
        </div>
        <div class="row ">
          <div class="col-md-6">
              <label for="gambar"><b>Gambar</b></label>
              {{-- <div class="input-group"> --}}
              <input type="file" name="gambar" placeholder="Gambar" value="{{{ $data->gambar ?? old('gambar') }}}" required />
              {{-- </div> --}}
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
{{-- <script>
    var handleFormWysihtml5 = function () {
      "use strict";
      $('#wysihtml5').wysihtml5();
    };

    var FormWysihtml5 = function () {
      "use strict";
      return {
        //main function
        init: function () {
          handleFormWysihtml5();
        }
      };
    }();

    $(document).ready(function() {
      FormWysihtml5.init();
    });
</script> --}}
<script src="{{ asset('/assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('/assets/js/demo/form-wysiwyg.demo.js') }}"></script>
@endpush