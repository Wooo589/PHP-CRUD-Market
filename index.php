<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Alimentos</title>
    <style>

    body {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    @media all and (max-width: 71.875em) {

    .table-responsiveness{
    	display:block;
      overflow-x: auto;
      white-space: nowrap;    
    }

    .search-bar {
      padding: 1.6rem 0;
    }
    
	}
</style>
  </head>
  <body>
    <div class="overflow-auto">
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand text-secondary fs-2 p-4" href="index.php"><i class="fas fa-shopping-cart">Alimentos</i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item  p-4">
                <a class="nav-link" aria-current="page" href="index.php">Início</a>
              </li>            
              <li class="nav-item  p-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="?page=listar-produto"><i class="fas fa-list"></i> Listar</a></li>
                  <li><a class="dropdown-item" href="?page=cadastrar-produto"><i class="fas fa-pen"></i> Cadastrar</a></li>
                </ul>
              </li>
              <li class="nav-item  p-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nutricionais
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="?page=listar-nutricional"><i class="fas fa-list"></i> Listar</a></li>
                  <li><a class="dropdown-item" href="?page=cadastrar-nutricional"><i class="fas fa-pen"></i> Cadastrar</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <?php
              //arquivo que conecta no banco de dados
              include('config.php');
              //chama as paginas individuais
              switch(@$_REQUEST["page"]){       
                //nutricional
                case "listar-nutricional":
                  include("pages/listar-nutricional.php");
                break;
                case "cadastrar-nutricional":
                  include("pages/cadastrar-nutricional.php");
                break;
                case "editar-nutricional":
                  include("pages/editar-nutricional.php");
                break;
                case "salvar-nutricional":
                  include("pages/salvar-nutricional.php");
                break;
                //produto
                case "listar-produto":
                  include("pages/listar-produto.php");
                break;
                case "cadastrar-produto":
                  include("pages/cadastrar-produto.php");
                break;
                case "editar-produto":
                  include("pages/editar-produto.php");
                break;
                case "salvar-produto":
                  include("pages/salvar-produto.php");
                break;
                default:
                  include("pages/main.php");
              }
            ?>
          </div>
        </div>
      </div>
      <div class="m-4"></div>
      <div class="container-fluid bg-warning text-dark p-5">
        <div class="row row-cols-2">
          <div class="col-6 text-center p-3">
            <h5 class="text-uppercase mb-4 font-weight-bold">Sobre</h5>
            <p>
              <a href="#" class="text-decoration-none text-dark"><i class="fas fa-network-wired"></i> Produtos</a>
            </p>
            <p>
              <a href="#"  class="text-decoration-none text-dark"><i class="fas fa-handshake"></i> Parceiros</a>
            </p>
            <p>
              <a href="#"  class="text-decoration-none text-dark"><i class="fas fa-headset"></i> Suporte Técnico</a> 
            </p>     
          </div>
          <div class="col-6 text-center p-3">
            <h5 class="text-uppercase mb-4 font-weight-bold">Informações</h5>
            <p><i class="fas fa-home"></i> Brasília-DF</p>
            <p><i class="fas fa-mobile-alt"></i> AA NNNN-NNNN</p>
            <p><i class="far fa-envelope"></i> nome@dominio.com</p>  
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center p-3">
              <p class="text-uppercase mb-3 font-weight-bold text-align-center h5">Siga-nos nas redes sociais</p>
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item p-2 fs-3">
                    <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                  </li>            
                  <li class="list-inline-item p-2 fs-3">
                    <a href="#" class="text-dark"><i class="fab fa-github"></i></a>
                  </li>
                  <li class="list-inline-item p-2 fs-3">
                    <a href="#" class="text-dark"><i class="fab fa-whatsapp"></i></a>
                  </li>
                  <li class="list-inline-item p-2 fs-3">
                    <a href="#" class="text-dark"><i class="fab fa-telegram"></i></a>   
                  </li>
                </ul>                        
            </div>
          </div>
        <hr class="mb-4">
        <div class="row">
          <div class="col">
            <div class="text-center">&copy; 2021 - <span class="text-secondary">Wooo589</span></div>
          </div>    
        </div>
      </div>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>