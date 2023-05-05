@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Prodi' : 'Create Prodi' )

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
<form action="{{ isset($data) ? route('admin.prodi.update', $data->id) : route('admin.prodi.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form Progam Studi</h4>
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
              <label for="name"><b>Nama Fakultas</b></label>
              <div class="input-group mb-2">
                <x-form.Dropdown name="fakultas_id" :options="$fakultas" selected="{{{ $data['fakultas_id'] ?? old('fakultas_id') }}}" required />
              </div>
            </div>
            <div class="form-group">
              <label for="name"><b>Jenjang</b></label>
              <div class="input-group mb-2">
                <x-form.Dropdown name="jenjang_id" :options="$dropdownJenjang" selected="{{{ $data['jenjang_id'] ?? old('jenjang_id') }}}" required />
                
              {{-- <select class="default-select2 form-control" id="jenjang_id" name="jenjang_id">
                  <option value="">Pilih Jenjang</option> --}}

                  {{-- <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option> --}}

                  {{-- <option value="1" {{ old('jenjang_id') == 1 || ( isset($data) && $data->jenjang_id == 1 ) ? 'selected': '' }}>D3</option>
                  <option value="2" {{ old('jenjang_id') == 2 || (isset($data) && $data->jenjang_id == 2) ? 'selected': '' }}>S1</option>
                  <option value="3" {{ old('jenjang_id') == 3 || (isset($data) && $data->jenjang_id == 3) ? 'selected': '' }}>S2</option> --}}

                  {{-- <option value="D3" {{{  $data->jenjang_id == 'D3' ? 'selected': ''  }}}>D3</option>
                  <option value="S1" {{{  $data->jenjang_id == 'S1' ? 'selected': ''  }}}>S1</option>
                  <option value="S2" {{{  $data->jenjang_id == 'S2' ? 'selected': ''  }}}>S2</option> --}}
                  
                {{-- </select> --}}

              </div>
            </div>
            <div class="form-group">
              <label for="name"><b>Kode Progam Studi</b></label>
              <input type="text" name="kode_prodi" placeholder="Masukkan Kode Program Studi" class="form-control" data-parsley-required="true" value="{{{ $data->kode_prodi ?? old('kode_prodi') }}}">
            </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="name"><b>Nama Progam Studi</b></label>
                <input type="text" name="prodi" placeholder="Masukkan Nama Program Studi" class="form-control" data-parsley-required="true" value="{{{ $data->prodi ?? old('prodi')  }}}">
              </div>
              <div class="form-group">
                <label for="name"><b>Nama Kepala Progam Studi</b></label>
                <input type="text" name="kaprodi" placeholder="Masukkan Nama Kepala Program Studi" class="form-control" data-parsley-required="true" value="{{{  $data->kaprodi ?? old('kaprodi') }}}">
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
<script>
 
$(document).ready(function() {
    $(".default-select2").select2();
});
 
</script>
@endpush