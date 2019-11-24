<!DOCTYPE HTML>
<html lang="pt-br">
<meta charset="UTF-8">
<html>

<head>

    <title>Creative S.A.</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="./styles.css" rel="stylesheet">
    <!-- Bootstrap 4.0 Beta -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha256-m/h/cUDAhf6/iBRixTbuc8+Rg2cIETQtPcH9D3p2Kg0=" crossorigin="anonymous" />
    <!-- open-iconic-bootstrap (icon set for bootstrap) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
</head>

<body class="is-preload">

    <nav id="nav">
        <ul class="container">
            <li><a href="#top">Creative S.A.</a></li>
            <li><a href="#work">Login</a></li>
            <li><a href="#portfolio">Trabalhos Realizados</a></li>
            <li><a href="#contact">Cadastre-se</a></li>
            <li><a href="index.php">Sair</a></li>
        </ul>
    </nav>

    <!-- Home -->
    <article id="top" class="wrapper style1">
        <div class="container">
            <div class="row">
                <div class="col-4 col-5-large col-12-medium">
                    <span class="image fit"><img src="images/creative.jpg" alt="" /></span>
                </div>
                <div class="col-8 col-7-large col-12-medium">
                    <header>
                        <h1>Oi!! Você está logado!<strong><p>Creative S.A.</p></strong></h1>
                    </header>

                </div>
            </div>
        </div>
        <?php 
        require 'config.php';
        require 'classes/usuarios.class.php';

        ?>
        <?php
        $usuario = new Usuarios();

        if(isset($_GET['id']) && !empty($_GET['id'])) {
          $usuario->apagar($_GET['id']);
      }

      $resposta = $usuario->getUsuarios();

      ?>

      <div class="container">
        <div class="row">

            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Rua </th>
                  <th scope="col">Bairro</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Email</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach($resposta as $usuario): ?>

                <tr>
                  <td><?php echo $usuario['nome']; ?></td>
                  <td><?php echo $usuario['rua']; ?></td>
                  <td><?php echo $usuario['bairro']; ?></td>
                  <td><?php echo $usuario['telefone']; ?></td>
                  <td><?php echo $usuario['email']; ?></td>
                  <td>
                    <button type="button" class="btn btn-info"><a href="editar.php?id=<?php echo $usuario['id'];?>">Editar</a></button>
                    <button type="button" class="btn btn-danger"><a href="logado.php?id=<?php echo $usuario['id'];?>">Excluir</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>

</article>

<!--envio de e-mail-->
<article id="contact" class="wrapper style4">
    <div class="container medium">
        <header>
            <h2>Estamos felizes em ter você como nosso novo cliente.</h2>

        </header>
        <hr />
        <h3>Visite</h3>
        <ul class="social">
            <li><a href="https://twitter.com/login?lang=pt" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        </ul>
        <hr />
    </div>
<div>
<footer>
    <ul id="copyright">
        <li>&copy; Untitled. All rights reserved.</li>
        <li>Design: <a href="http://html5up.net"></a></li>
    </ul>
</footer>
</div>
</article>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>
