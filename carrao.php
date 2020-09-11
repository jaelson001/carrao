<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrão</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="container-fluid bg-red banner" id="banner">
        <div class="row justify-content-end">
            <a href="http://centralsupermercado.com.br" target="_self">
                <img class="mig-flex" id="logo" src="img/logo.png" alt="Logo"></img>
            </a>
            <a href="#produtos" class="btn_down"></a>
        </div>
    </section>
    <section class="container-fluid bg-blue" id="produtos">
        <div class="container">
            <div class="row justify-content-center row-title text-uppercase"> 
                <h2 class="title lazy h1">Para validar seu cupom, seu carrinho deve ter:</h2>
            </div>
            <div class="row row-title">
                <div class="col-md-3 col-sm-6 col-xs-6 text-uppercase unidade lazy">
                    <img class="img-fluid" src="img/chocolatto.png">
                    <span class="texto-unidades">1 Unidade</span>         
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 text-uppercase unidade lazy">
                    <img class="img-fluid" src="img/cafe.png">
                    <span class="texto-unidades">1 Unidade</span>         
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-uppercase unidades lazy">
                    <img class="img-fluid" src="img/frisco.png">
                    <span class="texto-unidades">10 Unidades</span>         
                </div>
            </div>
            <div class="row lazy">
                <h3 class="h2 text-center  text-uppercase text-transparent">
                    PARA CONCORRER A UM CARRO 0KM, SUAS COMPRAS DEVEM SOMAR MAIS R$50,00 
                    E INCLUIR TODOS OS PRODUTOS ACIMA LISTADOS
                </h3>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-red">
        <div class="container">
            <div class="row row-title text-uppercase"> 
                <h2 class="title lazy h1">Nossas Lojas:</h2>
            </div>
            <div class="row lazy">
                <div class="col-md-3 img-local">
                    <img class="img-fluid" src="img/local.png" alt="Locais"></img>
                </div>
                <div class="col-md-8 content-local">
                    <div class="row row-local">
                        <h3 class="text-uppercase h3 text-transparent">Alhandra</h3>
                        <span class="h4 text-transparent text-uppercase">Rua presidente jão pessoa, 04, centro, 58320-000</span>
                    </div>
                    <div class="row row-local">
                        <h3 class="text-uppercase h3 text-transparent">Alhandra</h3>
                        <span class="h4 text-transparent text-uppercase">Rua presidente jão pessoa, 04, centro, 58320-000</span>
                    </div>
                    <div class="row row-local">
                        <h3 class="text-uppercase h3 text-transparent">Alhandra</h3>
                        <span class="h4 text-transparent text-uppercase">Rua presidente jão pessoa, 04, centro, 58320-000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-blue">
        <div class="container">
            <div class="row row-title text-uppercase justify-content-center"> 
                <h2 class="title lazy h1">Regulamento</h2>
            </div>
            <div class="row lazy">
                <h3 class="text-uppercase h3 text-transparent text-justify row-regulamento-texto">A cada R$ 50,00 em compras em qualquer loja do Grupo Central Supermercado você ganha um cupom para concorrer a um carro 0KM e vários outros prêmios desde que na somatória final da compra tenha pelo menos 10 unidades de refresco Frisco 25g mais um café tradicio</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 justify-content-center row-regulamento-btn">
                    <a href="#nada" class="btn text-uppercase btn-regulamento">Regulamento completo</a>
                </div> 
            </div>
        </div>
    </section>
    <div class="container-fluid bg-red social">
        <div class="container">
            <div class="row row-title text-uppercase"> 
                <h2 class="title lazy h1">Central nas redes sociais</h2>
            </div>
            <div class="row justify-content-center lazy">
                <div class="col-md-8 col-sm-12 mt-2">
                    <div class="row align-items-center">
                        <div class="col-md-2 mr-md-3 mb-xs-3 col-xs-6 text-center">
                            <a href="#"><img class="img-fluid" src="img/insta.png" /></a>
                        </div>
                        <div class="col-md-2 mr-md-3 mb-xs-3 col-xs-6 text-center">
                            <a href="#"><img class="img-fluid" src="img/face.png" /></a>
                        </div>
                        <div class="col-md-2 mr-md-3 mb-xs-3 col-xs-6 text-center">
                            <a href="#"><img class="img-fluid" src="img/link.png" /></a>
                        </div>
                        <div class="col-md-2 mr-md-3 mb-xs-3 col-xs-6 text-center">
                            <a href="#"><img class="img-fluid" src="img/you.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img id="smartphone" class="lazy" src="img/smart.png">
    </div>
    <div class="footer justify-content-center">
        <span><a href="https://exodo.cf/">Exodo</a> | 2020</span>
    </div>
</body>
    <link rel="stylesheet" type="text/css" href="css/carrao.css">
    <script type="text/javascript" src="js/lazy-loading.js"></script>
    <script type="text/javascript">
        document.addEventListener('scroll', function(){
            var topo = document.documentElement.scrollTop;
            document.getElementById("banner").style.backgroundPosition = "center "+topo/2+"px";
        });
    </script>
</html>

