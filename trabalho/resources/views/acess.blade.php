<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="{{asset('css/acess.css')}}">

      <title>O Bruxo</title>
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
                <a href="{{route('user.index')}}"><img src="{{asset('image/logor10.png')}}" alt=""></a>
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
         <div class="card_container">

            <article class="card_article">
            <img src="{{asset('image/camisaR10autografo.jpg')}}" alt="image" class="card_img">
            
            <div class="card_data">
               <span class="card_description">autografada por Ronaldinho e elenco</span>
               <h2 class="card_title">Camisa Do Gremio</h2>
               <a href="#" class="card_button">Read More</a>
            </article>

            <article class="card_article">
               <img src="{{asset('image/Chut.png')}}" alt="image" class="card_img">
               
               <div class="card_data">
                  <span class="card_description">Chuteira em homenagem ao craque</span>
                  <h2 class="card_title">Nike Tiempo R10</h2>
                  <a href="#" class="card_button">Read More</a>
               </article>

               <article class="card_article">
                  <img src="{{asset('image/autograforMessiR10.jpg')}}" alt="image" class="card_img">
                  
                  <div class="card_data">
                     <span class="card_description">autografada por Ronaldinho, Messi e elenco</span>
                     <h2 class="card_title">Camisa do Barcelona</h2>
                     <a href="#" class="card_button">Read More</a>
                  </article>

            </div>
         </div>
      </div>
   </body>
</html>