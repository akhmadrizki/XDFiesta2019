<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('adminDashboard/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('adminDashboard/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('adminDashboard/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('adminDashboard/modules/jquery-selectric/selectric.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('adminDashboard/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('adminDashboard/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('adminDashboard/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Member since {{ Auth::user()->created_at->format('F Y') }}</div>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display:none;">
                {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">XD Fiesta</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">XD</a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Starter</li>
            
            <li class="{{ $navActive == 'Write Post' ? 'active' : NULL }}"><a class="nav-link" href="/dashboard"><i class="fas fa-edit"></i> <span>Write Post</span></a></li>
            <li class="{{ $navActive == 'List Post' ? 'active' : NULL }}"><a class="nav-link" href="/dashboard/list"><i class="fas fa-list"></i> <span>List Post</span></a></li>

            <li class="menu-header">Applications</li>
            <li class="{{ $navActive == 'Application Contest' ? 'active' : NULL }}"><a class="nav-link" href="{{route('daftar.peserta')}}"><i class="fas fa-chalkboard-teacher"></i> <span>Application Contest</span></a></li>
          </ul>

          </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer text-center">
          Copyright XD Fiesta &copy; {{ date("Y") }} <div class="bullet"></div> All Rights Reserved
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('adminDashboard/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('adminDashboard/modules/popper.js')}}"></script>
  <script src="{{ asset('adminDashboard/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('adminDashboard/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('adminDashboard/modules/moment.min.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('adminDashboard/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{ asset('adminDashboard/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('adminDashboard/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('adminDashboard/js/scripts.js')}}"></script>
  <script src="{{ asset('adminDashboard/js/custom.js')}}"></script>
</body>
</html>