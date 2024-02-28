<x-layout>
    <div class="container-fluid my-5 card-custom">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center"><span class="titleCreate">{{__('ui.insert_announcement')}}</span></h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-6 registlogin3 my-5">
                <livewire:create-announcement/>
            </div>
        </div>
    </div>
</x-layout>