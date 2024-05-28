<nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark">
    <img src="{{ asset('img/appLogo.png') }}" width="300" height="75" class="d-inline-block align-top" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav side-nav">
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard')}}" id="link">Dashboard
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.producatori')}}" id="link">Producatori</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.produse')}}" id="link">Produse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.evenimente')}}" id="link">Evenimente</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.mesaje')}}" id="link">Mesaje</a>
          </li>
      </ul>
      <ul class="navbar-nav ml-md-auto d-md-flex">
        <div class="dropdown avatar" style="right: 100px;">
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"   aria-expanded="false" v-pre>
                <img src="/storage/profil/{{Auth::user()->avatar}}" style="width: 65px; height: 65px; border-radius: 50%;" alt="Avatar">
            </a>
            <div class="dropdown-menu ">
              <a class="dropdown-item" href="{{ route('admin.setari') }}" id="auth-item">
                {{ __('Profil') }}
              </a>
                <a class="dropdown-item" href="{{ route('acasa') }}" id="auth-item">
                    {{ __('Platforma') }}
                </a>
                <a class="dropdown-item" href="{{ route('acasa') }}"
                       onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" id="auth-item">
                        {{ __('Deconectare') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
        </div>
      </ul>
    </div>
  </nav>
