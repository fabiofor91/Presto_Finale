<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richiesta Revisore</title>
</head>
<body>
  <h1>richiesta inviata</h1>
  <ul>
    <li>nome: {{Auth::user()->name}}</li>
    <li>mail: {{Auth::user()->email}}</li>
    <li>descrizione: {{$richiesta['description']}}</li>
  </ul>

  <a href="{{route('make.revisor', ['user'=>Auth::user()])}}">
    <button type="submit" class="btn btn-outline-warning">Accetta la candidatura</button>
  </a>
  {{-- <form action="{{route('make.revisor', ['richiesta'=>$richiesta['description']])}}" method="POST" >
    @csrf
    <button type="submit" class="btn btn-outline-warning">Accetta la candidatura</button>
  </form> --}}
</body>
</html>