<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richiesta Revisore</title>
</head>
<body>
  <h1>Candidatura per posizione di revisore</h1>
  <ul>
    <li>nome: {{$richiesta['name']}}</li>
    <li>mail: {{$richiesta['email']}}</li>
    <li>descrizione: {{$richiesta['description']}}</li>
  </ul>

  <a href="{{route('make.revisor', ['email'=>$richiesta['email']])}}">
    <button type="submit" class="btn btn-outline-warning">Accetta la candidatura</button>
  </a>
  {{-- <form action="{{route('make.revisor', ['richiesta'=>$richiesta['description']])}}" method="POST" >
    @csrf
    <button type="submit" class="btn btn-outline-warning">Accetta la candidatura</button>
  </form> --}}
</body>
</html>