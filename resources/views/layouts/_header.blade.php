<div class="container-fluid bg-light position-relative shadow">
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
      <a
        href=""
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 50px"
      >
        <i class="flaticon-043-teddy-bear"></i>
        <span class="text-primary">Bloggit</span>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="index.html" class="nav-item nav-link active">Home</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu rounded-0 m-0">
              <a href="blog.html" class="dropdown-item">Blog Grid</a>
              <a href="single.html" class="dropdown-item">Blog Detail</a>
            </div>
          </div>
        </div>

        <!----- Login and register buttons ------->
        <a href="{{ url('login') }}" class="btn btn-primary px-4">Login</a>
        <a href="{{ url('register') }}" style="margin-left: 8px;" class="btn btn-primary px-4">Register</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
