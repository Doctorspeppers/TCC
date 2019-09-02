<?php 
namespace view;


?>

 

      <div class="container border  mt-5 mb-5 col-5 jumbotron  rounded  text-center p-5">
        <form name="formulario" action="controller/user.php?command=newUser" method="post">
          <h4 class="display-4 deep-orange-text">Faça seu cadastro
          </h4>
          <div class="form-group row">
            <label for="nameUser" class="col-sm-2 col-form-label ">Usuario</label>
            <div class="col-sm-10">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-warning border border-light shadow-sm btn-orange" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control rounded border border-light shadow-sm" name="nameUser" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" required>
              </div>
            </div>
            
          </div>
          <div class="form-group row">
            <label for="emailUser" class="col-sm-2 col-form-label">Email
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control rounded border border-light shadow-sm" name="emailUser" id="campo_email" placeholder="seu.email@example.com" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="passwordUser" class="col-sm-2 col-form-label">Senha
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control rounded border border-light shadow-sm" name="passwordUser" id="campo_senha" placeholder="Insira uma senha" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="passwordUser" class="col-sm-2 col-form-label">Confirmar senha
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control rounded border border-light shadow-sm" id="campo_conf_senha" placeholder="Confirme sua senha" required>
            </div>
          </div>
          <div class="form-group">
            <h5 class="grey-text col-form-label ">Selecione seu genero:</h5>
            <div class="btn-group" data-toggle="buttons">
              <label class="label btn m-3 pl-4 rounded-lg btn-amber form-check-label">
                <input class="input form-check-input" type="radio" name="genero" id="option1" autocomplete="off">
                Masculino
                </label>
              <label class="label btn m-3 pl-4 rounded-lg btn-amber form-check-label">
                <input class=" input form-check-input" type="radio" name="genero" id="option2" autocomplete="off"> Feminino
              </label>
              <label class="label btn m-3 pl-4 rounded-lg btn-amber form-check-label">
                <input class="input form-check-input" type="radio" name="genero" id="option3" autocomplete="off"> Outro
              </label>
            </div>
          </div>
          <div class="form-group">
          
            <div class="form-group">
              <label for="birthDateUser">Data de nascimento
              </label>
              <input type="date" name="birthDateUser" class="form-control-sm rounded border border-light shadow-sm" id="campo_nasc" require_once>
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
          <button class="btn btn-primary rounded-pill  btn-orange"  type="submit">Cadastrar
          </button>
        </form>
      </div>

