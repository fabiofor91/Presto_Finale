<x-layout>
    <div class="container-fluid 
     card-custom mb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1"><span class="titleCreate">{{__('ui.register')}}</span></h1>
            </div>
            <div class="col-12 col-md-6 registlogin2">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">{{__('ui.name')}}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Mario Rossi" name="name">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label ">{{__('ui.mail_address')}}</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="mario@rossi.it" name="email">
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                      @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirmation" class="form-label">{{__('ui.confirmation')}}</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPasswordConfirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">{{__('ui.register')}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>