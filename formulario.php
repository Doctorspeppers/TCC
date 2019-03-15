<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Form
    </title>
  </head>
  <body>
    <div class="container-fluid p-5 bg-dark row">
      <form class="col-sm-6">
        <div class="form-group row">
          <label for="campo_nome" class="col-sm-2 col-form-label">Nome
          </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="campo_nome" placeholder="Insira um nome de usuário">
          </div>
          <small class="col-sm-6 col-form-text">Seu nome de usuário deve ser único!
          </small>
        </div>
        <div class="form-group row">
          <label for="campo_email" class="col-sm-2 col-form-label">Email
          </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="campo_email" placeholder="seu.email@email.com">
          </div>
        </div>
        <div class="form-group row">
          <label for="campo_senha" class="col-sm-2 col-form-label">Senha
          </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="campo_senha" placeholder="Insira uma senha">
          </div>
        </div>
        <div class="form-group row">
          <label for="campo_conf_senha" class="col-sm-2 col-form-label">Confirmar senha
          </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="campo_conf_senha" placeholder="Confirme sua senha">
          </div>
        </div>
        <div class="form-group row">
          <div class="col">
            <div class="form-check form-control-sm">
              <input class="form-check-input" type="radio" name="radios" id="radios1" value="feminino" checked>
              <label class="form-check-label" for="radios1">
                Feminino
              </label>
            </div>
            <div class="form-check form-control-sm">
              <input class="form-check-input" type="radio" name="radios" id="radios2" value="masculino">
              <label class="form-check-label" for="radios2">
                Masculino
              </label>
            </div>
            <div class="form-check form-control-sm">
              <input class="form-check-input" type="radio" name="radios" id="radios3" value="outro">
              <label class="form-check-label" for="radios3">
                Outro
              </label>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <select class="custom-select custom-select-sm">
                <option selected>Dia</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <select class="custom-select custom-select-sm">
                <option selected>Mês</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <select class="custom-select custom-select-sm">
                <option selected>Ano</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
