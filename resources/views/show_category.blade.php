<x-layout>
    <div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-12 margin-header my-5">
                <h1 class="display-1 text-center">Categoria: {{$category->name}}</h1>
            </div>
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-1 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/25{{$announcement->id}}" class="card-img-top" alt="immagine">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                        <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                        <p class="card-text">{{$announcement->description}}</p>
                        <a href="#" class="btn btn-primary my-1">Vai al dettaglio</a>
                        <p class="card-footer">Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                <h4 class="text-center">Non sono presenti annunci relativi alla categoria {{$category->name}}</h4>
                <a href="{{route('create_announcement')}}" class="btn btn-primary my-1">Inserisci un nuovo annuncio</a>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>