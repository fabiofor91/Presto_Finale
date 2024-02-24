<x-layout>
    <div class="container nav-top">
        
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="text-center">{{__('ui.announcement_detail')}}</h1>
            </div>
            <div class="col-12 col-md-6 my-3">
                {{-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                    <div class="parallax-bg" data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                    @if ($announcement->images)
                        @foreach ($announcement->images as $image)
                            <div class="swiper-slide">
                                <img class="w-100" src="{{Storage::url($image->path)}}" alt="">
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <img class="w-100" src="https://picsum.photos/500/25{{random_int('0', '9')}}" alt="immagine">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-100" src="https://picsum.photos/500/25{{random_int('0', '9')}}" alt="immagine2">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-100" src="https://picsum.photos/500/25{{random_int('0', '9')}}" alt="immagine3">
                        </div>
                    @endif
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div> --}}
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    @if ($announcement->images)
                      @foreach ($announcement->images as $image)
                        <div class="carousel-inner">
                          <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" {{--classe da implementare--}} class="d-block w-100" alt="...">  
                          </div>
                        </div>
                      @endforeach
                    @else
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="https://picsum.photos/250/20{{random_int('0', '9')}}" class="d-block w-100" alt="immagine">
                          
                        </div>
                        <div class="carousel-item">
                          <img src="https://picsum.photos/250/20{{random_int('0', '9')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://picsum.photos/250/20{{random_int('0', '9')}}" class="d-block w-100" alt="...">
                        </div>
                      </div>
                    @endif
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
            </div>
            <div class="col-12 col-md-6 my-3 border d-flex flex-column justify-content-center">
                @if ($announcement->user)
                <p>{{__('ui.created_by')}}: {{$announcement->user->name}}</p>  
                @else
                <p>{{__('ui.anonymus_creator')}}</p>
                @endif
                <h4 class="fw-bold">{{$announcement->title}}</h4>
                <h5>{{__('ui.price')}}: {{$announcement->price}} €</h4>
                    <p>{{$announcement->description}}</p>
                    <p>{{__('ui.created_at')}} {{$announcement->created_at->format('d/m/y')}}</p>
                    <div>
                        <a class="btn bottone my-1" href="{{route('indexAnnouncements')}}">{{__('ui.all_announcements')}}</a>
                        <a class="btn bottone" href="{{route('showCategory', $announcement->category)}}">{{__('ui.category')}} {{$announcement->category->name}}</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>  
</div>  
</x-layout>

{{-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
    <div class="parallax-bg" data-swiper-parallax="-23%"></div>
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
        <div class="title" data-swiper-parallax="-300">Slide 2</div>
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
        <div class="title" data-swiper-parallax="-300">Slide 3</div>
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
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div> --}}