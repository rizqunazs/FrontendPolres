@extends('layouts.user')

@push('css')
<link rel="stylesheet" type="text/css" href="\assets\css\default\style.css">
@endpush

@section('content')
<div class="container">

    <!-- greeting -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class ="child1">
                        {{ __('SELAMAT DATANG, NAMA PENDAFTAR!') }}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of greeting -->

    <!-- timeline -->
    <div class ="card">
    <div class="rightbox">
        <div class="rb-container">
          <ul class="rb">
            <li class="rb-item" ng-repeat="itembx">
              <div class="timestamp">
                3rd May 2020<br> 7:00 PM
              </div>
              <div class="item-title">Chris Serrano posted a photo on your wall.</div>
    
            </li>
            <li class="rb-item" ng-repeat="itembx">
              <div class="timestamp">
                19th May 2020<br> 3:00 PM
              </div>
              <div class="item-title">Mia Redwood commented on your last post.</div>
    
            </li>
    
            <li class="rb-item" ng-repeat="itembx">
              <div class="timestamp">
                17st June 2020<br> 7:00 PM
              </div>
              <div class="item-title">Lucas McAlister just send you a message.</div>
    
            </li>
    
          </ul>
    
        </div>
      </div>
    </div>
    <!-- end of timeline-->
</div>


@endsection