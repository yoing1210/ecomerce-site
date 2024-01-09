<nav class="navbar navbar-expand-lg navbar-light shadow p-2 mb-5 bg-body-tertiary rounded sticky-top bg-white z-3">
  <div class="container">
      <style>
        .navbar-brand h5{
          font-size:12px;
          margin-left: 3px;

        }
        .navbar-brand b{
          color: #964B00;
          font-size:30px;
          margin-bottom: -20px;

        }
      </style>
    
    
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
    <div class="collapse navbar-collapse "  id="navbarNav">
      <a class="navbar-brand" href="{{ route("home") }}" width="80"  class="d-inline-block align-text-top">
        <h5>mebel</h5> <b>Puji</b>
      </a>
      <ul class="navbar-nav h6">
        
        <li class="nav-item">
          <a class="nav-link {{ ($title === "home" ) ? 'active' : '' }}" href="{{ route("home") }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "produk" ) ? 'active' : '' }}" href="{{ route("cat") }}">Produk</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ ($active === "layanan" ) ? 'active' : '' }}" href="{{ route("layanan") }}">Layanan</a>
        </li>
       
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($active === "about" ) ? 'active' : '' }}" href="{{ route("about") }}">Contact Us</a>
        </li> --}}
      </ul>

     
    
      <ul class="navbar-nav ms-auto h4">
        <ul class="navbar-nav h6">
          <form action="/posts"  class="d-flex mx-3 pt-1">
            <input type="text" class="form-control" placeholder="Search..." name="search" style="border-radius: 5%;
            value="{{ request('search') }}>
            <button class="btn btn-primary" style="border-radius: 5%;" type="submit" ><i class="bi bi-search"></i> </button>
           </form>
        </ul>
        @auth
        <li class="nav-item dropdown h6 ">
          <div class="dropdown-center mx-auto pt-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown"  aria-expanded="false">
            Halo, {{ auth()->user()->username }}
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><h5 class="dropdown-header h6 navbar-light shadow-sm" style=" color:#7b3e00; "><strong> &emsp; PROFIL</strong> </h5></li>
            @if (auth()->user()->is_admin==true)
            <li>  
              <a class="dropdown-item shadow-sm " href="/dashboard">
                <i class="dropdown-header" style="color: #000000;"><i class="bi bi-cart2 fa-sm" ></i>  &emsp; Dashboard  </i>
              </a>
            </li>
            @endif
            <li>  
              <a class="dropdown-item shadow-sm" href="/profile">
                <i class="dropdown-header" style="color: #000000;"><i class="bi bi-person-video"></i> &emsp; Profil Saya </i>
              </a>
            </li>
            
            <li>  
              <a class="dropdown-item shadow-sm" href="/history">
                <i class="dropdown-header" style="color: #000000;"><i class="bi bi-menu-down"></i> &emsp; Riwayat Pemesanan </i>
              </a>
            </li>


            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item h6 "><i class="dropdown-header" style="color: #000000;">   <i class="bi bi-x-square"></i> &emsp; logout   </i></button>
              </form>
            </li>
          </ul>
        </div>
        </li>
        
        @else
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-auto px">
        <a href="/login" class="nav-link {{ ($active === "login" ) ? 'active' : '' }}"> <i class="bi bi-person"></i></i></i></a>
          </li>
        </ul>

      @endauth
      <li class="nav-item ">
        <a class="nav-link {{ ($active === "cart" ) ? 'active' : '' }} " href="{{ route("cart") }}"><i class="bi bi-cart2 fa-sm " ></i></a>
      </li> 
      </ul>

    </div> 
  </div>
</nav>
