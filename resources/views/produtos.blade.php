<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="/css/all.css" rel="stylesheet" type="text/css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/8e4ad95b91.js" crossorigin="anonymous"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg fixed-top  navbar-round  " id="navbar">
        <div class="container"><a class="navbar-brand" href="/"></a><button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation" id="navbar-toggler"><span class="menu-trigger"><i
                        class="menu-trigger-bar top "></i><i class="menu-trigger-bar middle "></i><i
                        class="menu-trigger-bar  bottom "></i></span><span class="close-trigger"><i
                        class="close-trigger-bar left "></i><i class="close-trigger-bar right "></i></span></button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link">Início</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Serviços</a>
                        <ul class="dropdown-menu service styled-menu" aria-labelledby="dropdownMenuButton">
                            <div class="container">
                                <div class="row linha-itemDrop">
                                    <div class="col-lg-4 itemDrop-body lol">
                                        <div class="title-itemDrop">
                                            <p> lol boost</p>
                                        </div>
                                        <div class="bgk-itemDrop lol"></div>
                                        <li class="item-drop "><a class="dropdown-item "
                                                href="{{ route('compra', ['leagueoflegends','eloboost']) }}"><span
                                                    class="icone-imteDrop"><i
                                                        class="fa-solid fa-circle-up"></i></span>Elo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-user-group"></i></span>Duo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-chalkboard-user"></i></span>Md10</a></li>
                                    </div>
                                    <div class="col-lg-4 itemDrop-body wd">
                                        <div class="title-itemDrop">
                                            <p>Wild Rift boost</p>
                                        </div>
                                        <div class="bgk-itemDrop wd"></div>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-circle-up"></i></span>Elo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-user-group"></i></span>Duo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-chalkboard-user"></i></span>Md10</a></li>
                                    </div>
                                    <div class="col-lg-4 itemDrop-body vava">
                                        <div class="title-itemDrop">
                                            <p>Valorant boost</p>
                                        </div>
                                        <div class="bgk-itemDrop vava"></div>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-circle-up"></i></span>Elo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-user-group"></i></span>Duo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-chalkboard-user"></i></span>Md5</a></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Coach</a>
                        <ul class="dropdown-menu styled-menu" aria-labelledby="dropdownMenuButton">
                            <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><img
                                            src="/img/background/lol.svg" alt="logo do jogo"></span>LEAGUE OF
                                    LEGENDS</a></li>
                            <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><img
                                            src="/img/background/wr.svg" alt="logo do jogo"></span>WILD RIFT</a>
                            </li>
                            <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><img
                                            src="/img/background/valorant.svg" alt="logo do jogo"></span>VALORANT</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link">Contato</a></li>
                    <li class="nav-item"><a class="nav-link">Juntar-se</a></li>
                    <div class="icone"><a href="/" class="btn">começar</a></div>
                </ul>
            </div>
        </div>
        <div class="bgknavbar"><i class="menu-bg top"></i><i class="menu-bg middle"></i><i class="menu-bg bottom"></i>
        </div>
        <aside class="menu-list">
            <div class="collapse navbar-collapse" id="menu-body">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link">Início</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Serviços</a>
                        <ul class="dropdown-menu service styled-menu" aria-labelledby="dropdownMenuButton">
                            <div class="container">
                                <div class="row linha-itemDrop">
                                    <div class="col-lg-4 itemDrop-body lol">
                                        <div class="title-itemDrop">
                                            <p> lol boost</p>
                                        </div>
                                        <div class="bgk-itemDrop lol"></div>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-circle-up"></i></span>Elo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-user-group"></i></span>Duo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-chalkboard-user"></i></span>Md10</a></li>
                                    </div>
                                    <div class="col-lg-4 itemDrop-body wd">
                                        <div class="title-itemDrop">
                                            <p>Wild Rift boost</p>
                                        </div>
                                        <div class="bgk-itemDrop wd"></div>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-circle-up"></i></span>Elo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-user-group"></i></span>Duo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-chalkboard-user"></i></span>Md10</a></li>
                                    </div>
                                    <div class="col-lg-4 itemDrop-body vava">
                                        <div class="title-itemDrop">
                                            <p>Valorant boost</p>
                                        </div>
                                        <div class="bgk-itemDrop vava"></div>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-circle-up"></i></span>Elo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-user-group"></i></span>Duo boost</a></li>
                                        <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><i
                                                        class="fa-solid fa-chalkboard-user"></i></span>Md5</a></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Coach</a>
                        <ul class="dropdown-menu styled-menu" aria-labelledby="dropdownMenuButton">
                            <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><img
                                            src="/img/background/lol.svg" alt="logo do jogo"></span>LEAGUE OF
                                    LEGENDS</a></li>
                            <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><img
                                            src="/img/background/wr.svg" alt="logo do jogo"></span>WILD RIFT</a>
                            </li>
                            <li class="item-drop "><a class="dropdown-item "><span class="icone-imteDrop"><img
                                            src="/img/background/valorant.svg" alt="logo do jogo"></span>VALORANT</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link">Contato</a></li>
                    <li class="nav-item"><a class="nav-link">Juntar-se</a></li>
                    <div class="icone"><a href="/" class="btn">começar</a></div>
                </ul>
            </div>
        </aside>
    </nav>

    <div class="calculadora">
        <div class="container calculadora-body">
            @foreach($jogo as $jogos)
            <div class="title">
                <h5 class="titulo-calculadora"> {{$jogos->nome_jogo}}</h5>
                <h6 class="titulo-calculadora">{{$jogos->tipo_jogo}}</h6>
            </div>
            <div class="paragrafo">
                <p>{{$jogos->descricao}}</p>
            </div>
            @endforeach
            <div class="row">
                <div class="col-lg-4">
                    <div class="body-jogo active lol" id="bodyLol">
                        <h5 class="subtitulo">Lol Elo boost</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="body-jogo wd" id="bodyWd">
                        <h5 class="subtitulo">Wild Rift Elo boost</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="body-jogo vava" id="bodyVava">
                        <h5 class="subtitulo">Valorant Elo boost</h5>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <di class="row body-flags">
                    <div class="col-lg-8">
                        <div class="etap">
                            <div class="icone-etap"><i class="fa-solid fa-cart-shopping"></i></div>
                            <h5>Selecione os detalhes do seu pedido</h5>
                        </div>
                        <div class="row body-flags-linha">
                            <div class="col-lg-6">
                                <div class="title-etap paragrafo">
                                    <p>Elo Atual</p>
                                </div>
                                <div class="flag"><svg _ngcontent-serverApp-c27="" viewBox="0 0 300 408"
                                        class="flag flag-silver flag-current">
                                        <defs _ngcontent-serverApp-c27="">
                                            <linearGradient _ngcontent-serverApp-c27="" x2="0" y2="1"
                                                id="current-flag-pole-gradient">
                                                <stop _ngcontent-serverApp-c27="" offset="0%" stop-color="#FFFFFF">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="33%" stop-color="#333333">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="50%" stop-color="#FFFFFF">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="73%" stop-color="#8F8F8F">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="100%" stop-color="#000000">
                                                </stop>
                                            </linearGradient>
                                            <linearGradient _ngcontent-serverApp-c27="" x2="0" y2="1"
                                                id="current-base-gradient">
                                                <stop _ngcontent-serverApp-c27="" class="flag__base-gradient-start"
                                                    offset="0%"></stop>
                                                <stop _ngcontent-serverApp-c27="" class="flag__base-gradient-stop"
                                                    offset="100%"></stop>
                                            </linearGradient>
                                            <clipPath _ngcontent-serverApp-c27="" id="current-baseShape">
                                                <path _ngcontent-serverApp-c27=""
                                                    d="M290,3c0,-0.796 -0.316,-1.559 -0.879,-2.121c-0.562,-0.563 -1.325,-0.879 -2.121,-0.879c-28.169,0 -245.831,0 -274,0c-0.796,0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,31.369 0,298.658 0,322.72c0,1.072 0.571,2.062 1.499,2.599c14.078,8.147 122.921,71.13 137.002,79.279c0.927,0.536 2.071,0.536 2.998,0c14.08,-8.148 122.914,-71.126 137,-79.278c0.929,-0.537 1.501,-1.529 1.501,-2.602c0,-24.078 0,-291.35 0,-322.718Z">
                                                </path>
                                            </clipPath>
                                        </defs>
                                        <rect _ngcontent-serverApp-c27="" class="flag__pole" height="10" rx="5"
                                            width="300" x="0" y="4"
                                            style="fill: url(&quot;#current-flag-pole-gradient&quot;);"></rect>
                                        <path _ngcontent-serverApp-c27="" class="flag__base"
                                            d="M290,3c0,-0.796 -0.316,-1.559 -0.879,-2.121c-0.562,-0.563 -1.325,-0.879 -2.121,-0.879c-28.169,0 -245.831,0 -274,0c-0.796,0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,31.369 0,298.658 0,322.72c0,1.072 0.571,2.062 1.499,2.599c14.078,8.147 122.921,71.13 137.002,79.279c0.927,0.536 2.071,0.536 2.998,0c14.08,-8.148 122.914,-71.126 137,-79.278c0.929,-0.537 1.501,-1.529 1.501,-2.602c0,-24.078 0,-291.35 0,-322.718Z"
                                            style="fill: rgb(34, 47, 56);"></path>
                                        <path _ngcontent-serverApp-c27="" class="flag__decor--outer"
                                            d="M280.472,293.517c-0.216,0.046 -0.432,0.094 -0.648,0.143c-17.081,4.032 -28.667,24.458 -21.178,41.931l-109.174,61.948l-108.621,-61.635c4.271,-9.589 3.133,-21.201 -2.755,-29.75c-4.507,-6.545 -11.586,-11.211 -19.457,-12.745l-0.167,-0.032l0,-530.838l262,0l0,530.978Zm-259,-527.978l0,525.442c17.873,4.736 29.545,25.12 23.15,43.56c0,0 104.85,59.549 104.85,59.549l105.449,-59.835c-0.068,-0.2 -0.133,-0.401 -0.197,-0.602c-5.283,-16.84 4.813,-37.203 22.665,-42.455l0.083,-0.024l0,-525.635l-256,0Z"
                                            style="fill: rgb(108, 145, 170);"></path>
                                        <path _ngcontent-serverApp-c27="" class="flag__decor--inner"
                                            d="M274.472,319.428l-125,70.611l-125,-70.611l0,-549.389l250,0l0,549.389Zm-249,-548.389l0,547.805l124,70.047l124,-70.047l0,-547.805l-248,0Z"
                                            style="fill: rgb(108, 145, 170);"></path>
                                        <g _ngcontent-serverApp-c27="" clip-path="url(#current-baseShape)">
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade-2.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade-3.png"></image>
                                        </g>
                                    </svg>
                                    <div class="body-pedido">
                                        <div class="img-elo"><img
                                                src="/Pai-Do-Elojob-2.0/static/media/prata.d608cb449c88d8057406.webp"
                                                alt="imagem do elo"></div><a data-toggle="modal" class="btn-elo"
                                            data-target="#modalEloAtual">
                                            <div class="body-title-btn-elo"><span class="titulo-btn-elo">
                                                    <h4>prata</h4>
                                                </span><span class="titulo-btn-elo">
                                                    <h5>DIVISÃO IV</h5>
                                                </span>
                                                <div class="icon-btn-elo"><i class="fa-solid fa-pen"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="title-etap paragrafo">
                                    <p>Elo Desejado</p>
                                </div>
                                <div class="flag"><svg _ngcontent-serverApp-c27="" viewBox="0 0 300 408"
                                        class="flag flag-silver flag-current">
                                        <defs _ngcontent-serverApp-c27="">
                                            <linearGradient _ngcontent-serverApp-c27="" x2="0" y2="1"
                                                id="current-flag-pole-gradient">
                                                <stop _ngcontent-serverApp-c27="" offset="0%" stop-color="#FFFFFF">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="33%" stop-color="#333333">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="50%" stop-color="#FFFFFF">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="73%" stop-color="#8F8F8F">
                                                </stop>
                                                <stop _ngcontent-serverApp-c27="" offset="100%" stop-color="#000000">
                                                </stop>
                                            </linearGradient>
                                            <linearGradient _ngcontent-serverApp-c27="" x2="0" y2="1"
                                                id="current-base-gradient">
                                                <stop _ngcontent-serverApp-c27="" class="flag__base-gradient-start"
                                                    offset="0%"></stop>
                                                <stop _ngcontent-serverApp-c27="" class="flag__base-gradient-stop"
                                                    offset="100%"></stop>
                                            </linearGradient>
                                            <clipPath _ngcontent-serverApp-c27="" id="current-baseShape">
                                                <path _ngcontent-serverApp-c27=""
                                                    d="M290,3c0,-0.796 -0.316,-1.559 -0.879,-2.121c-0.562,-0.563 -1.325,-0.879 -2.121,-0.879c-28.169,0 -245.831,0 -274,0c-0.796,0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,31.369 0,298.658 0,322.72c0,1.072 0.571,2.062 1.499,2.599c14.078,8.147 122.921,71.13 137.002,79.279c0.927,0.536 2.071,0.536 2.998,0c14.08,-8.148 122.914,-71.126 137,-79.278c0.929,-0.537 1.501,-1.529 1.501,-2.602c0,-24.078 0,-291.35 0,-322.718Z">
                                                </path>
                                            </clipPath>
                                        </defs>
                                        <rect _ngcontent-serverApp-c27="" class="flag__pole" height="10" rx="5"
                                            width="300" x="0" y="4"
                                            style="fill: url(&quot;#current-flag-pole-gradient&quot;);"></rect>
                                        <path _ngcontent-serverApp-c27="" class="flag__base"
                                            d="M290,3c0,-0.796 -0.316,-1.559 -0.879,-2.121c-0.562,-0.563 -1.325,-0.879 -2.121,-0.879c-28.169,0 -245.831,0 -274,0c-0.796,0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121c0,31.369 0,298.658 0,322.72c0,1.072 0.571,2.062 1.499,2.599c14.078,8.147 122.921,71.13 137.002,79.279c0.927,0.536 2.071,0.536 2.998,0c14.08,-8.148 122.914,-71.126 137,-79.278c0.929,-0.537 1.501,-1.529 1.501,-2.602c0,-24.078 0,-291.35 0,-322.718Z"
                                            style="fill: rgb(34, 47, 56);"></path>
                                        <path _ngcontent-serverApp-c27="" class="flag__decor--outer"
                                            d="M280.472,293.517c-0.216,0.046 -0.432,0.094 -0.648,0.143c-17.081,4.032 -28.667,24.458 -21.178,41.931l-109.174,61.948l-108.621,-61.635c4.271,-9.589 3.133,-21.201 -2.755,-29.75c-4.507,-6.545 -11.586,-11.211 -19.457,-12.745l-0.167,-0.032l0,-530.838l262,0l0,530.978Zm-259,-527.978l0,525.442c17.873,4.736 29.545,25.12 23.15,43.56c0,0 104.85,59.549 104.85,59.549l105.449,-59.835c-0.068,-0.2 -0.133,-0.401 -0.197,-0.602c-5.283,-16.84 4.813,-37.203 22.665,-42.455l0.083,-0.024l0,-525.635l-256,0Z"
                                            style="fill: rgb(108, 145, 170);"></path>
                                        <path _ngcontent-serverApp-c27="" class="flag__decor--inner"
                                            d="M274.472,319.428l-125,70.611l-125,-70.611l0,-549.389l250,0l0,549.389Zm-249,-548.389l0,547.805l124,70.047l124,-70.047l0,-547.805l-248,0Z"
                                            style="fill: rgb(108, 145, 170);"></path>
                                        <g _ngcontent-serverApp-c27="" clip-path="url(#current-baseShape)">
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade-2.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade.png"></image>
                                            <image _ngcontent-serverApp-c27="" class="flag-shadow"
                                                href="https://cdn.ggboost.com/images/flag-shade-3.png"></image>
                                        </g>
                                    </svg>
                                    <div class="body-pedido">
                                        <div class="img-elo"><img
                                                src="/Pai-Do-Elojob-2.0/static/media/prata.d608cb449c88d8057406.webp"
                                                alt="imagem do elo"></div><a data-toggle="modal" class="btn-elo"
                                            data-target="#modalEloDesejado">
                                            <div class="body-title-btn-elo"><span class="titulo-btn-elo">
                                                    <h4>prata</h4>
                                                </span><span class="titulo-btn-elo">
                                                    <h5>DIVISÃO III</h5>
                                                </span>
                                                <div class="icon-btn-elo"><i class="fa-solid fa-pen"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body-costume">
                            <div class="etap">
                                <div class="icone-etap"><i class="fa-solid fa-pen"></i></div>
                                <h5>Customize seu pedido gratuitamente</h5>
                            </div>
                            <div class="row body-customize">
                                <div class="col-lg-4">
                                    <div class="costumize">
                                        <div class="img-lane"><img
                                                src="data:image/png;base64,UklGRh4BAABXRUJQVlA4TBEBAAAvJYAJEKdAkG1Tf82h/BDTOv9E2rahw7E3sQ4NAAAheBwQI9uq2xxj+eEkTzGf23+15vHoIKL/E+CHDaA2HTLgalI/Y4BL0s8RgzokaXDCKLe+1gN/L6zrayP0s/nEtbwi9cFmaVo62KKyW6eWo2C+fOy4ghXzNfHyUfDGPMmGgqOYJ/1MRd/mSa7wbZ5T/hXuxXNKV9xIaoo7Sa54I6kqPktSmRuVpI/iTtKv4h+SbMZGyeoKTyPJFe4XOVYV/hRyrIyQEw0Zt4KzkmRUBXshyaAHbjYfKwPXclZ268Lg0rIVNh/Vl0BbOM+fTQ/CW1+78frzdMr44mB+EJekXsH8ZJmSHDA/K7ULMD87RwUwPwwA"
                                                alt="imagem da lane"></div>
                                        <div class="costumize-title paragrafo">
                                            <p>Primeira posicão</p>
                                        </div>
                                        <div class="costuime-select"><select name="lane" class="custom-select">
                                                <option value="top">TOP</option>
                                                <option value="bot">BOT</option>
                                                <option value="mid">MID</option>
                                                <option value="jungle">JUNGLE</option>
                                                <option value="suporte">SUPORTE</option>
                                                <option value="preencher">PREENCHER</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="costumize">
                                        <div class="img-lane"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAYAAACoPemuAAAEsmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzgiCiAgIHRpZmY6SW1hZ2VXaWR0aD0iMzgiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249IjcyLjAiCiAgIHRpZmY6WVJlc29sdXRpb249IjcyLjAiCiAgIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIzOCIKICAgZXhpZjpQaXhlbFlEaW1lbnNpb249IjM4IgogICBleGlmOkNvbG9yU3BhY2U9IjEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMTktMTAtMDZUMTU6MDk6MzgrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMTktMTAtMDZUMTU6MDk6MzgrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS43LjIiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMTAtMDZUMTU6MDk6MzgrMDI6MDAiLz4KICAgIDwvcmRmOlNlcT4KICAgPC94bXBNTTpIaXN0b3J5PgogIDwvcmRmOkRlc2NyaXB0aW9uPgogPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KPD94cGFja2V0IGVuZD0iciI/Pn15/coAAAGCaUNDUHNSR0IgSUVDNjE5NjYtMi4xAAAokXWRu0sDQRCHPxM1PiIKWlhYBFGrRGICQRuLiC9QiySCUZvkzEPI47hLELEVbAMKoo2vQv8CbQVrQVAUQWxsrBVtNJxzJpAgZpbZ+fa3O8PuLFhCKSWt17shnclpgUm/YyG86LC90EIjzXjxRRRdnQ1OhKhpn/fUmfHWZdaqfe5fa12J6QrUNQmPKqqWE54SnlnLqSbvCHcpyciK8JmwU5MLCt+ZerTEryYnSvxtshYKjIGlQ9iRqOJoFStJLS0sL6cvncor5fuYL7HHMvNBib3iPegEmMSPg2nGGcPHECMy+3DhYVBW1Mh3/+bPkZVcRWaVdTRWSZAkh1PUvFSPSYyLHpORYt3s/9++6nGvp1Td7oeGZ8N47wfbNhQLhvF1ZBjFY7A+wWWmkp89hOEP0QsVre8A2jfh/KqiRXfhYgu6H9WIFvmVrOKWeBzeTqEtDJ030LJU6ll5n5MHCG3IV13D3j4MyPn25R+rCmgFUgElEgAAAAlwSFlzAAALEwAACxMBAJqcGAAAAcxJREFUWIXF16FywjAcx/FvdgjcJjG9QyKRc0NO7q4v0EfoG2yPMDm3yZncIXFDIpFI7mKQlbhMNOVyHG3yD7T87jBt0nxI0jRR2tgP7pNlnqlt282HISVeOlFwH1gQBcPDolAwLCwaBTDqU+JyBH7zTO0llSQw0YO9rPJMHSQVtLFFDGwNbPJMHZNYwmhjC+A7BFvnmVr3z6nToCA8+Te9a1x8FARgQw+ff+0mb6U29gl4Ao4pE/0cdRVMGzsGnoG5QzXXAXbUb2OVgoLEBVYbOwFKYOGjvMyAUhs7DzzqIioJ5lAFMI4o/haBu5iUHnslDnUq7+agKCKY662psI1mLooi7bGZtAGXqbSCFDaRNpBaTwqTzK2rIoXtE9vpXM8uRQoTrepe9tIKIlieqR0J/56EzUDKOrYUlt9Iv5+QAHNb5FjcNs/UStoGdMNaG3eHii/a505FffiQ9u4pbbuL4InGDc+P+9xM3K8CDilDFwMTHbPc1qai3urcLOdDKUJdk9CH3YcNhnIpu242Qzl0T5XAe1e5UQrKbf4+E20vMYWU9Kna2AX1UvIorSuJdKNYAH/0jAJBj3WdaPpIFGxoFETA7oGCAOxeKIB/4iqeI74IPRoAAAAASUVORK5CYII="
                                                alt="imagem da lane"></div>
                                        <div class="costumize-title paragrafo">
                                            <p>Segunda posicão</p>
                                        </div>
                                        <div class="costuime-select"><select name="lane" class="custom-select">
                                                <option value="top">TOP</option>
                                                <option value="bot">BOT</option>
                                                <option value="mid">MID</option>
                                                <option value="jungle">JUNGLE</option>
                                                <option value="suporte">SUPORTE</option>
                                                <option value="preencher">PREENCHER</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 body_pedidos">
                        <div class="detalhes_pedido">
                            <div class="cabecalho">
                                <h4>Detalhes do pedido </h4><small>Aumento para a Divisão prata</small>
                            </div>
                            <div class="body-pedido-principal">
                                <div class="body-pedido-cabecalho">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p><b>Divisões solo</b></p>
                                            <p>prata - prata</p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p id="valor-pedido-desconto">R$ 1,859,53</p>
                                            <p id="valor-pedido">R$ 500,00</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="body-pedido-principal">
                                    <p class="pl-3"><b>Adicionais do pedido</b></p>
                                    <div class="row">
                                        <div class="detalhes">
                                            <p>Stream dos jogos</p>
                                            <p class="gratis">gratuito</p>
                                        </div>
                                        <div class="detalhes">
                                            <p>Chat offline</p>
                                            <p class="gratis">gratuito</p>
                                        </div>
                                        <div class="detalhes">
                                            <p> Definição de horários <span class="blue-text">+10%</span></p><label
                                                class="switch float-right"><input class="isExpress" type="checkbox"
                                                    id="definicao-horarios" value="10"><span
                                                    class="slider"></span></label>
                                        </div>
                                        <div class="detalhes">
                                            <p>Entrega rápida <span class="blue-text">+30%</span></p><label
                                                class="switch float-right"><input class="isExpress" type="checkbox"
                                                    id="entraga-rapida" value="30"><span class="slider"></span></label>
                                        </div>
                                        <div class="detalhes">
                                            <p>Ganho 13 pdl ou menos <span class="blue-text">+20%</span></p><label
                                                class="switch float-right"><input class="isExpress" type="checkbox"
                                                    id="pdl" value="20"><span class="slider"></span></label>
                                        </div>
                                        <div class="detalhes">
                                            <p>Uma vitoria extra <span class="blue-text">+15%</span></p><label
                                                class="switch float-right"><input class="isExpress" type="checkbox"
                                                    id="vitoria-extra" value="15"><span class="slider"></span></label>
                                        </div>
                                        <div class="detalhes">
                                            <p>Serviço mono Champion <span class="blue-text">+20%</span></p><label
                                                class="switch float-right"><input class="isExpress" type="checkbox"
                                                    id="mono-champion" value="20"><span class="slider"></span></label>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="total-preco">
                                    <p class="pl-3"><b>Preço total</b></p>
                                    <h3 class="pl-3">R$ 800,00</h3>
                                    <hr>
                                </div>
                                <div class="comprar text-center pb-3">
                                    <div class="icone"><a href="/" class="btn">Comprar</a></div>
                                </div>
                            </div>
                            <div class="erro-detalhes-pedido">
                                <div class="mensagem-erro-detalhes-pedido"><i class="fa-solid fa-ban"></i>
                                    <p>Erro o elo atual deve ser maior que o elo desejado</p>
                                </div>
                            </div>
                            <div class="carregamento-detalhes-pedido d-none"><img
                                    src="/Pai-Do-Elojob-2.0/static/media/carregamento.87232490822d3249fb70827d67f4ceb4.svg"
                                    alt=""></div>
                        </div>
                    </div>
                </di>
            </div>
        </div>
        <div class="bgkLeft"><svg width="336" height="704" viewBox="0 0 336 704" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M296.988 2.09839C319.826 -4.30005 340.707 17.0818 333.769 39.7616L137.173 682.447C130.508 704.236 102.942 710.933 87.0222 694.632L-363.544 233.261C-379.464 216.96 -372.115 189.56 -350.175 183.413L296.988 2.09839Z"
                    fill="#12161B"></path>
            </svg></div>
        <div class="bgkRight"><svg width="304" height="928" viewBox="0 0 304 928" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1146.85 185.759C1180.34 151.958 1180.34 97.1568 1146.85 63.3562L843.68 -242.65C810.193 -276.45 755.899 -276.45 722.411 -242.65L25.1157 461.165C-8.37189 494.965 -8.37189 549.766 25.1157 583.567L722.411 1287.38C755.899 1321.18 810.193 1321.18 843.68 1287.38L1146.85 981.375C1180.34 947.577 1180.34 892.768 1146.85 858.97L873.997 583.567C840.51 549.766 840.51 494.965 873.997 461.165L1146.85 185.759Z"
                    fill="#12161B"></path>
            </svg></div>
        <footer class="footer-body ">
            <div class="footer">
                <div class="container cont-footer">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="body-logo pay"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6CAYAAACI7Fo9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDIgNzkuMTY0NDg4LCAyMDIwLzA3LzEwLTIyOjA2OjUzICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjIuMCAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIyLTA0LTAyVDE5OjM5OjU0LTAzOjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIyLTA0LTAyVDE5OjM5OjU0LTAzOjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0wNC0wMlQxOTozOTo1NC0wMzowMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowZDQzNDFhYy01MTQ1LWQ1NDItYWVkYS04NTM1YWM3MjgwNzIiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDozODkxY2EzZC05MWI1LTc2NDYtYTc0YS05NWMzOGIxMWNhZGYiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozNzE3NzIxOC04ZDE5LTU0NGYtYTM5OS00MzE5YWQ0ODc4MDQiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjM3MTc3MjE4LThkMTktNTQ0Zi1hMzk5LTQzMTlhZDQ4NzgwNCIgc3RFdnQ6d2hlbj0iMjAyMi0wNC0wMlQxOTozOTo1NC0wMzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIyLjAgKFdpbmRvd3MpIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDowZDQzNDFhYy01MTQ1LWQ1NDItYWVkYS04NTM1YWM3MjgwNzIiIHN0RXZ0OndoZW49IjIwMjItMDQtMDJUMTk6Mzk6NTQtMDM6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMi4wIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz68VBjFAAAfu0lEQVR42u2debhd0/nHM1UiERIh1RBDK4YiHX4ipFTQKq0iNdOibZQYaqbmsa2Zmqc2qKlRBCFCkFBKkBBDzUFug5SEzCLJ5/fHes9zd3b2sPbZe997zrnf93k+z8PNOXuvs/b67rXWu971rnZAOyFEY6NKEEJCF0JI6EIICV0IIaELISR0IYSELoSQ0IUQEroQEroQQkIXQkjoQggJXQghoQshJHQhhIQuhJDQhZDQhRASuhBCQhdCSOhCCAldCCGhCyEkdCGEhC6EhK5KEEJCF0JI6EIICV0IIaELISR0IYSELoSQ0IUQEroQEroQQkIXQkjoQggJXQghoQshJHQhhIQuhJDQhZDQhRASuhBCQhdCSOhCCAldCCGhCyEkdCGEhC6EhK5KEEJCF6JEtge2BjqpLiR00Vh0An4OPAycDHRVnUjoonHoCuwOPA4sAA5RnUjoonFYGTgUeAyYBcwAfqp6kdBFY/B14HTgReBdYC7wNtBfdSOhi/pnbeB84B3gLeAVYDHwHLCW6kdCF/XNxsD1wOfAFOAJYCrORgLdVUcSuqhfBgC3AEtM5KOAZ6wXB7hWy2cSuqhffgTcT7M9BPwT+CTwt1NUTxK6qD86ALsC4wNifga4EpgU+NuXwK9VXxK6qL818APMoVaxd4C/AHcB8wJ/1/KZhC7qjB7A0cDrASHPsXn3xeZ0C9rbwP+p3iR0UR/0sfn1eyEhPwScBIxmWXseWEd1J6GL2md966k/CYn4FeBEG6p/HiHy+ywCTnUooYsapr+tgc8OCfgLC345BJhMtN2o5TMJXdQ2WwF32iaTsN0J/BK4lXg7XXUooYvaZSfbJhplE4H9gD8AH8d85itgqOpRQhe1x3LAXsC4GPF+htsfvqvtNIuzmbj95KpTCV3UECvaHHtSgnj/CmwLXGK9dZxNATZTnUroonZY1dbA30oQ7nPAzsA+tpU0yV4Evql6ldBFbbAOcA7QlCDaT4AjgC2Bu0m30UAv1a2ELlqfDSzmfGaKaK+zLaV/sCi3NLvR5veqYwldtCKbAX/zEO2/gMG4zKsT8bM/qX4ldNG6bAfcCyxKEes04EBgPXO6+dgi4HeqYwldtA4dbWlrjKdYLzcH2oEmeB+bBeymupbQRcvTDdifpbeJJtljwKa2k+wx/O0tYKDqW0IXLb9NdBjwH0+hNgEH4fKz/dFjWB8OhBmsOpfQRcuxukWpTfEU6QLgUmA1+/6xZLdFtuz2pL0kfoJL2aznIaGLEtbALwSmZxTpwaHr7E0x9inwKHAaMAhlcpXQRS42Aa4meq+3jw2KuOYgWysfBfy3IOF/YAE2vzcfwPJ6dhK6SGcN4reJZrGJwJ4JIaorAT8AjsflWP+wIOG/A9xuI4r+aF+6hC4iGUKxNhd4FpclZgjxJ6OsiNuLfpL1+E0F3HsRLhPNNbhdcoqLl9CF0Rn4BXCZCXRWwcKfbUtyf0np8XtYj3+c9fgfFPTSmWBOwiHAKnreEnpZdLB5ZFf771ov75rALtYjT2DZ1E5FiG8icBXuCOO4Hr+7racfiTukoYge/0Pg+zXYNpYH2kvo9cVKwI7An3EZS1/GZTJ9z/57FHCmDVtryZEU19DWth7/UuDfuBxuRff4E6zH38Njjn9czjn+Za0s7K2As4AHrT28a0wCHgDOxp1As4KEXpusa2LIMuR8EzijFYeUPWwZ7A5raFfjDj5IWsLqayGw5wFPlTDUn4vbd341sC/wrZQe/2hzJr6JO3stzfZvpbr+pb3QfO1d6yzWkdBrg+7AuaRvzUx7qD9r4ZfSn4D3Y8ozBbc1dAgueUTaUH9X4ALc7rQZGaPh0mweLl/7leZg6xfR23UGhqcIfRZu/3tLD5HXsZ66WvsMlwBzBQm99djChl9F2CJcuqUyy7sacFHG4ffHuIMLD8TvbPGVgZsoz5awdObXnVn6FJcoGw98pxXaxw8L8i0AvGTtTUJvYfa0YWbRtl9J5d2tgLXrWSaafRJ6xuNLqhdstHCY3aeXLaOlvTzPjllb7wL8uMT2McBjlPcV8JFNm8YBjwMvEJ/5dq5NAST0FmL/goenQfui4HlZZ3N0FWWvxUTBdQVuLrEnfyjgqNsFd8Zakr1M/AaZdU1U4HLGr1Rw+/hGwrQoODJ5woT79YhR0Q9t5SNqRDBMQi+fnYHFlGs3FLgCMLrAcg2PmSv2ZeljjIt+8Q0L/J6/eXznGgvIiaqTHVl2X/wEz2mJL3/P8PsWW3lGWNnC11rV/B/hjmUvCb081jfnSNk2E+ids6y9gacLKs98c2RF3WcgLgy1DHvE6rwSwZeWJfZDkhNWnEp8Kul3cHns8raR/8s52nsyZkqxA0tvNJpDnZ0aWy8F7YKLHGsp2zVHWXvhnyAizd6wtd+o++xbwrp6pRc/KvBbbvX4zh24uP04J+S9HtdoAr6bs51cV1AdXGFtLjzv/1/gM5NxCUEk9AI5ueDGvBi3o+tVXHz2f0M9wflVlnOFwPwzrz1I8/7yMCeV9IIbh8smW3F4psUlzEiZsw6yNXZfawI2ylH3wRHfdPNpTDKfQtYowzEsm+L6p6F2craEXuxaaFGBIS8Ax9hyz0rmEe5kc8r+uJDPx6ucg30Nd3xwEUtYZxIdstvNc56c1Wbjot7amXPqdo/vPBp4KURxmK3DZ7X3iA/USaKrzc8vxOWr72XPtr31zn1xUYZ3AAszDOXDAUxB5+o8YEMJvRiKGI59YQ2vzG2U1xZQzv9ZY4zzJo8rQeTPBHrRfWzJKckWAKfgElXG9ax5X0avAX1KfFYD7Xf7OkHDDrrgEP4WCT0/65kzKo812fyqzHL+qQDBPZ3QQw7MOAT2dfKdbNfvA9zl8Z2JuJj3uHr4DtlCTZPsOaBnic9seeA2z7LsE/ruhaF67Ceh5+OSnI1lLuVnNT22gEZ9jQ0944KDio5pf5rmaLXf4HLFpdlFKc6n/cgXihxlj1Fu+Gkn3EanNJsSKsdGoeH/HyX0fHHseUMYjy25jIcW8CJKCr09Cb/NIr72ZcCB1Ae4x+M77+DiF+LKuJy9BMqyUREe8KJDkz/yKMevWXon3OSQX6GrhF4du+RsIC+VPCf/fc7yvUp8/HRX/E9V8bUJNO8HPyQ0z4yzW0iOKViXbHnjq7WRJS9lHeFRhvGh7wwP/ftPJPTqyOvQObjEsp2Vs2z3En86aZ+CnW6LAkPLNT2Hqv8DfpVSBzvgf/pLETaG4sNlK/QkPfPuPKu/uCXfSyX06gJk8kR8zSY+gCMPvTyXnpJEdwrxm1IGFOx0C+66OtTWvX2GyknOpfa4KLdFtLz9m/Jy0Y3wuH9wReR3EUu3HST07KGMeeamE0oo0/Y5RTgNF3ARd/09CnS6LcElp6jEIYz1+M48XIxBUh2sgl+UW5nWVNIw+SiPe58V+PzQ0L/NwR28IaFn4JCcjWFEgWVZ27zieTbTjCM5COQEitus8wrNYbNHeHrC/43L055UD1vifzRU2faVLWkWOZT/ucd9b0hZbdlOQs/GNTkbwk0FlGEda0x5N9JcgtuuGjdFKcrptgS3tbIjbjPKE56COdfDq3041UW5lW3/wSXlKCL/39Ye97s9pY0eLqFnY2zOBjCqyvt2tgd+HdWfmlKxWaElmSin26MFNfg3rdztbPg91/M7ackfVijB+1+GvWI97Ho52txuHve5OfD552Ne6hK6Jx1t6SmPTcfFNvsIe11c6uOrSE+LlMUJlrSNcdMCnW5/sR55E/z3pV+b4PUvI8qtpWweLmnmn3Br/+vjf16cT+6AipA3xsUklDllbHihd6eYs8JesyW2rYHNbI45BLf+fYUt17xF/hDbqIfdI+H3/YJiIsjexaUmrszxfY51mobLPJv2DPai+Ci31rAvgam4Lc634g6L/DWwk/kxtsRt933Y83qV4KarY/79MQndn1XrtJEtpHkHWBzHF+R0ux4XQNIf/80Z95KeyaUnLve6LNo2Ms/67ASnpoTuSR+Kj+0u295Pme92ppjtpU00J8U4ybMX/xy/DLcdcYE1i6TnSHuL9PX2FyX0bLHHX9RRAxib0lOuZtOEvDaf5uCXnT096g+Rbb90Z/Nt/Aw4x8o9TRoHXMjrH1I+84KEni0c8X918vDPwyWciPstq1Pc2vPTgete7PH5D3D7BXoW8Dw2N9/G7fZ7vmqDQp/j8Zl/SejZwl/fq/GHPhO/HN/nFXjPoND3z/C9GbhEj6cD25L/CKrlzOv8G1wAyURPEbQFe1BCz8ZzNfww3zQnmM/vGFngfeezdNKHa6nusIZPTPhn4CK58gq/PS56cGfceWVjiT8EodHtRgk9G3fW6INcgtu15fs7Tin4/h+ZY62SZqk3LvvJHVS/d3+6Cf803JJTjwKeXy/c0tUx9rJ7v40I/RQJPRun1OiDnE+2XGY98QtFrWbq8IANnyv7xTuYs+4c3JJbtUczNdm1TyhQ+Cvg1q4/anChD5HQs/GjBunRK9lhd8EFWbxSQpnm4SLijsFF+QWTSe6LC9vMs+W3CRdSfKL10ivleK7HN7DIvwzVv4TuwYo1PM97neZMLdXkKNvUestHKP7kmUW4oI2TWfbkk0G4NFJPkT3HedCm4taSt6ri9/+2gYX+CvGZcSX0BO6o8bf3kyaozUheYks7EHBX3Pnjkyk2WGUJ7rDD81k2c2tfm9v/DRcIUu30oW+G37om7jCFRrW/1LCWalroQ+roIb+GW9veFv9NFFG9fX/cLqwxwKcFl/Fta4zbhl5MXexldZqNMrLMowd7euV/S+MH3gyW0KujW516az+wefHe5EtntZrN7S+33n4BxWWEnYrLaR5OhtEHF03nO4VZOeU3/KAkZ2St2cs5RnXK647LTVbPNhO3M+oo8h/ds3mBXuvPzbnWPeAwPNrz+nNtZLBGypTkatpOBN3BNa6jmhd6b/wOF6gHW4Bb9joDtwzWOUM99ADuL6gc/wz15Nvgd8TzPFxASNIhiB1wS34f0HZsKuVlp21TZ68d2aAN5A1cJptdiM8KW+kdi4gUnMLSh0euac64JR4vqOG4xBZpw/RxtD07vA40VBdC70I568+1YickCH0dXLaavHYj7pTUSq97mMcwfRHwD5Iz5VRGXZfRNje6vES5p8i0ufPRt6Yx90knHRn1bfOU510N+Fngmtt5DNMX49bJ086s6wAc1MaG6eEX4VZ1op+6EXo73JnhjWTHk5zXfmrORnghzccYrY5f4ov7zOnn4xgcR9u2C+pIO3Ul9E4Uk8ChFuwMkvOnT89x7WeBH9K8hn2ExzB9lDnl0p7B122YvrCNi/wpikkxLaEnNLQ3GljkO1B9munZuPRSwf0Cz6Z852H8Dx04CPgQ2YeUc9yXhB4xd63XKKsLSY4ErPaQhLEBr/gauIQQSd70J3Ank/jU98AGGknltS+IPwFXQi+BAdTf+nrSnG7/KofDn7B0sMZRKfUyHrec51PH38SlxV4ofQMuYemP61QvdSv0yiEITXXSSK5M+B3Dqrzm3TQf6rc10SeHVGwC7pCKLPW7u7S9lMi3r2Ot1LXQK8P4V2u8kVyTUP7jqrje+zQfwtAHF8wSN0x/AbcnvVOV9bs9jZ8sIs2mBpybEnor0pviwkOLthsSyv3HKl8aK9B8mmdcttyXgP0oZqPF+viFyDaiPU8NJ5Noa0KvHD5wHsXt7irCbiM+EcGFGa/1amDouHWCN/11844XHa3Vjfwn3NabDaeYNFoSegnsQPWJFFpC5B3Jdjrpl7gDAzvYyOXmmM+9YU65biXX7+40fqLH6SSfgiuh1wir4FIhL26lhnIfLvd5VD70v2e4zrPA92g+nzxqmD4Ft720ewvWb5+EF069272NMlRvC0IPxsc/0cINZWTMsLk7LrOqj31h4m1vv+G5GIfccaQnfiiTn5AekFMv9jLufPSG1UMjC73C3rgMLWXbGKLDInvgjtP1sYdwhyGsCtwU8e/TcOd/9aqRuu0EHEhxZ723tL1no6XlG10HbUHo7exBHkB5J8A8SnTygW/gsrKm2SdWvi7AoSwb6/4RLoPrajVav91xB0u8XCcCn4w7S65nG2n/bUbowa2V2+NOgpldUKMZj0tPHb7XWp4N/yYT8JYsG/TyKXCuvTDqoX4747LaPmCOxFqy+TYHH0K27D4Sep3zLdyhB+OoPsb8aaLPLtuA9M037+DOK1sDl2kmaDOBS0g+jrnW2Rh3sOPztF4ugfm4E05PIH/OPgm9AeiHS0l8my3P+WRLeTZmrvw9kpMxLMalhl7TlsSCw/TPcdtAv9lAddsel8b6KHNWlrkDbqG9YG+z57me2raEnpS6aiPgV8CluK2cr+NOVals8JgUM1/+AcmbSl7AnZiyRchjPc+WBL/VBuq3Oy6xxkHAVbidd2/ijnf23UAzD3eSz8u4qMgLcPnwNmyLw3IJvTi+Zp7wDU3MUcP17ayxRtkcXEaZjVg6wmw+Lkx2ozZev8tZ/W6Ay17zY9wuuz1t1WR33CGN29hL4pu2mtFBbVNCb0l2SXDujcadhHJwIOhliQWd9FfdCQm9ftbpF8QsmQ0zL//4wN/vMOGr7oSEXicMi/Eo34xL5XR14G//ID2zqhASeo1xZITA3wJ+h8ubPtP+9iANsJ9ZSOhtkTMilnWuwx1H9EwgWm5b1ZWQ0OuT8F7yiRYvfav9/zM2bFddCQm9TsNnrwoFt1xjwS9Ntka+s+pJSOj1S6dAjw0ugf9lFt45gQbf4igk9LZAV+AuE/h0XPbVUcCTuC2aHVVHQkKvb4J7ySdZ8MsDwFCFWgoJvTFY1RxrX+L2lN9l0W1dVTdCQm8M1sZlXp1pgS4H0oaSFAgJvS2wMe5c8mdxhx/0UJ0ICb2xGGTz8COJzhojhITeAMP1/ajdvGxCSOgFIC+6kNCFEBK6EEJCF0JI6EIICV0IIaELISR0IYQqQQgJXQghoQsh6lLoA3DngiUxCJeffMMCd3b1o/lMskFUf0TRWoHrbAF8B3fIX1zI60DP3zsAd2Cfz0aXNXBHB/0Sd2b4UNxJLv1x57pVW0d9Qr8tD+E99evHXHsz3HFURTa69sB3rV4uAG4BRuBSdV2KOx9+YMaQ5G9XWTebV/FM+uOy/Z6Py99fKftluDTfg6q45gZVlH+APbce1Qj9C/xtIfCR7fY6LMdmkBWA90PX/twEk/VaF4eu8zrxqZ7WIvqElTj7CpcE8gH7vX1Dv+EAYExKHb5pZfxuFb/tOIqz8FFQ98V8bg7w9YIE3t1efBNwJ8qm2avAiZ73H1tlPSzC78TVrrhDIZ/B7wjo14FT8T/X/oEqy/+lafBR4OgkzYT/MCNH45kGHFFFA/htzPXOquJaF0U0ljihrwnMDTToTxKYGdE4PwPOsR1v/4kQyNu49FOv2MMIP6BrgN4ZftuxBYl8CbBJ6Nr3xnz2i4KEvos1/mqsyXr/pOs/kkMo/VKuvRMwOYcmhnnUz30FPdvpNiJKFfpnBdzsugwNoCPwYsx1plovkKVBhXOuv5Ii9Dn2uZOBlRJYxaYquwHDaT4sMWjz7IHtYb19FxumdrTh1QB7MXwQ6uF9D1o8pqDGsDhC6PfEfPbzAoR+ZkHlvjFhGjGmymsuSBH6iQWV/WbcibFx9xlJsfaHrEIfA5wX4nzgChtuTIu50fGejWD7lAIPbSGhH5XxPmsA76RVbgy9rB6XBN76m7Sg0KOG7mUJ/Y8FN+BbY3wuY0sQ+pkFl/0fuLThLSH0ReHpYZrQD/RotCfa/DVos0Jz2DhGh743NjREfjmhcooU+jEZG/CxEb95is37fa+xjw0dKz17jxxCn2XTLh8+NedV2ULfN8Nw862ETiNsZ0bc6+6U3zw/o9B3L6ns52UU+hzc6bt/DzEyNDKMsguyCH2Y50M9IuJGJ6R8Z0BI1E3WU74Zus6uNSb0jQJOvMfNu15x0NydUQwHB8p6cQ6h72DTC186liz0b5gI0nrnbayz6GxTpIHA5eboTXICfyd0vxUTfmsvlj7VNk3oPYEPU8p+J7CdXbuLlX2Aed7npzh0N80g9PcT6rgHcH3CvUaVIfT2JqqgjU75zi2hz19ofz819PdxNSb02+w7cwM942WBew7OKIr7A3P8daoU+oCc8+iihf7nhLLONwdm0ve3S3lRjMg5pUsS+hkpQk0b5W4JfJxwjZEZhP4B0C3hXn0TXiylCL0d8LfQdyclrGGvFRBZxfu5QYQAK17izWtE6H1smAzw18Dfe9uQuNJTZWmEAwMjglOrFPqmNST0binDSt+VmZ0SluHm2vOrdtk1TujLA+8mlP1Ez/vtkFD2BcC6GYSedI5Av8D0L2wXlSX0KyNE1sHTSXN/6N//Hvr322tE6HsHrh0+83x4YLWgG9kCSF6w705IeDkmCX0nGy6nsXILCH2rhHJOSmgTWZ1U+5cg9M0T7jeZbMdv3ZHhZZc0dO8cs1rVLzAajLLNyhL6g6HvPh3zuZ4R68rbhT6zeeiNOB8XBdTaQr/EPv8xy0bJHRBYvto4ozjOs+/OJH5tPUnoc2zNO40RLSD0IwvoESvslnCtq0oQ+rCE+52asexJK0o3eQp9Ae58gWdCTKY5BiTKLsm6vOYr9H4sGxF2fcxnjwp97sUYMT4R+twVNSD0ygN5PqUn+3HGRvHrhDXuIpfXRreA0C9KuH/Welk/wTE3ugShJ/kWdsxY9r4JYnyspOW12XEvpDShH+T5g56LuOm2EZ/tYssRQftdzHXDSxwzPBpd2UJ/3D7/RMS/fb/KlYJwz7VZiUIf1QJCv65Ap2HQJxK2p0oQ+uUJZd88Y9l7EB1YBe4svzKE/ilweNRwP03oJ9uSV5C+VjmDbU2zKeaN1cFDvJ8kzBujHCMntLLQRydMS4Lzu5/mWHP+XolCf7gFhJ4kli0zXmvtBK/yYyUIPWk0knU1pbfVX5Q9WZLQg9Pm1bMIfYENB8IkbQaZRny00VMewQ9BDg99/t0UL2TZQr/BPv9exFvzFzl6rpM8vMlJQp9hL83pKdzWAkI/OaGcv814rW0SrnVzCUJP2jh0SMayD0jwvN/lKfSFNh9/KYK3Ezzuy7xMio51n0z8zqzBoc8usQdweALnRlTWAa0o9MMC66nfjnGozcAduZylUTxk332L+JjoJKFvb0PFNLq1gNB3Tijn/RmvdWnCtY4uwG8QFvqOCfd7KGPZz0m41pkZlte62+g4TBdrg6MS5uuFC/0/1iutWOVSSRabRHxYbNlC3ySw5n1K4O9fo3l31tgqnDaz7bvXVrmOXksBM6sRv1V3YYbh+zrE76ZcnDDFyfLCCAcprZpwz68iVofaJbStTzNMYZKEvnzKvVaJ8QV8lkXoE3ABILeFuMlc+Ifjt9F+I5LDGrPajq0k9PbAvwLr5ZX49KGBex6YURjBMm9RpdC3KFHoq1ZxvTsTyvo2ywaMhFk5UM9R9lzIB7Q6cDbZ93t/hgtjTYrYDNpUmgO74lgRGJ9wjYkRbbLayLgK7+QV+m9yNqC4YJpFtmbsy1eew6iWCIHdNXD9i3FRfpW4gNc83sBhT31lCeYR4oNl0oT+3RKF3ruK621GcnKJD3GbesL+lk64qLKXUl70e4RGU5Wpz3CW3Ry0aWDERET7CI8ON06Z+zbh9jeEBdjRplATUsq+b4bR7hTP9rgwr9CHFSDy1SKGQ0dbT+HLQREviu+1ktDbmTOlMoT8b6BMWdaJ+wXexPNI36qaJPRxuA0193gy1FPoi2yq9Lwn23s4wMK9+whcEo7bWHa/RNw8P/hCvD7imn8259l5JMfM3xhT1+d6lONdawfX2Kj3Zc9Vjw4ZhP6pOTB/GcEwXBj2vITRSosK/bTQNT8me665LhFLbTe1otC729s2aFky4mwT+r7PyKnI/eg3eAo9q+0XembjC142ejPgM+iAy3uQx+Lm3J2pfo97nL2XsKJS9PIa1rZbTOgrRqyz/7nKa50Q4Uj5VkFCPzzD6GQI8E+WjXp6wXrKPgmN5we2LLQ40GMe6nnvIoV+RUlC3zt03VVttFGEvc7S+d36pgyx0+zBlKlST+uBi3pBbdgCjuqgjW5JoQ9NWc7Iusc5HIBwQUFCn5wy9B2NC9WdGbr+v1l2A84Ma9x/NYflFXbtN0KfewP4SYbfX49CrwQ+XZ7zundG+Ara2xB2XpXLwD6JG5ezZ7g4R9nvSXj5lyX0kYQC0cI3DGe4PCqHyLtFDG/vz/niGB7x4lg9wen3foLQ166yEmfam/5XNK95D7b52iyP779qo5Os05eTCmwI4bnpmIKuu3/KdOWBjL3weFwgUprjb7Tn9RbjdpVlzVi8JS4fYJaswU+HnIZJPFpA3c+wetgdj1j342xOfRpwOvn2Oa+G28QfvF7/nEJfN3C903CBB8Eh0Y/sPpX7HUL8tsiVcHneTkvhdPvcUJvTJb2d1wL2xG3DvcXe5iNwGU6OtKXI5ar87ZsHflseTjfPdvDaexZw7dPxy8e/sXUgI8zR12TrwNNsBDYSF103oIr6OdtE8zbN0YBv29/OJf++/Q2B3+Pyv00Mlf1V68hOw+UYyHLdvaqs/+NtOXdw2ghFp1gIoSOZhBASuhBCQhdCSOhCCAldCCGhCyEkdCGEhC6EhC6EkNCFEBK6EEJCF0JI6EIICV0IIaELISR0ISR0IYSELoSQ0IUQEroQQkIXQkjoQggJXQghoQshoasShJDQhRASuhBCQhdCSOhCCAldCCGhCyEkdCGEhC6EhC6EkNCFEBK6EEJCF0JI6EIICV0IIaELISR0ISR0IYSELoSQ0IUQEroQQkIXQkjoQggJXQghoQshoasShJDQhRD1z/8DwUGBv8v87lsAAAAASUVORK5CYII="
                                    alt="logo do site" class="logo"></div>
                            <div class="texto">
                                <p class="paragrafo"><strong>O PAI DO ELO JOB</strong>, preza sempre por serviços
                                    rápidos e discretos, mantendo nossa transparência e responsabilidade com nossos
                                    clientes. </p>
                            </div>
                            <div class="body-payment"><img
                                    src="/Pai-Do-Elojob-2.0/static/media/payment-methods.e1fcf60c63af3ce5c910.webp"
                                    alt="formas de pagamento" class="payment img-fluid"></div>
                        </div>
                        <div class="col-lg-7 serv">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="servicos">
                                        <div class="titulo">
                                            <p>LOL</p>
                                        </div>
                                        <div class="body-item-service">
                                            <ul class="item-service-list">
                                                <li class="item-service"><a>Eloboost</a></li>
                                                <li class="item-service"><a>Duoboost</a></li>
                                                <li class="item-service"><a>Md10/Md5</a></li>
                                                <li class="item-service"><a>Coach</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="servicos">
                                        <div class="titulo">
                                            <p>WDR</p>
                                        </div>
                                        <div class="body-item-service">
                                            <ul class="item-service-list">
                                                <li class="item-service"><a>Eloboost</a></li>
                                                <li class="item-service"><a>Duoboost</a></li>
                                                <li class="item-service"><a>Md10/Md5</a></li>
                                                <li class="item-service"><a>Coach</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="servicos">
                                        <div class="titulo">
                                            <p>Valorant</p>
                                        </div>
                                        <div class="body-item-service">
                                            <ul class="item-service-list">
                                                <li class="item-service"><a>Eloboost</a></li>
                                                <li class="item-service"><a>Duoboost</a></li>
                                                <li class="item-service"><a>Md10/Md5</a></li>
                                                <li class="item-service"><a>Coach</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="servicos">
                                        <div class="titulo">
                                            <p>Outros</p>
                                        </div>
                                        <div class="body-item-service">
                                            <ul class="item-service-list">
                                                <li class="item-service"><a>Contato</a></li>
                                                <li class="item-service"><a>Termos</a></li>
                                                <li class="item-service"><a>Juntar-se</a></li>
                                                <li class="item-service"><a>Politicas</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4 last-footer">
                    <div class="container">
                        <div class="direitos">
                            <p class="paragrafo"><span class="color">©</span> PAI DO ELOJOB <span class="color"> 2022
                                    todos os direitos reservador</span></p>
                        </div>
                        <div class="info">
                            <p class="paragrafo">League of Legends é uma marca registrada da Riot Games, Inc. Nós não
                                somos de nenhuma forma afiliados, associados ou endossado pela Riot Games, Inc. Todos os
                                direitos autoriais, marcas, imagens e marcas de serviço pertencem a seus respectivos
                                proprietários.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="modalEloAtual" tabindex="-1" role="dialog" aria-labelledby="modalEloAtualTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Selecione a classificação</h5><button
                            type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="body-escolhaClas">
                            <div class="container">
                                <div class="row">
                                    <div class="elos">
                                        <div class="etap">
                                            <div class="icone-etap">1</div>
                                            <h5>Elo Atual</h5>
                                        </div>
                                        <div class="pl-5"><label class=" escolha-elo-body-atual" for="atual-ferro">
                                                <div class="escolhe-elo-ferro"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/ferro.8a18ed1398667b91f977.webp"
                                                        alt="ferro" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="divisaolol" id="atual-ferro" value="ferro">
                                                </div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-bronze">
                                                <div class="escolhe-elo-bronze"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/bronze.db4126f5c16891555093.webp"
                                                        alt="bronze" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="divisaolol" id="atual-bronze" value="bronze">
                                                </div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-prata">
                                                <div class="escolhe-elo-prata"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/prata.d608cb449c88d8057406.webp"
                                                        alt="prata" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="divisaolol" id="atual-prata" value="prata">
                                                </div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-ouro">
                                                <div class="escolhe-elo-ouro"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/ouro.a1e86b0b7a112bc7a21a.webp"
                                                        alt="ouro" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="divisaolol" id="atual-ouro" value="ouro">
                                                </div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-platina">
                                                <div class="escolhe-elo-platina"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/platina.f8df9b8bb1c9746cc89d.webp"
                                                        alt="platina" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="divisaolol"
                                                        id="atual-platina" value="platina"></div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-diamante">
                                                <div class="escolhe-elo-diamante"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/diamante.6d0edfefd4146278374d.webp"
                                                        alt="diamante" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="divisaolol"
                                                        id="atual-diamante" value="diamante"></div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-mestre">
                                                <div class="escolhe-elo-mestre"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/mestre.d82b4edc38971fc0184d.webp"
                                                        alt="mestre" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="elolol" data-dismiss="modal"
                                                        id="atual-mestre" value="mestre"></div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-graomestre">
                                                <div class="escolhe-elo-graomestre"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/graomestre.709a7cdc74405c5e44e6.webp"
                                                        alt="graomestre" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="elolol"
                                                        data-dismiss="modal" id="atual-graomestre" value="graomestre">
                                                </div>
                                            </label><label class=" escolha-elo-body-atual" for="atual-desafiante">
                                                <div class="escolhe-elo-desafiante"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/desafiante.b5ec182dd126f43cacff.webp"
                                                        alt="desafiante" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="elolol"
                                                        data-dismiss="modal" id="atual-desafiante" value="desafiante">
                                                </div>
                                            </label></div>
                                    </div>
                                    <div class="divisoes ">
                                        <div class="etap pt-4">
                                            <div class="icone-etap">2</div>
                                            <h5>Divisão Atual</h5>
                                        </div>
                                        <div class=" divisoes-escolhas    pl-5"><label
                                                class="divisoes-escolhas-body-atual  " for="atual-IV">
                                                <h3>IV</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="checkbox" id="atual-IV" value="IV">
                                            </label><label class="divisoes-escolhas-body-atual  " for="atual-III">
                                                <h3>III</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="checkbox" id="atual-III" value="III">
                                            </label><label class="divisoes-escolhas-body-atual  " for="atual-II">
                                                <h3>II</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="checkbox" id="atual-II" value="II">
                                            </label><label class="divisoes-escolhas-body-atual  " for="atual-I">
                                                <h3>I</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="checkbox" id="atual-I" value="I">
                                            </label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEloDesejado" tabindex="-1" role="dialog"
            aria-labelledby="modalEloDesejadoTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Selecione a classificação</h5><button
                            type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="body-escolhaClas">
                            <div class="container">
                                <div class="row">
                                    <div class="elos">
                                        <div class="etap">
                                            <div class="icone-etap">1</div>
                                            <h5>Elo Atual</h5>
                                        </div>
                                        <div class="pl-5"><label class=" escolha-elo-body" for="ferro">
                                                <div class="escolhe-elo-ferro"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/ferro.8a18ed1398667b91f977.webp"
                                                        alt="ferro" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="elodesejado" id="ferro" value="ferro"></div>
                                            </label><label class=" escolha-elo-body" for="bronze">
                                                <div class="escolhe-elo-bronze"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/bronze.db4126f5c16891555093.webp"
                                                        alt="bronze" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="elodesejado" id="bronze" value="bronze">
                                                </div>
                                            </label><label class=" escolha-elo-body" for="prata">
                                                <div class="escolhe-elo-prata"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/prata.d608cb449c88d8057406.webp"
                                                        alt="prata" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="elodesejado" id="prata" value="prata"></div>
                                            </label><label class=" escolha-elo-body" for="ouro">
                                                <div class="escolhe-elo-ouro"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/ouro.a1e86b0b7a112bc7a21a.webp"
                                                        alt="ouro" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="elodesejado" id="ouro" value="ouro"></div>
                                            </label><label class=" escolha-elo-body" for="platina">
                                                <div class="escolhe-elo-platina"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/platina.f8df9b8bb1c9746cc89d.webp"
                                                        alt="platina" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="elodesejado" id="platina"
                                                        value="platina"></div>
                                            </label><label class=" escolha-elo-body" for="diamante">
                                                <div class="escolhe-elo-diamante"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/diamante.6d0edfefd4146278374d.webp"
                                                        alt="diamante" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="elodesejado"
                                                        id="diamante" value="diamante"></div>
                                            </label><label class=" escolha-elo-body" for="mestre">
                                                <div class="escolhe-elo-mestre"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/mestre.d82b4edc38971fc0184d.webp"
                                                        alt="mestre" class="elos-img-escolha"><input class=" isExpres  "
                                                        type="radio" name="elodesejado" data-dismiss="modal" id="mestre"
                                                        value="mestre"></div>
                                            </label><label class=" escolha-elo-body" for="graomestre">
                                                <div class="escolhe-elo-graomestre"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/graomestre.709a7cdc74405c5e44e6.webp"
                                                        alt="graomestre" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="elodesejado"
                                                        data-dismiss="modal" id="graomestre" value="graomestre"></div>
                                            </label><label class=" escolha-elo-body" for="desafiante">
                                                <div class="escolhe-elo-desafiante"><img
                                                        src="/Pai-Do-Elojob-2.0/static/media/desafiante.b5ec182dd126f43cacff.webp"
                                                        alt="desafiante" class="elos-img-escolha"><input
                                                        class=" isExpres  " type="radio" name="elodesejado"
                                                        data-dismiss="modal" id="desafiante" value="desafiante"></div>
                                            </label></div>
                                    </div>
                                    <div class="divisoes ">
                                        <div class="etap pt-4">
                                            <div class="icone-etap">2</div>
                                            <h5>Divisão Atual</h5>
                                        </div>
                                        <div class=" divisoes-escolhas    pl-5"><label class="divisoes-escolhas-body  "
                                                for="IV">
                                                <h3>IV</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="radio" name="divisaoDesejado" id="IV" value="IV">
                                            </label><label class="divisoes-escolhas-body  " for="III">
                                                <h3>III</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="radio" name="divisaoDesejado" id="III" value="III">
                                            </label><label class="divisoes-escolhas-body  " for="II">
                                                <h3>II</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="radio" name="divisaoDesejado" id="II" value="II">
                                            </label><label class="divisoes-escolhas-body  " for="I">
                                                <h3>I</h3><input class="isExpress close" data-dismiss="modal"
                                                    type="radio" name="divisaoDesejado" id="I" value="I">
                                            </label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>