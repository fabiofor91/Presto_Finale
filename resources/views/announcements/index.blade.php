<x-layout>
    <div class="container nav-top">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1">Tutti gli annunci</h1>
            </div>
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-2 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/25{{random_int('0', '9')}}" class="card-img-top" alt="immagine">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                        <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                        <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1"> Vai al dettaglio</a>
                        <a href="{{route('showCategory', $announcement->category)}}" class="btn btn-primary my-1">Vai alla categoria {{$announcement->category->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 d-flex justify-content-center my-3">
                {{$announcements->links()}}
            </div>
        </div>
    </div>

   
</x-layout>