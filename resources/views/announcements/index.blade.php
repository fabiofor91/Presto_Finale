<x-layout>
    <div class="container nav-top">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1">Tutti gli annunci</h1>
            </div>
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center ">
                <div class="card border img" style="width: 18rem;">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200/200'}}" class="card-img-top imgcard" alt="immagine">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center">{{$announcement->title}}</h5>
                        <h5 class="card-title text-center">{{$announcement->price}} €</h5>
                        <div class="d-flex flex-column align-items-center">
                            <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1"> Vai al dettaglio</a>
                            <a href="{{route('showCategory', $announcement->category)}}" class="btn btn-primary my-1 btn-dimension">Vai alla categoria {{$announcement->category->name}}</a>
                        </div>
                    </div>
                </div>
            </div>    
            @empty
            <div class="col-12 col-md-8">
                <div class="alert alert-danger">
                    <p class="text-center">Non ci sono annunci relativi a questa ricerca. Effettua una nuova ricerca</p>
                    <a href="{{route('indexAnnouncements')}}" class="btn">Torna all'indice degli annunci</a>
                </div>
            </div>
                
            @endforelse
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 d-flex justify-content-center my-3">
                {{$announcements->links()}}
            </div>
        </div>
    </div>

   
</x-layout>