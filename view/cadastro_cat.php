<?php 
namespace view;

?>

<div class="row d-flex justify-content-center">
        <div class="col-sm-8">
            <div class="container border my-5 rounded text-center p-5">
                <form style="" action="#" method="post">
                    <h2 class="text-left text-danger">Cadastro de categoria</h2>
                    <br>
                    <div class="form-group row">
                        <label for="name_cat" class="col-sm-2 col-form-label">Nome da categoria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name_cat" placeholder="Por exemplo: carro, elétrodoméstico, celular...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc_cat" class="col-sm-2 col-form-label">Curta descrição</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="desc_cat" placeholder="Escreva uma breve descrição">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Enviar</button>
                </form>
            </div>
        </div>
    </div>