<?php 
namespace view;
define(__DIR__,"","/var/www/html/TCC");
?>
<div class="jumbotron rounded-0 p-5 bg-dark row">
      <div class="container border rounded bg-white col-sm-6 p-5">
        <form>
          <h4 class="display-4 text-secondary">Faça seu cadastro
          </h4>
          <div class="form-group row">
            <label for="campo_nome" class="col-sm-2 col-form-label ">Usuario</label>
            <div class="col-sm-10">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-warning border border-warning" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control rounded border border-dark shadow-sm" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" required>
              </div>
            </div>
            
          </div>
          <div class="form-group row">
            <label for="campo_email" class="col-sm-2 col-form-label">Email
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control rounded border border-dark shadow-sm" id="campo_email" placeholder="seu.email@example.com" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="campo_senha" class="col-sm-2 col-form-label">Senha
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control rounded border border-dark shadow-sm" id="campo_senha" placeholder="Insira uma senha" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="campo_conf_senha" class="col-sm-2 col-form-label">Confirmar senha
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control rounded border border-dark shadow-sm" id="campo_conf_senha" placeholder="Confirme sua senha" required>
            </div>
          </div>
          
          <div class="form-group row ">
            <h5 class="text-dark col-2"> Sexo:</h5>
            <div class="col rounded border border-dark shadow-sm">
              
              <div class="form-check form-control-sm">
                <input class="form-check-input rounded border border-dark shadow-sm" type="radio" name="radios" id="radios1" value="feminino" checked>
                <label class="form-check-label" for="radios1">
                  Feminino
                </label>
              </div>
              <div class="form-check form-control-sm">
                <input class="form-check-input rounded border border-dark shadow-sm" type="radio" name="radios" id="radios2" value="masculino">
                <label class="form-check-label" for="radios2">
                  Masculino
                </label>
              </div>
              <div class="form-check form-control-sm">
                <input class="form-check-input rounded border border-dark shadow-sm" type="radio" name="radios" id="radios3" value="outro">
                <label class="form-check-label" for="radios3">
                  Outro
                </label>
              </div>
            </div>
            <div class="form-group col row">
              <div class="col">
                <label for="campo_nasc">Data de nascimento
                </label>
                <input type="date" class="form-control-sm rounded border border-dark shadow-sm" id="campo_nasc" require_once>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check ">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Eu li e aceito os 
                <a href="#">termos de uso
                </a>
              </label>
            </div>
          </div>
          <button class="btn btn-primary bg-warning border border-warning"  type="submit">Cadastrar
          </button>
        </form>
      </div>
    </div>