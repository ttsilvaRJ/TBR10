<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Bruxo</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href={{asset('css/index.css') }}>
</head>
<body>
    <header>
        <a href="#" class="logo">R10</a>
        <ul class="nav">
            <li>
                <a href="{{route('historia')}}">Historia</a>
            </li>
            <li>
                <a href="{{route('club')}}">Clubes</a>
            </li>
            <li>
                <a href="{{route('user.index')}}"><img src="{{ asset('image/logor10.png') }}" alt="Logo R10"></a>
            </li>
            <li>
                <a href="{{route('titulos')}}">Titulos</a>
            </li>
            <li>
                <a href="{{route('acess')}}">Acessorios</a>
            </li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Pesquisar">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
    </header>
    <div class="container">
        <form action="{{ route('user.store') }}" method="POST">
          @csrf
          <h1>Cadastre-se</h1>

          <div class="input-box">
            <input type="text" name="username" placeholder="Digite seu nome" required />
          </div>
  
          <div class="input-box">
            <input type="text" name="email" placeholder="Digite seu email" required />
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password" required />
          </div>
  
          <button type="submit" class="btn">Register</button>
  
          <div class="register-link">
            <p>Do you want to log in?<a href="{{ route('user.login') }}"> Log in now!</a></p>
          </div>
        </form>
    </div>
</body>
</html>
