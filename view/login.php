<!doctype html>
<html lang="en">
  <?php
    $nomeDaPagina = "login";
    include "header.php";
  ?>
  <body>
    
    
    
    <div class="jumbotron rounded-0 p-5 bg-dark row">
      <div class="container border rounded bg-white col-sm-6 p-5">
        <form>
          <h4 class="display-4 text-secondary">Bem vindo de volta
          </h4>
          <h5 class="display-5 text-dark">Faça seu login
          </h5>
          <div class="form-group row">
            <label for="campo_email" class="col-sm-2 col-form-label">E-mail
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="campo_email" placeholder="Insira seu e-mail">
            </div>
          </div>
          <div class="form-group row">
            <label for="campo_senha" class="col-sm-2 col-form-label">Senha
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="campo_senha" placeholder="Insira sua senha">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Permanescer logado
              </label>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Logar
          </button>
        </form>
      </div>
    </div>
    </body>
        <!-- RODAPE -->
    <?php
        include "footer.php"
    ?>
</html>
