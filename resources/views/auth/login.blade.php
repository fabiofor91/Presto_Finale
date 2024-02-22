<x-layout>
  <div class="container-fluid registlogin">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center display-1">Accedi</h1>
        </div>
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="mario@rossi.it" name="email">
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label @error('password') is-invalid @enderror">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    @error('password')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
        </div>
    </div>
  </div>
</x-layout>