<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Language" content="pt-br, en" />
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <?php

    include_once('navbar.php');

    ?>

    <div class="container margin-menu">
        <h1>Cadastrar Produtos</h1>
        <form action="register.php" method="post" class="needs-validation" novalidate>
            <div class="row py-2">
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                  <i class="itens bi bi-pencil-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"                    aria-describedby="inputGroupPrepend" required placeholder="Nome" />
                </div>
              </div>
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-house-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="Fornecedor" />
                </div>
                
              </div>
            </div>
            <div class="row py-2">
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-piggy-bank-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"                    aria-describedby="inputGroupPrepend" required placeholder="Custo" />
                </div>
              </div>
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-cash"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="Valor" />
                </div>
              </div>
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-bag-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"                    aria-describedby="inputGroupPrepend" required placeholder="Estoque" />
                </div>
              </div>
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-bag-dash-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="Estoque mínimo" />
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-bag-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"                    aria-describedby="inputGroupPrepend" required placeholder="Estoque" />
                </div>
              </div>
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-bag-dash-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="Estoque mínimo" />
                </div>
              </div>
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-lock-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required placeholder="Senha" />
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">
                    <i class="itens bi bi-chat-square-text-fill"></i>
                  </span>
                  <input type="text" class="form-control" id="validationCustomUsername"                    aria-describedby="inputGroupPrepend" placeholder="Observação (opcional)" />
                </div>
              </div>
            </div>
              <div class="row py-3">
                  <div class="col">
                    <a href="#">
                      <input type="button" class="btn btn-outline-primary" value="Recuperar senha" />
                    </a>
                  </div>
                  <div class="col">
                    <input type="submit" class="btn btn-primary rigth" value="Entrar" />
                  </div>
              </div>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>