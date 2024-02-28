<x-layout>
  <div class="container-fluid card-custom mb-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center display-1"><span class="titleCreate">{{__('ui.login')}}</span></h1>
        </div>
        <div class="col-12 col-md-6 registlogin">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('ui.mail_address')}}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="mario@rossi.it" name="email">
                    @error('email')
                        <div class="alert alert-danger mt-2">mail o password non valida</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label @error('password') is-invalid @enderror">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    @error('password')
                        <div class="alert alert-danger mt-2">password errata</div>  
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{__('ui.login')}}</button>
            </form>
        </div>
    </div>
  </div>
</x-layout>