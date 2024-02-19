<nav class="navbar navbar-expand-lg bg-body-tertiary nav-custom fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
      <img src="/media/img/logoPresto.png" class="logo" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav d-flex mx-auto">
          <a class="nav-link active mx-5" aria-current="page" href="{{route('welcome')}}">Home</a>
          {{-- Dropdown categorie  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
                  
              <li><a class="dropdown-item" href="{{route('showCategory', compact('category'))}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          @guest
          <a class="nav-link mx-5" href="{{route('register')}}">Registrati</a>
          <a class="nav-link mx-5" href="{{route('login')}}">Accedi</a>
          @else
          <a class="nav-link mx-5" href="#">Benvenuto {{Auth::user()->name}}</a>
          <a class="nav-link mx-5" href="{{route('create_announcement')}}">Inserisci Annuncio</a>
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button> 
          </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>


  {{-- <div height= "1000px "class="vh-100"></div> --}}