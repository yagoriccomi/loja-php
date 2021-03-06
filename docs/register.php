<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Language" content="pt-br, en" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/register.css" />
  </head>

  <body>
    <div class="container py-5">
      <div class="row py-5">
        <div class="col"></div>
        <div class="col-auto py-5">
          <div class="box">
            <div class="padding">
              <h1 class="title">CADASTRAR</h1>
              <form
                action="register.php"
                method="post"
                class="needs-validation"
                novalidate
              >
                <div class="col-lg insertion">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        fill="currentColor"
                        class="bi bi-person-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                        />
                      </svg>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      id="validationCustomUsername"
                      aria-describedby="inputGroupPrepend"
                      required
                      placeholder="Usu??rio"
                    />
                  </div>
                  <div class="input-group has-validation py-3">
                    <span class="input-group-text" id="inputGroupPrepend">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        fill="currentColor"
                        class="bi bi-lock-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"
                        />
                      </svg>
                    </span>
                    <input
                      type="password"
                      class="form-control"
                      id="validationCustomUsername"
                      aria-describedby="inputGroupPrepend"
                      required
                      placeholder="Senha"
                    />
                  </div>
                  <div class="row">
                    <div class="col">
                      <a href="#">
                        <input
                          type="button"
                          class="btn btn-outline-primary"
                          value="Listar"
                        />
                      </a>
                    </div>
                    <div class="col">
                      <input
                        type="submit"
                        class="btn btn-primary rigth"
                        value="Cadastrar"
                      />
                    </div>
                  </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>
