<x-layout>
    <div class="container-fluid categori">
        <div class="row justify-content-center">
            <div class="col-12 margin-header my-5 border">
                <h1 class="display-1 text-center">Categoria: {{$category->name}}</h1>
            </div>
                
            @forelse ($category->announcements as $announcement)
                @if ($announcement->is_accepted)
                <div class="col-12 col-md-6 col-lg-4 my-1 d-flex justify-content-center">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="https://picsum.photos/200/25{{random_int('0', '9')}}" class="card-img-top imgcard" alt="immagine">
                        <div class="card-body p-0 mt-3">
                            <h5 class="card-title fw-bold text-center">{{$announcement->title}}</h5>
                            <h5 class="card-title text-center">{{$announcement->price}} €</h5>
                            <div class="text-center">
    
                                <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1 mx-auto p-3">Vai al dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>   
                @endif
            @empty
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                <h4 class="text-center">Non sono presenti annunci relativi alla categoria {{$category->name}}</h4>
                <a href="{{route('create_announcement')}}" class="btn btn-primary my-1">Inserisci un nuovo annuncio</a>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>