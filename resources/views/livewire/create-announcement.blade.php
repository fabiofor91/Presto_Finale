<div>
    <form wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Inserisci il tuo titolo" wire:model="title">
        </div>
        <div class="form">
            <label for="floatingTextarea2">Descrizione</label>
            <textarea class="form-control" placeholder="Inserisci la descrizione" id="floatingTextarea2" style="height: 100px" wire:model="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="numeric" class="form-control" id="exampleInputEmail1" placeholder="Inserisci il prezzo" wire:model="price">
          </div>
          {{-- <div class="form">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div> --}}
        <button type="submit" class="btn btn-primary">Crea Annuncio</button>
      </form>
</div>
