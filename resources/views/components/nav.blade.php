<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">Presto ItaliaUnita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @guest
              
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="#">Benvenuto {{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inserisci Annuncio</a>
          </li>
          <form action="{{route('logout')}}" method="post">
           @csrf
           <button type="submit" class="btn btn-danger">Logout</button> 
        </form>

          {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> --}}
          @endguest
        </ul>
      </div>
    </div>
  </nav>