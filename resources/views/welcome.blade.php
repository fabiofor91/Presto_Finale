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
        <img class="img-titolo" src="/media/img/logoPresto.png" alt="">
        <h1 class="text-center display-1 my-2">ItaliaUnita</h1>
        <p style="text-align: justify;">{{__('ui.presto')}}</p>
      </div>
      <div class="col-12 col-md-5 my-auto">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
          </div>
          <div class="carousel-inner m-1">
            <div class="carousel-item active ">
              <img src="/media/img/Saldi50_2.jpg" class="d-block w-100 img-carousel" alt="...">
            </div>
            <div class="carousel-item ">
              <img src="/media/img/abbigliamento.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block text-black">
                <h5 class="fw-semibold">{{__('ui.abbigliamento')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/shoes.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.scarpe')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/Accessori.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.accessori')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/elettronica.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.elettronica')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/Motori.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.motori')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/Arredamento.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.arredamento')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/Libri.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.libri')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/Musica.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.musica')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/Film.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.film')}}</h5>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="/media/img/sport.jpg" class="d-block w-100 img-carousel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-semibold">{{__('ui.sport')}}</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon text-black" aria-hidden="true"></span>
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
        <h3 class="text-center display-3 my-5"><span class="titleCreate">{{__('ui.last_announcements')}}</span></h3>
      </div>
      @foreach ($announcements as $announcement)
      
      <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
        <div class="card  img" style="width: 18rem;">
          <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(250, 200) : '/media/img/default.png'}}" class="card-img-top imgcard" alt="immagine">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
            <h5 class="card-title">{{__('ui.price')}}: {{$announcement->price}} €</h5>
            <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1">{{__('ui.detail')}}</a>
            <a href="{{route('showCategory', $announcement->category)}}" class="btn btn-primary my-1">{{__('ui.go_category')}} {{__('ui.' . $announcement->category->name)}}</a>
            <p class="card-footer">{{__('ui.created_at')}} {{$announcement->created_at->format('d/m/Y')}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{-- <div class="vh-100"></div> --}}
</x-layout>