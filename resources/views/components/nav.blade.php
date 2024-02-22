<nav class="navbar navbar-expand-lg bg-body-tertiary nav-custom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">
      <img src="/media/img/logoPresto.png" class="logo" alt="logo">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav d-flex mx-auto">
          <a class="nav-link active mx-5" aria-current="true" href="{{route('welcome')}}">Home</a>
          {{-- Dropdown categorie  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" aria-current="true" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu ">
              @foreach ($categories as $category)
              
              <li><a class="dropdown-item" href="{{route('showCategory', compact('category'))}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <a class="nav-link mx-2" aria-current="true" href="{{route('indexAnnouncements')}}">Annunci</a>
          @guest
          <a class="nav-link mx-2" aria-current="true" href="{{route('register')}}">Registrati</a>
          <a class="nav-link mx-2" aria-current="true" href="{{route('login')}}">Accedi</a>
          @else
          <a class="nav-link mx-2" href="#">Benvenuto {{Auth::user()->name}}</a>
          <a class="nav-link mx-2" aria-current="true" href="{{route('create_announcement')}}">Inserisci Annuncio</a>

          {{--! controllo utente revisore e relativa rotta per la  pagina di revisione  da sistemare la parte gra-FICA --}}

          @if (Auth::user()->is_revisor)
          <div class="position-relative">
            <a class="nav-link active mx-2 btn-revisor bottone" aria-current="true" href="{{route('revisor.index')}}" >Zona revisore</a>
            <div class=" d-flex justify-content-center align-items-center position-absolute top-0 end-0 counter">
              <span class="">{{App\Models\Announcement::toBeRevisionedCount()}}</span>
            </div>
          </div>
            
          
          @endif
          {{-- fine  --}}
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn bottone">Logout</button> 
          </form>
          @endguest
          {{-- barra di ricerca  --}}
          
        </div>
        <form class="d-flex" role="search" method="GET" action="{{route('search_announcement')}}">
          <input class="form-control me-2" type="search" aria-label="Search" name="searched">
          <button class="btn btn-outline-success bottone" type="submit">Cerca</button>
        </form>
      </div>
    </div>

  </nav>