@extends('layouts.app')
@section('title', 'Cozybook Hub')
@section('section')
  <div class="page-wrapper">
    
    <div class="page-header">
      <div class="row">
        <div class="col">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home.index') }}"></a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body bg-gray-100 p-8">
            @include('resource')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

