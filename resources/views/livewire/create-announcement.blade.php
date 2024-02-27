<div>
    <form wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
          <label class="form-label">{{__('ui.title')}}</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Inserisci il tuo titolo" wire:model.live="title">
            @error('title')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form">
            <label for="floatingTextarea2">{{__('ui.description')}}</label>
            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci la descrizione" id="floatingTextarea2" style="height: 100px" wire:model.live="description"></textarea>
            @error('description')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">{{__('ui.price')}}</label>
            <input type="numeric" class="form-control @error('price') is-invalid @enderror" id="numeric" placeholder="Inserisci il prezzo" wire:model.live="price">
            @error('price')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="form mb-3">
            <label for="floatingSelect">{{__('ui.choose_category')}}</label>
            <select wire:model.defer.live="category" class="form-select @error('category') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                <option selected>{{__('ui.categories')}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{__("ui.$category->name")}}</option>
                @endforeach
            </select>
            @error('category')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Inserisci un immagine</label>
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror"  placeholder="Carica l'immagine" >
            @error('temporary_images.*')
                <p class="alert alert-danger mt-2">{{$message }}</p>
            @enderror
          </div>
          @if (!empty($images))
              <div class="row">
                <div class="col-12">
                    <p>Anteprima foto</p>
                    <div class="row border border-4 rounded py-4">
                        @foreach ($images as $key => $image)
                            <div class="col my-3">
                                <div class="mx-auto shadow rounded d-flex justify-content-center">
                                    <img src="{{$image->temporaryUrl()}}" class="img-preview" alt="">
                                </div>
                                    <div class="button btn btn-danger shadow d-block text-center my-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</div>
                               
                            </div>
                        @endforeach
                    </div>
                </div>
              </div>
          @endif
        <button type="submit" class="btn btn-primary">Crea Annuncio</button>
      </form>
</div>
