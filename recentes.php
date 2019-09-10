<?php 
namespace view;

?>
<?php  
include "model/class/produtos.php";
$item = new \Classe\Item("\..\..\config\items.ini");
$array = $item->showAllItems();
?>
<!-- NOTICIAS -->
<div class="p-4 bg-white  px-5">

<div class="container pt-5 pb-5">
  <div class="row">
  <?php for($a=0;$a < 3;$a++){ ?>
    <div class="col-sm">
      <div class="card card-cascade narrower">
          <!--Card image-->
          <div class="view view-cascade">
              <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.NRUfyrW8TCA0qmUxOpLtmAHaEX%26pid%3DApi&f=1" class=" z-depth-3 rounded card-img-top " alt="photo">
              <a>
                  <div class="mask img-gradient"></div>
              </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
              <h5 class="amber-text"><i class="fas fa-utensils"></i><?php echo $array[$a]["nameCategory"]; ?></h5>
              <!--Title-->
              <h4 class="card-title"><?php echo $array[$a]["nameItem"]; ?></h4>
              <!--Text-->
              <p class="card-text"><?php echo $array[$a]["descItem"]; ?></p>
                  <a class="float-left btn btn-deep-orange btn-unique waves-effect waves-light">Acessar</a>
            <h4 class="amber-text ml-5 p-3 float-left"><?php echo "R$".$array[$a]["MIN(`valuePrice`)"]; ?></h4>
          </div>
          <!--/.Card content-->
      </div>
    </div>
    
<?php } ?>
</div>

            <div class="w-100 my-2 "></div>
            <div class="col text-center justify-content-md-center">
              <a href="grid.php"><button type="button" class="btn btn-lg btn-yellow font-weight-bolder rounded-pill text-uppercase">Mostrar mais</button></a>
            </div>
        </div>
    </div>