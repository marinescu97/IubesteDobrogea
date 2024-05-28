<div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: black;">
        <a class="navbar-brand" href="{{route('acasa')}}">
            <img src="{{ asset('img\appLogo.png') }}" width="300" height="75" class="d-inline-block align-top" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item nav-link">
                <a class="nav-link" href="{{route('acasa')}}" id="nav-link">Acasa
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item nav-link">
                <a class="nav-link" href="{{route('producatori')}}" id="nav-link">Producatori</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="nav-link" href="{{route('produse')}}" id="nav-link">Produse</a>
                    </li>
                <li class="nav-item nav-link">
                <a class="nav-link" href="{{ route('listaevenimente')}}" id="nav-link">Evenimente</a>
                </li>
                @if (!Auth::check() || (Auth::check() && Auth::user()->admin==0))
                <li class="nav-item nav-link">
                <a class="nav-link" id="nav-link" href="{{route ('contact')}}">Contact</a>
                </li>
                @endif
          </ul>
          <ul class="navbar-nav ml-auto">
              @guest
          <li class="nav-item nav-link" id="nav-link">
               <a href="{{ route('login')}}" id="auth-link">Conectare</a>
          </li>
            @else
            <!--Dropdown link-->
            <div class="dropdown avatar " style="right: 100px;">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"   aria-expanded="false" v-pre>
                    <img src="/storage/profil/{{Auth::user()->avatar}}" style="width: 65px; height: 65px;                                                         border-radius: 50%;" alt="{{ Auth::user()->nume }}">
                </a>
                <!--Dropdown item-->
                @if (Auth::check() && Auth::user()->admin == 0)
                <div class="dropdown-menu ">
                    <a class="dropdown-item" href="{{ route('producator.profil') }}" id="auth-item">
                        {{ __('Profil') }}
                    </a>

                <a class="dropdown-item" href="{{ route('producator.adaugaprodus')}}" id="auth-item">
                        {{ __('Adauga produs') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('producator.adaugaeveniment')}}" id="auth-item">
                        {{ __('Adauga eveniment') }}
                    </a>

                    <a class="dropdown-item" href="{{ route('producator.setari') }}" id="auth-item">
                        {{ __('Setari Profil') }}
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
                @endif
                @if (Auth::check() && Auth::user()->admin == 1)
                <div class="dropdown-menu ">
                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}" id="auth-item">
                        {{ __('Pagina principala') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('admin.adaugaeveniment')}}" id="auth-item">
                        {{ __('Adauga eveniment') }}
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
                @endif
            </div>
              @endguest
          </ul>
        </div>
      </nav>
</div>
<script>
    $(document).ready(function(){
  $(".dropdown-toggle").dropdown();
});
</script>
