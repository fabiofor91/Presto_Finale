<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Richiesta Revisore</title>
</head>
<body>
  <div class="container my-3">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="display-2 fw-bold text-center">Candidatura per posizione di revisore</h1>
      </div>
      <div class="col-12 col-md-8 col-lg-6 my-5">
        <h3>Ecco i dati del candidato:</h3>
        <ul class="list-group my-3">
          <li class="list-group-item">Nome: {{$richiesta['name']}}</li>
          <li class="list-group-item">Mail: {{$richiesta['email']}}</li>
        </ul>
        <p>Descrizione: {{$richiesta['description']}}</p>
        <a class="btn bottone my-3" href="{{route('make.revisor', ['email'=>$richiesta['email']])}}">
          <button type="submit" class="btn btn-outline-warning">Accetta la candidatura</button>
        </a>
      </div>
    </div>
  </div>
  

  
 
  
  {{-- <form action="{{route('make.revisor', ['richiesta'=>$richiesta['description']])}}" method="POST" >
    @csrf
    <button type="submit" class="btn btn-outline-warning">Accetta la candidatura</button>
  </form> --}}
</body>
</html>