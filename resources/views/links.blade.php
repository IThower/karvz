<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Karvz - Agência Digital & Desenvolvimento Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/links.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 d-flex flex-column align-items-center">
        <img class="mt-5" src= {{ asset('images/logo-rosa.png') }} width="250">
        <ul class="list-unstyled list-inline my-4">
          <li class="list-inline-item mx-2">
            <a class="text-white" href="exis" target="_blank">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a class="text-white" href="instrakram" target="_blank">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a class="text-white" href="facebruki" target="_blank">
              <i class="fa-brands fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a class="text-white" href="zipzop" target="_blank">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </li>
        </ul>
        <div class="card w-100">
          <img src={{ asset('images/who-are.png') }} class="card-img-top" alt="...">
          <ul class="list-group list-group-flush border-0">
            <li class="list-group-item border-0 text-center p-4">
              <p class="text-white">Somos a Agência <b>Karvz</b> 🫡🥇</p>
              <p class="mb-0 text-white">Nosso time é especializado em prover soluções estratégicas e criativas para melhorar o desempenho on-line de empresas no mundo todo. 🚀💪</p>
            </li>
          </ul>
        </div>

        <a href="#" class="btn btn-primary btn-lg w-100 mt-3">Quero fazer um orçamento pelo Whatsapp</a>
        <a href="#" class="btn btn-primary btn-lg w-100 m-1">Quero visitar o site da Karvz</a>
        <a href="#" class="btn btn-primary btn-lg w-100">Quero visitar o blog da Karvz</a>
        <a href="#" class="btn btn-primary btn-lg w-100 mt-1 mb-3">Quero visitar o portfolio da Karvz</a>

        <div class="card w-100">
          <img src={{ asset('images/attention.png') }} class="card-img-top" alt="...">
          <ul class="list-group list-group-flush border-0">
            <li class="list-group-item border-0 text-center p-4">
              <p class="text-white">Calma aí, temos uma novidade para você 📢❗🚨</p>
              <p class="mb-0 text-white">Estamos oficialmente inaugurando a nossa agência, e por isso, <b>estamos realizando ofertas únicas e exclusivas</b>. Entre em contato conosco e encontre os melhores preços do mercado!</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</body>

