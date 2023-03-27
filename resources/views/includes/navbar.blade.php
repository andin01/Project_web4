<div class="container-fluid bg-light position-relative shadow">
  <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
    <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
      <!-- <i class="flaticon-043-teddy-bear"></i> -->
      <img src="img/logo-smk-7.png" >
      <!-- <img src="img/logo-smk-7.png" class="logo-header"> -->
      
      <span class="text-primary">SMKN 7 Jember</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
        <a href="/class" class="nav-item nav-link {{ Request::is('class') ? 'active' : '' }}">Classes</a>
        <a href="/teacher" class="nav-item nav-link {{ Request::is('teacher') ? 'active' : '' }}">Teachers</a>
        <a href="/gallery" class="nav-item nav-link {{ Request::is('gallery') ? 'active' : '' }}">Gallery</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
          <div class="dropdown-menu rounded-0 m-0">
            <a href="/grid" class="dropdown-item">Blog Grid</a>
            <a href="/detail" class="dropdown-item">Blog Detail</a>
          </div>
        </div>
        <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
      </div>
      <a href="" class="btn btn-primary px-4">Join Class</a>
    </div>
  </nav>
</div>
