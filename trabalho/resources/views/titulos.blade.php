<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Bruxo</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/titulos.css')}}">
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
    <div class="slider">


        <div class="list">

            <div class="item">
                <img src="{{asset('image/balon.webp')}}" alt="" >

                <div class="content">
                    <div class="title">BALON D'OR</div>
                    <div class="type">MELHOR DO MUNDO</div>
                    <div class="description">
                        A entrega do Ballon d'Or para Ronaldinho Gaúcho em 2005 foi um momento memorável e marcante na carreira do jogador.<br> Ronaldinho foi premiado como o melhor jogador do mundo após um ano excepcional jogando pelo Barcelona, onde demonstrou habilidades técnicas impressionantes, criatividade e carisma em campo.
                    </div>
                    <div class="button">
                        <button>Saiba Mais</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{asset('image/cl.jpg')}}" alt="">

                <div class="content">
                    <div class="title">LIGA DOS</div>
                    <div class="type">CAMPEÕES</div>
                    <div class="description">
                        O brasileiro recebeu o prêmio durante a cerimônia de sorteio dos grupos da edição 2006/2007 da competição de clubes mais importante do futebol do Velho Continente. Após o anúncio, o astro do Barça foi aplaudido por todos no Fórum Grimaldi, em Mônaco, palco do evento.
                    </div>
                    <div class="button">
                        <button>Saiba Mais</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{('image/loginr10.jpg')}}" alt="">

                <div class="content">
                    <div class="title">CAMPEÃO</div>
                    <div class="type">COPA DO MUNDO</div>
                    <div class="description">
                        Ronaldinho Gaúcho foi um dos principais jogadores da Seleção Brasileira na Copa do Mundo de 2002, realizada na Coreia do Sul e no Japão. Ele desempenhou um papel crucial na conquista do título, contribuindo com sua habilidade técnica, visão de jogo e criatividade.<br>A performance de Ronaldinho na Copa do Mundo de 2002 consolidou sua reputação como um dos melhores jogadores do mundo. Ele mostrou que podia brilhar no maior palco do futebol mundial.
                    </div>
                    <div class="button">
                        <button>Saiba Mais</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{asset('image/atlebg.jpg')}}" alt="">

                <div class="content">
                    <div class="title">CAMPEÃO DA</div>
                    <div class="type">COPA LIBERTADORES</div>
                    <div class="description">
                        Ronaldinho Gaúcho teve uma passagem memorável pelo Atlético Mineiro, onde conquistou a Copa Libertadores em 2013, o maior título de clubes das Américas. Sua liderança e habilidade foram cruciais para o sucesso do time na competição.
                    </div>
                    <div class="button">
                        <button>Saiba Mais</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="thumbnail">

            <div class="item">
                <img src="{{asset('image/balon.webp')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('image/cl.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('image/loginr10.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('image//atlebg.jpg')}}" alt="">
            </div>

        </div>

        <div class="nextPrevArrows">
            <button class="prev"> < </button>
            <button class="next"> > </button>
        </div>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>