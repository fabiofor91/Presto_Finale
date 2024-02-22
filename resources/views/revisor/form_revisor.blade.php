<x-layout>
    <div class="container-fluid">
        <div class="col-12">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-12 col-lg-4 mb-3 mb-lg-0 text-center text-md-start text-lg-start text-muted">&copy; 2024 Aulab: Fabio Forgiarini . Francesco Giusto . Michele Di Martino . Armando Campanella .</p>
        
            <a href="/" class="col-md-12 col-lg-4 d-flex align-items-center justify-content-center mb-3 mb-lg-0 link-dark text-decoration-none">
              <img src="/media/img/logoPresto.png" class="logo" alt="logo">
            </a>        
            <ul class="nav col-md-12 col-lg-4 justify-content-center justify-content-md-end justify-content-lg-end">
              <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="{{route('indexAnnouncements')}}" class="nav-link px-2 text-muted">Annunci</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">In lavorazione</a></li>
              <li class="nav-item"><a href="{{route('form_revisor')}}" class="nav-link px-2 text-muted">Lavora con noi</a></li>
            </ul>
          </footer>
         </div>
      </div>
</x-layout>