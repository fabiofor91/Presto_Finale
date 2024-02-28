<x-layout>
    <div class="container-fluid categori">
        <div class="row justify-content-center">
            <div class="col-12 margin-header my-5 ">
                <h1 class=" text-center"><span class="titleCreate">{{__('ui.category')}}: {{__("ui.$category->name")}}</span> </h1>
            </div>
                
            {{-- @forelse ($category->announcements as $announcement) 
                @if ($announcement->is_accepted)
                <div class="col-12 col-md-6 col-lg-4 my-1 d-flex justify-content-center card-custom">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(250, 200) : '/media/img/default.png'}}" class="card-img-top imgcard" alt="immagine">
                        <div class="card-body p-0 mt-3">
                            <h5 class="card-title fw-bold text-center">{{$announcement->title}}</h5>
                            <h5 class="card-title text-center">{{$announcement->price}} €</h5>
                            <div class="text-center">
    
                                <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1 mx-auto p-3">{{__('ui.detail')}}</a>
                            </div>
                        </div>
                    </div>
                </div>  
                @endif

            @empty
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                <h4 class="text-center">{{__('ui.no_ann_category')}} {{__("ui.$category->name")}}</h4>
                <a href="{{route('create_announcement')}}" class="btn btn-primary my-1">{{__('ui.create_announcement')}}</a>
            </div>
            @endforelse
            @if ($category->announcements->count('is_accepted') == 0 )
            @dd($category->announcements->count('is_accepted'))
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                <h4 class="text-center">{{__('ui.no_ann_category')}} {{__("ui.$category->name")}}</h4>
                <a href="{{route('create_announcement')}}" class="btn btn-primary my-1">{{__('ui.create_announcement')}}</a>
            </div>
            @endif --}}

            @if ($category->announcements && $category->announcements->where('is_accepted', true)->count() )
                @foreach ($category->announcements as $announcement)
                @if ($announcement->is_accepted)
                <div class="col-12 col-md-6 col-lg-4 my-1 d-flex justify-content-center card-custom">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(250, 200) : '/media/img/default.png'}}" class="card-img-top imgcard" alt="immagine">
                        <div class="card-body p-0 mt-3">
                            <h5 class="card-title fw-bold text-center">{{$announcement->title}}</h5>
                            <h5 class="card-title text-center">{{$announcement->price}} €</h5>
                            <div class="text-center">
    
                                <a href="{{route('announcement_detail', $announcement)}}" class="btn btn-primary my-1 mx-auto p-3">{{__('ui.detail')}}</a>
                            </div>
                        </div>
                    </div>
                </div>  
                @endif
                @endforeach
            @else
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                <h4 class="text-center">{{__('ui.no_ann_category')}} {{__("ui.$category->name")}}</h4>
                <a href="{{route('create_announcement')}}" class="btn btn-primary my-1">{{__('ui.create_announcement')}}</a>
            </div> 
            @endif
        
        </div>
    </div>
</x-layout>