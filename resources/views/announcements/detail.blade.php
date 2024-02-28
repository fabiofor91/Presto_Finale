<x-layout>
    <div class="container nav-top">
        
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="text-center"><span class="titleCreate">{{__('ui.announcement_detail')}}</span></h1>
            </div>
            <div class="col-12 col-md-7 my-3 border bg-custom">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                    <div class="parallax-bg" data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                    @if (count($announcement->images))
                        @foreach ($announcement->images as $image)
                            <div class="swiper-slide">
                                <img class="w-100" src="{{$image->getUrl(250, 200)}}" alt="">
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <img class="w-100" src="/media/img/default.png" alt="immagine">
                        </div>
                    @endif
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
             </div>   
            <div class="col-12 col-md-4 mx-auto my-3 border d-flex flex-column  bg-custom">
              <div class="ms-3 mt-5">
                
                  
                
                <h4 class="fw-bold">{{$announcement->title}}</h4>
                <h5>{{__('ui.price')}}: {{$announcement->price}} €</h4>
                    <p>{{__('ui.description')}}: {{$announcement->description}}</p>
                    <p>{{__('ui.created_by')}}: {{$announcement->user->name}}</p>
                    <p>{{__('ui.created_at')}} {{$announcement->created_at->format('d/m/y')}}</p>
                    <div>
                        <a class="btn bottone my-1" href="{{route('indexAnnouncements')}}">{{__('ui.all_announcements')}}</a>
                        <a class="btn bottone" href="{{route('showCategory', $announcement->category)}}">{{__('ui.' . $announcement->category->name)}}</a>
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