<?php 
namespace view;

?>

    <div class="row d-flex justify-content-center">
        <div class="col-sm-8">
            <div class="container border my-5 rounded text-center p-5">
                <form style="" action="#" method="post">
                    <h2 class="text-left text-danger">Cadastro de loja</h2>
                    <br>
                    <div class="form-group row">
                        <label for="name_store" class="col-sm-2 col-form-label">Nome da loja</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name_store" placeholder="Nome da loja">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url_store" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="url_store" placeholder="Link para o site oficial da loja">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Enviar</button>
                </form>
            </div>
        </div>
    </div>