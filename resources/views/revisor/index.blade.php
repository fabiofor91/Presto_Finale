<x-layout>
  <div class="container nav-top">
      
      <div class="row">
          <div class="col-12 my-4">
              <h1 class="text-center">{{__('ui.announcement_detail')}}</h1>
          </div>
          <div class="col-12 col-md-6 my-3">
              <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                  <div class="parallax-bg" data-swiper-parallax="-23%"></div>
                  <div class="swiper-wrapper">
                  @if (count($announcement_to_check->images))
                      @foreach ($announcement_to_check->images as $image)
                          <div class="swiper-slide">
                              <img class="w-100" src="{{$image->getUrl(400, 300)}}" alt="">
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
           <div class="col-12 col-md-6 my-3 border d-flex justify-content-evenly">
          <div class="col-12 col-md-4 border border-dark">
            <p>{{__('ui.created_by')}}: {{$announcement_to_check->user->name}}</p>  
             
              <p class="fw-bold">{{$announcement_to_check->title}}</p>
              <h5>{{__('ui.price')}}: {{$announcement_to_check->price}} €</h4>
                  <p>{{$announcement_to_check->description}}</p>
                  <p>{{__('ui.created_at')}} {{$announcement_to_check->created_at->format('d/m/y')}}</p>
                  <div class="container">
                    <div class="row justify-content-start">
                      <div class="col-12 col-md-6 d-flex justify-content-start">
                        <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                          @csrf
                          @method('PATCH')
                          <button class="btn bottone mx-1" type="submit">{{__('ui.accept')}}</button>
                        </form>
                      {{-- </div>
                      <div class="col-12 col-md-6"> --}}
                        <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                          @csrf
                          @method('PATCH')
                          <button class="btn bottone" type="submit">{{__('ui.refuse')}}</button>
                        </form>
                      </div>
                      
                    </div>
                  </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="border "></div>
          </div>
              
                  
              </div>
          </div>


      </div>
  </div>  
</div>  
</x-layout>

