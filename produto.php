<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Hello, world!</title>

    <?php 

        $id_produto = $_GET["id_produto"];

    ?>

    <style>
.zoom img {
  max-width: 100%;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.zoom:hover img {
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);

  
}</style>

</head>

<body>
    <nav class=" navbar  navbar-expand-lg navbar-dark bg-primary border-bottom shadow-sm ">
        <div class="container-fluid">
            <div class="d-none d-md-block">
                <a href="Untitled-1.php"> <img class="pt-2" src="img/WLJ.png" width="150px" height="95px"></a>
            </div>

            <form id="busca" class=" m-2 " style="width: 68%;">
                <input class=" form-control me-2" type="search" placeholder="O que você está procurando?" arial
                    arial-label="search">

            </form>


            <div class="align-self end ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse">


                    <ul class="navbar-nav">
                    
                    <?php if(!isset($_SESSION['id']) and (!isset($_SESSION['nome']))){ ?>
                        <li class="nav-item">
                            <a href="login.html" class="m-2 nav-link  text-white"> Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="cadastro.html" class="m-2 nav-link  text-white"> Cadastrar</a>
                        </li>
                        <?php }else{ ?>
                        <li class="nav-item">
                            <a href="informacoes_usuario.php" class="m-2 nav-link  text-white"> Bem vindo <?php echo $_SESSION['nome']; ?></a>
                        </li>
                        <?php } ?>

                        <li class="nav-item"> 
                        <a class="btn btn-primary m-2  nav-link text-white" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                <img src="img/bi_person.png" height="28">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>


  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">WLJ Sports</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
    </div>
    <div class=" offcanvas-body border">
      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path fill-rule="evenodd"
                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg><a href="Untitled-1.php" class="text-reset text-decoration-none"> Inicio</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path
                  d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
          </svg><a href="carrinho.php" class="text-reset text-decoration-none"> Minhas compras</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path
                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
          </svg><a href="favoritos.php" class="text-reset text-decoration-none"> Favoritos </a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
              <path
                  d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
          </svg><a href="" class="text-reset text-decoration-none"> Promoções</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
              <path
                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
              <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
          </svg><a href="cartoes.php" class="text-reset text-decoration-none"> Cartões salvos</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-signpost-split-fill" viewBox="0 0 16 16">
              <path
                  d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5v5z" />
          </svg><a href="informacoes_endereco.php" class="text-reset text-decoration-none"> Endereços</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
              <path
                  d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
          </svg><a href="informacoes_usuario.php" class="text-reset text-decoration-none"> Meus dados</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                  d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
              <path fill-rule="evenodd"
                  d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg><a href="sair.php" class="text-reset text-decoration-none">Sair</a></p>

      <hr>
      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
              <path
                  d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
          </svg><a href="" class="text-reset text-decoration-none"> Trocas e devoluçôes</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path
                  d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
          </svg><a href="" class="text-reset text-decoration-none"> Ajuda</a></p>

      <p class="fs-5 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-braces" viewBox="0 0 16 16">
              <path
                  d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z" />
          </svg><a href="" class="text-reset text-decoration-none"> Sobre WLJ Sports</a></p>

    </div>
  </div>


  <ul class="sticky-top nav nav-pills nav-fill navbar-light bg-light border">
      <li class="nav-item d-none d-md-block">
          <a class="nav-link " aria-current="page" href="Untitled-1.php" tabindex="-1" aria-disabled="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                      d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd"
                      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg><strong>Home</strong></a>
      </li>
      <li class="nav-item d-none d-md-block">
          
          <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-radios-grid" viewBox="0 0 16 16">
              <path d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
            </svg>
          <strong>Categoria</strong></a>
      </li>
      <li class="nav-item d-none d-md-block">
          <a class="nav-link" href="favoritos.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart"
                  viewBox="0 0 16 16">
                  <path
                      d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
              </svg><strong>Lista de desejos</strong></a>
      </li>
      <li class="nav-item d-none d-md-block">
          <a class="nav-link " href="carrinho.php" tabindex="-1" aria-disabled="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3"
                  viewBox="0 0 16 16">
                  <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg><strong>Carrinho</strong> </a>
      </li>

      <li class="nav-item d-inline-block d-md-none">
          <a class="nav-link disabled" aria-current="page" href="#" tabindex="-1" aria-disabled="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                      d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd"
                      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg></a>
      </li>
      <li class="nav-item d-inline-block d-md-none">
          <a class="nav-link text-dark" href="#">

              <a class="nav-link text-dark" href="#"><img id="chuteira-icon" src="img/vans-svgrepo-com.svg" class="bi " width="20" height="20" ></a>
      </li>
      <li class="nav-item d-inline-block d-md-none">
          <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart"
                  viewBox="0 0 16 16">
                  <path
                      d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
              </svg></a>
      </li>
      <li class="nav-item d-inline-block d-md-none">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3"
                  viewBox="0 0 16 16">
                  <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg> </a>
      </li>
  </ul>

    <main>
        <nav aria-label="breadcrumb">
            <ol class="mx-5 mt-2 breadcrumb">
                <li class="breadcrumb-item"><a href="Untitled-1.php">Home</a></li>
                <li class="breadcrumb-item"><a href="categoria.php">Categoria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produto</li>
            </ol>
        </nav>

        <div class="row container-fluid m-1 px-4">
            <div class="position-relative">
                <form method="POST" action="inserir_carrinho.php">
                
                    <div>
                        <input class="invisible" type="text" name="id_produto" id="id_produto" value="<?php echo $id_produto ?>" readonly>
                    <?php 
                        include("listar_um_produto.php");
                        
                        if (!empty($listaItens)) {
                            foreach($listaItens as $linha) { 
                                echo '<div class="zoom"> <p><img height="100%" class="mx-5 my-2 img-thumbnail rounded float-start col-4" width="100%" src="'.$linha['imagem'].'"></p></div>';
                            }
                        }
                        ?>
                       <?php 
                            include("listar_um_produto.php");

                                if (!empty($listaItens)) {
                                    foreach($listaItens as $linha) { 
                            
                                        echo "<h3>".$linha['nome_produto']."</h3>";
                                        if (($linha['categoria'] !=2)  AND ($linha['categoria'] !=3)) {
                                            echo "Campo";
                                        }
                                        if (($linha['categoria'] !=1)  AND ($linha['categoria'] !=3)) {
                                            echo "Futsal";
                                        }
                                        if (($linha['categoria'] !=1)  AND ($linha['categoria'] !=2)) {
                                            echo "Society";
                                        }

                                    }
                                }
                        ?> 

                        <?php   
                            include("listar_um_produto.php");

                                if (!empty($listaItens)) {
                                    foreach($listaItens as $linha) { ?>
                           
                           <h4 class=" text-danger"><?php echo "R$".$linha['preco'].",00";?></h4>
                           <span style="font-size: medium;">  Ou em 2x de</span>  
                           <p class="text-danger pb-1"><?php echo "R$".($linha['preco']/2)." sem juros";?> </p>
                                    <?php
                                    }
                                }
                        ?> 
                        <div class="d-flex " style="max-width: 300px">
                            <div class="form-outline col-2">
                                <h6 class="form-label">Quantidade:</h6>
                                
                                <input id="quantidade" name="quantidade" min="1" value="1" type="number" class="form-control" />
                            </div> 
                        </div>


                        <h6 class="pt-2 position-relative  ">Tamanho: <input type="text" id="tamanho" name="tamanho" class="text-muted" style="border:none; outline:0;" readonly></h6>
                        <div class=" pagination position-relative ">
                            <div class="row position-absolute top-100 ">

                                <button type="button" class="col btn btn-primary page-link" value="38" id="buttonTamanho1" onclick="carInput1()">38</button>
                                <button type="button" class="col btn btn-primary page-link" value="39" id="buttonTamanho2" onclick="carInput2()">39</button>
                                <button type="button" class="col btn btn-primary page-link" value="40" id="buttonTamanho3" onclick="carInput3()">40</button>
                                <button type="button" class="col btn btn-primary page-link" value="41" id="buttonTamanho4" onclick="carInput4()">41</button>
                                <button type="button" class="col btn btn-primary page-link" value="42" id="buttonTamanho5" onclick="carInput5()">42</button>
                                <button type="button" class="col btn btn-primary page-link" value="43" id="buttonTamanho6" onclick="carInput6()">43</button>
                                <button type="button" class="col btn btn-primary page-link" value="44" id="buttonTamanho7" onclick="carInput7()">44</button>
                            </div> 
                    </div>

                    <div class="invisible py-4"></div>
                    <div>
                    <button type="button" class="my-3 btn btn-outline-success col-6">Finalizar compra</button>
                   

                    <button type="submit" class=" btn btn-outline-info col-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg> Adicionar ao carrinho</button>


                    <a href="inserir_favoritos.php?id_produto=<?php echo $linha['id_produto'];?>">
                        <button type="button" action="inserir_carrinho.php" class=" btn btn-outline-info col-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>Adicionar aos favoritos</button>
                    </a>
                 </div>
                    </div>

                   



                
                </form>
            </div>


        </div>

    </main>

    <footer class=" border-top text-muted bg-light">
        <div class="coontainer">
            <div class="row py-3">
                <div class="col-12 col-md-4 text-center text-md-left">
                    &copy; 2022 - WLJ Sports
                </div>
                <div class="col-12 col-md-4 text-center">
                    <a href="#" class="text-decoration-none text dark">Politica de privacidade</a>
                </div>
                <div class="col-12 col-md-4 text-center text-md-right">
                    <a href="#" class="text-decoration-none text dark">administrar</a>
                </div>
            </div>
        </div>

    </footer>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->

    <script>
        function carInput1(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho1").value;
        }
        function carInput2(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho2").value;
        }
        function carInput3(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho3").value;
        }
        function carInput4(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho4").value;
        }
        function carInput5(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho5").value;
        }
        function carInput6(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho6").value;
        }
        function carInput7(){
            document.getElementById("tamanho").value = document.getElementById("buttonTamanho7").value;
        }       
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>

</body>

</html>