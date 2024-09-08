@extends('layouts.index')
@section('content')
@include('layouts.sidebar')
<div class="dashboard-main-wrapper">
  @include('layouts.topbar')
  <div class="dashboard-body">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
      <ul class="flex-align gap-4">
        <li><a href="@yield('dashboard')" class="text-gray-200 fw-normal text-15 hover-text-main-600">Dashboard</a></li>
        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
        <li><span class="text-main-600 fw-normal text-15">@yield('breadcrum')</span></li>
      </ul>
    </div>
    <!-- Breadcrumb End -->
    @yield('content2')
  </div>
  <div class="dashboard-footer">
    <div class="flex-between flex-wrap gap-16">
      <p class="text-gray-300 text-13 fw-normal">2024 - Tim Pengadian Fakultas Keguruan dan Ilmu Pendidikan Universitas
        Madura</p>
    </div>
  </div>
</div>
@endsection