<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light shadow py-2">
    <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
            <img src="{{asset('website/')}}/assets/img/brand/blue.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="{{asset('website/')}}/assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav align-items-lg-center">
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/">
                        <span class="nav-link-inner--text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/catalog">
                        <span class="nav-link-inner--text">Katalog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="javascript:;">
                        <span class="nav-link-inner--text">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/about">
                        <span class="nav-link-inner--text">Tentang</span>
                    </a>
                @else
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/">
                        <span class="nav-link-inner--text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('blog') }}">
                        <span class="nav-link-inner--text">Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/about">
                        <span class="nav-link-inner--text">Tentang</span>
                    </a>
                @endif
                </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            @if (Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:;" id="nav-inner-primary_dropdown_1" role="button" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu" aria-labelledby="nav-inner-primary_dropdown_1">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout">Logout</a>
                </div>
              </li>
            @else
            <li class="nav-item d-none d-lg-block ml-lg-4">
                <a class="btn btn-outline-primary {{request()-> is('login','register')?'active':''}}" href="/login">
                    <span class="nav-link-inner--text">Log In</span>
                </a>
            </li>
                
            @endif
            </ul>
        </div>
    </div>
</nav>