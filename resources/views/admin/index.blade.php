@extends('layouts.bsnav')

@section('content')
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img src="{{url('/icons/icons8-medium-150.png')}}" height="40px" alt="">
        <!-- {{ config('app.name', 'Medium') }} -->
      <h2 class="logo-name" style="padding-left: 5px">Medium</h2>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
      <li class="nav-item"><a class="nav-link" href="#">
          <svg class="nav-icon">
            <a href="#"></a>
          </svg> Dashboard</a>
      </li>
      <li class="nav-title">Post & Comments</li>
      <li class="nav-item"><a class="nav-link" href="#">
        <svg class="nav-icon">
          <a href="#"></a>
        </svg> Create Post</a>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">
        <svg class="nav-icon">
          <a href="#"></a>
        </svg> User Comments</a>
      </li>
      <li class="nav-title">Category</li>
      <li class="nav-group"><a class="nav-link" href="#">
        <svg class="nav-icon">
          <a href="#"></a>
        </svg> Create Category</a>
      </li>
    </ul>
  </div>
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
      <div class="container-fluid">
        <ul class="header-nav d-none d-md-flex">
          <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>
      </div>
      <div class="header-divider"></div>
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
              <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>Dashboard</span></li>
          </ol>
        </nav>
      </div>
    </header>

  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
  <script src="node_modules/simplebar/dist/simplebar.min.js"></script>
  <!-- Plugins and scripts required by this view-->
  <script src="node_modules/chart.js/dist/chart.min.js"></script>
  <script src="node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
  <script src="node_modules/@coreui/utils/dist/coreui-utils.js"></script>
  <script src="js/main.js"></script>
  <script>
  </script>
@endsection
