<x-layout>
  
  <div class="container nav-top">
    <div class="row justify-content-around">
      @if (session('access.denied'))
      <div class="col-12 col-md-10">
        <div class="d-flex justify-content-center alert alert-danger"> <br>
          {{session('access.denied')}}
        </div>
      </div>
      @endif
      @if (session('status'))
      <div class="col-12 col-md-10">
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      </div>
      @endif
      @if (session('message'))
      <div class="col-12 col-md-10">
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
      </div>
      @endif
      <div class="col-12 col-md-5 d-flex align-items-center justify-content-center flex-column">
        <h1 class="text-center display-1 my-5">Presto.it ItaliaUnita</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla beatae aperiam harum quia tempore laudantium? Voluptas reprehenderit quidem minima ipsum, consequuntur incidunt suscipit, vero alias modi quo fuga ex facilis!</p>
      </div>
      <div class="col-12 col-md-5 ">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner m-1">
            <div class="carousel-item active">
              <img src="https://picsum.photos/30{{random_int('0', '9')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/30{{random_int('0', '9')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/30{{random_int('0', '9')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  {{-- Sezione ultimi annunci --}}
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="text-center display-3">Ultimi Annunci</h3>
      </div>
      @foreach ($announcements as $announcement)
      
      <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
        <div class="card" style="width: 18rem;">
          <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200/250'}}" class="card-img-top" alt="immagine">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
            <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
            <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1">Vai al dettaglio</a>
            <a href="{{route('showCategory', $announcement->category)}}" class="btn btn-primary my-1">Vai alla categora {{$announcement->category->name}}</a>
            <p class="card-footer">Annuncio #{{$announcement->id}} creato il {{$announcement->created_at->format('d/m/Y')}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{-- <div class="vh-100"></div> --}}
</x-layout>