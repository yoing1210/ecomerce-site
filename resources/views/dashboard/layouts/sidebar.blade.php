<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">


      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3
      mt-5 mb-2 text-muted">
        <span>Order Administrator</span>
      </h6>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          List Order
        </a>
      </li>


      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3
      mt-4 mb-2 text-muted">
        <span>Post Administrator</span>
      </h6>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
          <span data-feather="archive" class="align-text-bottom"></span>
          Post Product
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
          <span data-feather="grid" class="align-text-bottom"></span>
          Post Categories
        </a>
      </li>



      

      {{-- <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/postImages*') ? 'active' : '' }}" href="/dashboard/postImages">
          <span data-feather="image" class="align-text-bottom"></span>
          Post Images
        </a>
      </li> --}}

    </ul>
  </div>
</nav>