
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Bruxo</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header>
        <a href="#" class="logo">R10</a>
        <ul class="nav">
            <li>
                <a href="historia.html">Historia</a>
            </li>
            <li>
                <a href="club.html">Clubes</a>
            </li>
            <li>
                <a href=""><img src="{{ asset('image/logor10.png') }}" alt="Logo R10"></a>
            </li>
            <li>
                <a href="titulos.html">Titulos</a>
            </li>
            <li>
                <a href="acess.html">Acessorios</a>
            </li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Pesquisar">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
    </header>
    <div class="container">
        <form action="{{ route('user.login.post') }}" method="POST">
            @csrf
            <h1>Faça login</h1>
          
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required />
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required />
            </div>
        
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember" /> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
        
            <button type="submit" class="btn">Login</button>
        
            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('user.index') }}">Register here!</a></p>
            </div>
        </form>
        
      </div>