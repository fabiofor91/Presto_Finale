<nav class="navbar navbar-expand-lg bg-body-tertiary nav-custom fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
      <img src="./media/img/logo_Presto.png" class="logo" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active mx-5" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @guest
              
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link mx-5" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-5" href="{{route('login')}}">Accedi</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="#">Benvenuto {{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('create_announcement')}}">Inserisci Annuncio</a>
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


  {{-- <div height= "1000px "class="vh-100"></div> --}}