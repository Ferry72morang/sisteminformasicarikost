 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route("home")}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route("admin.index")}}" class="nav-link">Data pemilik Kost</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route("home")}}" class="nav-link">Pesan</a>
      </li>
     
    </ul>

   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a  href="{{route('logout')}}" class="d-block" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        <i class="fas fa-power-off"></i>
        </a>

          <form id="logout-form" action="{{route('logout')}}"
          method="POST" style="display: none;">
          @csrf
          </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->