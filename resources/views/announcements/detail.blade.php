<x-layout>
    <div class="container nav-top">
        <div class="row justify-content-center">
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
        </div>
        <div class="row justify-content-center my-4 bg-success-subtle rounded-5">
            <h3 class="text-center my-2 text-info">immagini del prodotto</h3>
            <div class="col-12 col-md-10  min-wv-100">
                <x-carosello/>
            </div>
        </div>
    </div>
    
   
</x-layout>