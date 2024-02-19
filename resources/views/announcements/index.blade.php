<x-layout>
    <div class="container nav-top">
        <div class="row justify-content-center">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/250" class="card-img-top" alt="immagine">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$announcement->title}}</h5>
                        <h5 class="card-title">Prezzo: {{$announcement->price}} €</h5>
                        <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary"> Vai al dettaglio</a>
                        <a href="{{route('showCategory', $announcement->category)}}" class="btn btn-primary">Vai alla categoria {{$announcement->category->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{$announcements->links()}}
        </div>
    </div>

   
</x-layout>