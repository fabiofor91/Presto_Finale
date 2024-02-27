<x-layout>
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <h1 class="display-3 text-center registlogin">
            {{-- messaggio con struttura di controllo --}}
            {{-- {{$announcement_to_check ? "{{__('ui.announcement_to_revise')}}" : "{{__('ui.no_announcements_to_revise')}}"}} --}}
            @if ($announcement_to_check)
                {{__('ui.announcement_to_revise')}}
            @else
              {{__('ui.no_announcements_to_revise')}}
            @endif      
          </h1>
        </div>
      </div>
    </div>
      
      @if ($announcement_to_check)
      <div class="container my-4">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide">
              @if (count($announcement_to_check->images))
                @foreach ($announcement_to_check->images as $image)
                {{-- <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="next" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div> --}}
                  <div class="carousel-inner">
                    <div class="carousel-item @if($loop->first)active @endif">
                      <img src="{{$image->getUrl(400, 300)}}" {{--classe da implementare--}} class="d-block w-100" alt="...">  
                    </div>
                  </div>
                @endforeach
                @if (count($announcement_to_check->images) > 2)
                {{-- <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="next" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>     --}}
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                @endif
              @else
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
              </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/img/default.png" class="d-block w-100" alt="...">
                  </div>
              @endif
                
              </div>
              <div class="my-3">
                <h5 class="card_title text-center">{{__('ui.announcement')}}: {{$announcement_to_check->title}}</h5>
                <p class="card_text text-center">{{__('ui.description')}}: {{$announcement_to_check->description}}</p>
                <p class="card_text text-center">{{__('ui.price')}}: {{$announcement_to_check->price}} €</p>
                <p class="card_footer text-center">{{__('ui.created_at')}} {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-end">
              <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn bottone" type="submit">{{__('ui.accept')}}</button>
              </form>
            </div>
            <div class="col-12 col-md-6">
              <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                @csrf
                @method('PATCH')
                <button class="btn bottone" type="submit">{{__('ui.refuse')}}</button>
              </form>
            </div>
          </div>
        </div>
        @endif
      </x-layout>