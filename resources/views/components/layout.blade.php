<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Presto.it ItaliaUnita</title>
    <link rel="icon" type="image/png" href="/media/img/favicon_Presto.png">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Habibi&display=swap" rel="stylesheet">
    {{-- link bootstrap italia  --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.8.2/dist/css/bootstrap-italia.min.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- link swiper  --}}
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>   
</head>
<body>
    <x-nav/>
    <div class=" color">

        {{$slot}}
    </div>
    <x-footer/>
    {{-- script bootstrap italia  --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-italia@2.8.2/dist/js/bootstrap-italia.bundle.min.js"></script> --}}
    {{-- link swiper  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          speed: 600,
          parallax: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
</body>
</html>