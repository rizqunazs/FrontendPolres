@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Gelombang' : 'Create Gelombang' )

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
<form action="{{ isset($data) ? route('admin.gelombang.update', $data->id) : route('admin.gelombang.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
      <label for="tahun_id">Tahun</label>
      <div class="input-group mb-2">
        <x-form.Dropdown name="tahun_id" :options="$dropdownTahun"
            selected="{{{ old('tahun_id') ?? ($data['tahun_id'] ?? null) }}}" required />
      </div>

      <div class="form-group">
        <label for="kode_gelombang">Kode Gelombang</label>
        <input type="text" id="kode_gelombang" name="kode_gelombang" class="form-control" autofocus data-parsley-required="true" value="{{{ old('kode_gelombang') ?? ($data['kode_gelombang'] ?? null) }}}">
      </div>
      
      <div class="form-group">
        <label for="gelombang">Nama Gelombang</label>
        <input type="text" id="gelombang" name="gelombang" class="form-control" autofocus data-parsley-required="true" value="{{{ old('gelombang') ?? ($data['gelombang'] ?? null) }}}">
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="text" id="tgl_mulai" name="tgl_mulai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('tgl_mulai') ?? (isset($data['tgl_mulai']) ? $data['tgl_mulai']->format('dd-mm-YYYY') : null) ?? null}}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="text" id="tgl_selesai" name="tgl_selesai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('tgl_selesai') ?? (isset($data['tgl_selesai']) ? $data['tgl_selesai']->format('dd-mm-YYYY') : null) ?? null}}}">
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
                <label for="test_mulai">Test Mulai</label>
                <input type="text" id="test_mulai" name="test_mulai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('test_mulai') ?? (isset($data['test_mulai']) ? $data['test_mulai']->format('dd-mm-YYYY') : null) ?? null}}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="test_selesai">Test Selesai</label>
                <input type="text" id="test_selesai" name="test_selesai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('test_selesai') ?? (isset($data['test_selesai']) ? $data['test_selesai']->format('dd-mm-YYYY') : null) ?? null}}}">
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
                <label for="wawancara_mulai">Wawancara Mulai</label>
                <input type="text" id="wawancara_mulai" name="wawancara_mulai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('wawancara_mulai') ?? (isset($data['wawancara_mulai']) ? $data['wawancara_mulai']->format('dd-mm-YYYY') : null) ?? null}}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="wawancara_selesai">Wawancara Selesai</label>
                <input type="text" id="wawancara_selesai" name="wawancara_selesai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('wawancara_selesai') ?? (isset($data['wawancara_selesai']) ? $data['wawancara_selesai']->format('dd-mm-YYYY') : null) ?? null}}}">
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
                <label for="her_mulai">Heregistrasi Mulai</label>
                <input type="text" id="her_mulai" name="her_mulai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('her_mulai') ?? (isset($data['her_mulai']) ? $data['her_mulai']->format('dd-mm-YYYY') : null) ?? null}}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="her_selesai">Heregistrasi Selesai</label>
                <input type="text" id="her_selesai" name="her_selesai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('her_selesai') ?? (isset($data['her_selesai']) ? $data['her_selesai']->format('dd-mm-YYYY') : null) ?? null}}}">
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
                <label for="almamater_mulai">Almamater Mulai</label>
                <input type="text" id="almamater_mulai" name="almamater_mulai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('almamater_mulai') ?? (isset($data['almamater_mulai']) ? $data['almamater_mulai']->format('dd-mm-YYYY') : null) ?? null}}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="almamater_selesai">Almamater Selesai</label>
                <input type="text" id="almamater_selesai" name="almamater_selesai" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('almamater_selesai') ?? (isset($data['almamater_selesai']) ? $data['almamater_selesai']->format('dd-mm-YYYY') : null) ?? null}}}">
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="pembekalan">Pembekalan</label>
            <input type="text" id="pembekalan" name="pembekalan" class="form-control date-picker" autofocus data-parsley-required="true" value="{{{ old('pembekalan') ?? (isset($data['pembekalan']) ? $data['pembekalan']->format('dd-mm-YYYY') : null) ?? null}}}">
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
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('/assets/js/custom/datetime-picker.js') }}"></script>
<script type="text/javascript">
  $(function () {
      // mulai
      $('#tgl_mulai').datetimepicker();
      $('#test_mulai').datetimepicker();
      $('#wawancara_mulai').datetimepicker();
      $('#her_mulai').datetimepicker();
      $('#almamater_mulai').datetimepicker();

      // selesai
      $('#tgl_selesai').datetimepicker({ useCurrent: false });
      $('#test_selesai').datetimepicker({ useCurrent: false });
      $('#wawancara_selesai').datetimepicker({ useCurrent: false });
      $('#her_selesai').datetimepicker({ useCurrent: false });
      $('#almamater_selesai').datetimepicker({ useCurrent: false });

      $("#tgl_mulai").on("dp.change", function (e) {
          $('#tgl_selesai').data("DateTimePicker").minDate(e.date);
      });
      $("#tgl_selesai").on("dp.change", function (e) {
          $('#tgl_mulai').data("DateTimePicker").maxDate(e.date);
      });

      $("#test_mulai").on("dp.change", function (e) {
          $('#test_selesai').data("DateTimePicker").minDate(e.date);
      });
      $("#test_selesai").on("dp.change", function (e) {
          $('#test_mulai').data("DateTimePicker").maxDate(e.date);
      });

      $("#wawancara_mulai").on("dp.change", function (e) {
          $('#wawancara_selesai').data("DateTimePicker").minDate(e.date);
      });
      $("#wawancara_selesai").on("dp.change", function (e) {
          $('#wawancara_mulai').data("DateTimePicker").maxDate(e.date);
      });

      $("#her_mulai").on("dp.change", function (e) {
          $('#her_selesai').data("DateTimePicker").minDate(e.date);
      });
      $("#her_selesai").on("dp.change", function (e) {
          $('#her_mulai').data("DateTimePicker").maxDate(e.date);
      });

      $("#almamater_mulai").on("dp.change", function (e) {
          $('#almamater_selesai').data("DateTimePicker").minDate(e.date);
      });
      $("#almamater_selesai").on("dp.change", function (e) {
          $('#almamater_mulai').data("DateTimePicker").maxDate(e.date);
      });
  });
</script>
@endpush