<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2">
                   {{-- messaggio con struttura di controllo --}}
                    {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : "Non sono presenti articoli da revisionare"}}
                    {{-- <br>
                    <h2>sono presenti {{Annoi}}</h2> --}}

                </h1>
            </div>
        </div>
    </div>

    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/200/20{{random_int('0', '9')}}" class="d-block w-50" alt="...">
                            
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/200/20{{random_int('0', '9')}}" class="d-block w-50" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/200/20{{random_int('0', '9')}}" class="d-block w-50" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <h5 class="card_title">Annuncio: {{$announcement_to_check->title}}</h5>
                      <p class="card_text">Descrizione: {{$announcement_to_check->description}}</p>
                      <p class="card_footer">Pubblicato il {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                @csrf
                @method('PATCH')
                <button type="submit">Rifiuta</button>
                </form>
            </div>
        </div>
    @endif
</x-layout>