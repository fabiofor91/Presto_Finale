<x-layout>
    <div class="container-fluid registlogin3">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Inserisci il tuo annuncio</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-6">
                <livewire:create-announcement/>
            </div>
        </div>
    </div>
</x-layout>