<x-layout>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-12 nav-top">
              @if (session('message'))
              <div class="alert alert-success">
              {{ session('message') }}
              </div>
              @endif
              <h1 class="text-center display-2">Lavora con Noi!</h1>
              <h2 class="text-center display-5">Diventa Revisore degli annunci</h2>
          </div>
          <div class="col-12 col-md-6 d-flex flex-column align-items-center">
              <h4 class="text-center">Ciao {{Auth::user()->name}}, grazie per il tuo interessamento!</h4>
              <h5>Parlaci di te, ti daremo presto una risposta!</h5>
          </div>
          <form action="{{route('become.revisor')}}" method="post">
              <div class="form-floating m-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
                  <div class="my-2 d-flex justify-content-end">
                      
                      @csrf
                      <button type="submit" class="btn btn-primary" >Invia Richiesta</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</x-layout>