<?php 
namespace view;

?>

    <div class="row d-flex justify-content-center">
        <div class="col-sm-8">
            <div class="container border my-5 rounded text-center p-5">
                <form style="" action="#" method="post" enctype="multipart/form-data">
                    <h2 class="text-left text-danger">Cadastro de item</h2>
                    <br>
                    <div class="form-group row">
                        <label for="title_item" class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title_item" placeholder="Título do item">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc_item" class="col-sm-2 col-form-label">Descrição</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="desc_item" placeholder="Descrição do item..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_item" class="col-sm-2 col-form-label">Categoria</label>
                        <div class="col-sm-10">
                            <select name="category_item" class="form-control">
                                <option selected="">Selecione..</option>
                                <option>Opção 1</option>
                                <option>Opção 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Envio de fotos</label>
                        <div class="col-sm-10">
                          <input type="file" name="photo" accept="image/*">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Enviar</button>
                </form>
            </div>
        </div>
    </div>