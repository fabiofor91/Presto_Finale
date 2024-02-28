<x-layout>
  <div class="container ">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <h1 class="display-3 text-center ">
          {{-- messaggio con struttura di controllo --}}
          {{-- {{$announcement_to_check ? "{{__('ui.announcement_to_revise')}}" : "{{__('ui.no_announcements_to_revise')}}"}} --}}
          @if ($announcement_to_check)
          <span class="titleCreate">{{__('ui.announcement_to_revise')}}</span>
          @else
          <span class="titleCreate">{{__('ui.no_announcements_to_revise')}}</span>
          @endif      
        </h1>
      </div>
    </div>
  </div>

  @if ($announcement_to_check)
  <div class="container my-4">
    
    <div class="row">
      <div class="col-12 my-4">
        <h1 class="text-center"><span class="titleCreate">{{__('ui.announcement_detail')}}</span></h1>
      </div>
      <div class="col-12 col-md-9 my-3">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
          <div class="parallax-bg" data-swiper-parallax="-23%"></div>
          <div class="swiper-wrapper">
            @if (count($announcement_to_check->images))
            @foreach ($announcement_to_check->images as $image)
            <div  class="swiper-slide d-flex border">
              <div class="col-8">
                <img class="w-100" src="{{$image->getUrl(250, 200)}}" alt="">
              </div>
              <div class="col-3 text-black ms-4">
                <h4>{{__('ui.image_revise')}}</h4>
                  <ul class="d-flex flex-column p-0">
                    <li class="d-flex">{{__('ui.adult')}}: <div class="{{$image->adult}} ms-auto my-auto"></div></li>
                    <li class="d-flex">{{__('ui.medical')}}: <div class="{{$image->medical}} ms-auto my-auto"></div></li>
                    <li class="d-flex">{{__('ui.spoof')}}: <div class="{{$image->spoof}} ms-auto my-auto"></div></li>
                    <li class="d-flex">{{__('ui.violence')}}: <div class="{{$image->violence}} ms-auto my-auto"></div></li>
                    <li class="d-flex">{{__('ui.racy')}}: <div class="{{$image->racy}} ms-auto my-auto"></div></li>
                  </ul>
                <h4 class="my-2">Tags</h4>
                @if ($image->labels)
                    
                @foreach ($image->labels as $label)
                    <span class="my-2">{{$label}},</span>
                @endforeach
                @endif
              </div>
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
      
      {{-- c --}}
      <div class="col-12 col-md-3 my-3 d-flex border">
        <div class="container-fluid d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-12">
              <p>{{__('ui.created_by')}}: {{$announcement_to_check->user->name}}</p>  
              <h5 class="fw-bold">{{$announcement_to_check->title}}</h5>
              <h4>{{__('ui.price')}}: {{$announcement_to_check->price}} €</h4>
              <p>{{$announcement_to_check->description}}</p>
              <p>{{__('ui.created_at')}} {{$announcement_to_check->created_at->format('d/m/y')}}</p>
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-12 d-flex justify-content-between">
                    <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                      @csrf
                      @method('PATCH')
                      <button class="btn bottone " type="submit">{{__('ui.accept')}}</button>
                    </form>
                    <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                      <button class="btn bottone" type="submit">{{__('ui.refuse')}}</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @if (count($announcement_to_check->images))
                @foreach ($announcement_to_check->images as $image)
{{--                     
                <div class="col-6 border-left bg-white"  data-bs-theme="dark">
                  <h4 >{{__('ui.image_revise')}}</h4>
                    <ul class="d-flex flex-column p-0">
                      <li class="d-flex">{{__('ui.adult')}}: <div class="{{$image->adult}} ms-auto my-auto"></div></li>
                      <li class="d-flex">{{__('ui.medical')}}: <div class="{{$image->medical}} ms-auto my-auto"></div></li>
                      <li class="d-flex">{{__('ui.spoof')}}: <div class="{{$image->spoof}} ms-auto my-auto"></div></li>
                      <li class="d-flex">{{__('ui.violence')}}: <div class="{{$image->violence}} ms-auto my-auto"></div></li>
                      <li class="d-flex">{{__('ui.racy')}}: <div class="{{$image->racy}} ms-auto my-auto"></div></li>
                    </ul>
                  <h4 class="my-2">Tags</h4>
                  @if ($image->labels)
                      
                  @foreach ($image->labels as $label)
                      <span class="my-2">{{$label}},</span>
                  @endforeach
                  @endif
                </div> --}}
                @endforeach
            @endif
          </div>
              
        </div>
            
      </div>  
    </div>
  </div>
  @endif 
</x-layout>
      
      