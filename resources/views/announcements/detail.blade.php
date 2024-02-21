<x-layout>
    <div class="container nav-top">
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
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
            <div class="parallax-bg" style="
            background-image: url(https://swiperjs.com/demos/images/nature-1.jpg);
            " data-swiper-parallax="-23%">
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Slide 1</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="text" data-swiper-parallax="-100">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                        laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                        Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                        Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                        ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                        tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Slide 1</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="text" data-swiper-parallax="-100">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                        laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                        Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                        Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                        ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                        tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>  

</x-layout>