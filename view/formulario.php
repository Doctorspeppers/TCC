<!doctype html>
<html lang="en">

  <body>
   
    
    <div class="jumbotron rounded-0 p-5 bg-dark row">
      <div class="container border rounded bg-white col-sm-6 p-5">
        <form>
          <h4 class="display-4 text-secondary">Faça seu cadastro
          </h4>
          <div class="form-group row">
            <label for="campo_nome" class="col-sm-2 col-form-label">Nome
            </label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="campo_nome" placeholder="Insira um nome de usuário">
            </div>
            <small class="col-sm-4 col-form-text">Seu nome de usuário deve ser único!
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
            <div class="form-group col row">
              <div class="col">
                <label for="campo_nasc">Data de nascimento
                </label>
                <input type="date" class="form-control-sm" id="campo_nasc">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Eu li e aceito os 
                <a href="#">termos de uso
                </a>
              </label>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Cadastrar
          </button>
        </form>
      </div>
    </div>
    </body>
 
</html>
