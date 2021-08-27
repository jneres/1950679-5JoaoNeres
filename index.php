<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Candy Peak</title>

    <meta name="author" content="João Neres">
    <meta name="description" content="Curso de Front-end">
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo-peak">Candy Peak</h1>
            <nav>
                <ul id="main-menu">
                    <li><a href="?pages=home" title="Home" class="active">Home</a></li>
                    <li><a href="?pages=produtos" title="Produtos">Produtos</a></li>
                    <li><a href="?pages=quemsomos" title="Quem Somos">Quem Somos</a></li>
                    <li><a href="?pages=contato" title="Contato">Contato</a></li>
                </ul>
                <ul class="share">
                    <li><a href="#" title="Facebook"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></span></i><span class="hide">Facebook</span></a></li>
                    <li><a href="#" title="Twitter"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span><span class="hide">Twitter</span></a></li>
                    <li><a href="#" title="Instagram"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span><span class="hide">Instagram</span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
       <?php include_once ("function/dinamico.php") ?>
    </main>

    <footer>
        <div class="container">
            <div class="share-footer pull-left">
                <p>Compartilhe:</p>
                <nav>
                    <ul>
                        <li><a href="#" title="Facebook"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></span></i><span class="hide">Facebook</span></a></li>
                        <li><a href="#" title="Twitter"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span><span class="hide">Twitter</span></a></li>
                        <li><a href="#" title="Instagram"><span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span><span class="hide">Instagram</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-menu pull-right">
                <nav>
                    <ul>
                        <li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="A Empresa">A Empresa</a></li>
                        <li><a href="#" title="Clientes">Clientes</a></li>
                        <li><a href="#" title="Contato">Contato</a></li>
                    </ul>
                </nav>
                <p>2021 João Antônio Neres da Silva - RA: 1950679-5</p>
            </div>
        </div>
    </footer>
</body>
</html>
