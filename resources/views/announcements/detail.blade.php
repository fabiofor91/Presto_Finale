<x-layout>
    <div class="container nav-top">
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="text-center">Dettaglio dell'annuncio</h1>
            </div>
            <div class="col-12 col-md-6 my-3">

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                    <div class="parallax-bg" data-swiper-parallax="-23%">carosello</div>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="w-100" src="https://picsum.photos/500/25{{random_int('0', '9')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img class="w-100" src="https://picsum.photos/500/25{{random_int('0', '9')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img class="w-100" src="https://picsum.photos/500/25{{random_int('0', '9')}}" alt="">
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
            <div class="col-12 col-md-6 my-3 border d-flex flex-column justify-content-center">
                @if ($announcement->user)
                    <p>Annuncio creato da: {{$announcement->user->name}}</p>  
                @else
                    <p>Annuncio anonimo</p>
                @endif
                <h4 class="fw-bold">{{$announcement->title}}</h4>
                <h5>Prezzo: {{$announcement->price}} €</h4>
                <p>{{$announcement->description}}</p>
                <p>Annuncio creato il {{$announcement->created_at->format('d/m/y')}}</p>
                <div>
                <a class="btn bottone my-1" href="{{route('indexAnnouncements')}}">Tutti gli annunci</a>
                    <a class="btn bottone" href="{{route('showCategory', $announcement->category)}}">Categoria {{$announcement->category->name}}</a>
                </div>

            </div>
        </div>
    </div>
</div>  


{{-- <div class="row justify-content-center">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/250" class="card-img-top" alt="immagine">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                        <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                        <p class="card-text">{{$announcement->description}}</p>
                        <a href="{{route('showCategory', $announcement->category)}}" class="btn btn-primary">Vai alla categoria {{$announcement->category->name}}</a>
                        <p class="card-footer">Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</p>
                        <p class="card-footer">Annuncio creato da {{$announcement->user->name}}</p>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row justify-content-center my-4  rounded-5">
            <h3 class="text-center my-2">Dettaglio dell'annuncio</h3>
            <div class="col-12 col-md-10  min-wv-100">
                <div class="it-carousel-wrapper it-carousel-landscape-abstract splide" data-bs-carousel-splide data-bs-ride="carousel">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="it-single-slide-wrapper">
                                    <a href="#">
                                        <div class="img-responsive-wrapper">
                                            <div class="img-responsive">
                                                <div class="img-wrapper"><img src="https://picsum.photos/200/20{{random_int('0', '9')}}" title="titolo immagine" alt="descrizione immagine"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="it-text-slider-wrapper-outside">
                                        <div class="card-wrapper">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="category-top">
                                                        <span class="data">Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</span>
                                                    </div>
                                                    <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                                                    <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                                                    <p class="card-text">{{$announcement->description}}</p>
                                                    <span class="card-signature">Annuncio creato da {{$announcement->user->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="it-single-slide-wrapper">
                                    <a href="#">
                                        <div class="img-responsive-wrapper">
                                            <div class="img-responsive">
                                                <div class="img-wrapper"><img src="https://picsum.photos/200/20{{random_int('0', '9')}}" title="titolo immagine" alt="descrizione immagine"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="it-text-slider-wrapper-outside">
                                        <div class="card-wrapper">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="category-top">
                                                        <span class="data">Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</span>
                                                    </div>
                                                    <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                                                    <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                                                    <p class="card-text">{{$announcement->description}}</p>
                                                    <span class="card-signature">Annuncio creato da {{$announcement->user->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="it-single-slide-wrapper">
                                    <a href="#">
                                        <div class="img-responsive-wrapper">
                                            <div class="img-responsive">
                                                <div class="img-wrapper"><img src="https://picsum.photos/200/20{{random_int('0', '9')}}" title="titolo immagine" alt="descrizione immagine"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="it-text-slider-wrapper-outside">
                                        <div class="card-wrapper">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="category-top">
                                                        <span class="data">Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</span>
                                                    </div>
                                                    <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                                                    <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                                                    <p class="card-text">{{$announcement->description}}</p>
                                                    <span class="card-signature">Annuncio creato da {{$announcement->user->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

</x-layout>