<?php 
namespace view;
include __DIR__."/../controller/produtos.php";
$prods = new \Classe\Item("/../../config/items.ini");
if(isset($_GET["search"])){
    $all = $prods->searchItem($_GET);
    $count=0;
    $pag = [];
    $counter = 1;
    if($all != false){
        for ($i=0; $i < sizeof($all) ; $i++) { 
            $pag[] = $all[$i];
            if($count>8){
                $_SESSION["pag"][$counter] = $pag;
                $counter++;
                $pag = [];
                $count = 0;
            }
        $count++;
        if($pag != []){
            $_SESSION["pag"][$counter] = $pag;
            $pag = [];
        }
}   }
}else{
    $all = $prods->showAllItems();
    $count=0;
    $pag = [];
    $counter = 1;
    for ($i=0; $i < sizeof($all) ; $i++) { 
        $pag[] = $all[$i];
        if($count>8){
            $_SESSION["pag"][$counter] = $pag;
            $counter++;
            $pag = [];
            $count = 0;
        }
        $count++;
    }
    if($pag != []){
        $_SESSION["pag"][$counter] = $pag;
        $pag = [];
    }
    
}
if(isset($_GET["pagination"])==False){
    $_GET["pagination"] = 1;
}
$error = False;

?>




            <form action="search.php" method="get"  class="form-group row d-flex justify-content-center" style="max-width: 100%;">
                <div class="input-group md-form form-sm col-md-6 form-2">
                    <input name="search" class="border border-warning rounded form-control form-control-lg py-1" type="text" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button type="submit" class="input-group-text border-warning orange lighten-3" id="basic-text1"><img class="" style="width:15px" src="https://cdn.iconscout.com/icon/free/png-256/magnifier-search-find-glass-magnify-30520.png"></button>                    </div>
                </div>
            </form>

<?php 

if($all != false){
$verdadeiro = True;
for($a=0;$a < 3; $a++){
?>
<div class="container  pb-5">
    <div class="row">
<?php 
for ($i=0; $i < 3; $i++){ 
    
        
    $item = array_pop($_SESSION["pag"][$_GET["pagination"]]);
    
   
    if ($item != Null) {
    
    ?>
    <div class="col-sm-4 ">
      <div class="card  card-cascade narrower">
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
              <h5 class="amber-text"><i class="fas fa-utensils"></i><?php echo $item["nameCategory"] ?></h5>
              <!--Title-->
              <h4 class="card-title"><?php echo $item["nameItem"] ?></h4>
              <!--Text-->
              <p class="card-text"><?php echo $item["descItem"] ?></p>
                  <a href="item.php?idItem=<?php echo $item['idItem'] ?>" class="float-left btn btn-deep-orange btn-unique waves-effect waves-light">Acessar</a>
            <h4 class="amber-text ml-5 p-3 float-left""><?php echo "$".$item["MIN(`valuePrice`)"] ?></h4>
          </div>
          <!--/.Card content-->
      </div>
    </div>
    
    <?php }
    }
?>

    </div>
    </div>

<?php    
if($item == Null){
    break;
}    
}

}else{
    ?>
    
    <div class="m-4 rounded-pill amber text-center lighten-1">
        <h5 class="m-3 grey-darken-4 pt-4 p-2"><?php echo "Sua pesquisa não corresponde a nenhum resultado" ?></h5>
    </div>
    
     <?php
}
    ?>
    
    <div class="p-4 text-center justify-content-md-center">
    <nav aria-label="Page text-center justify-content-md-center navigation example">
        <ul class="pagination text-center justify-content-md-center pg-blue">
        <?php if($_GET["pagination"] == 1){?>
            <li class="page-item">
                <a href="search.php?pagination=<?php  if($_GET["pagination"]-1==0){
                    print($_GET["pagination"]);
                    }else{
                        print($_GET["pagination"]-1);
                    } ?> "  class="page-link">Previous</a>
            </li>
                <?php } ?>
            <li class="page-item <?php 
            if($_GET["pagination"]-2 == -1){
                 print("rounded amber");
            }?>"><a href="search.php?pagination=<?php if($_GET["pagination"]-1 != 0){print($_GET["pagination"]-1);}else{print($_GET["pagination"]);}  ?>" class="page-link">
            <?php 
            if($_GET["pagination"]-1 != 0){
                 print($_GET["pagination"]-1);
            }else{ 
                print($_GET["pagination"]."<span class='sr-only'> (current)</span>"); 
            } ?></a></li>


        <?php  if(sizeof($_SESSION["pag"]) > $_GET["pagination"]+1){?>
            <li class="page-item <?php 
            if($_GET["pagination"]-2 != -1) {
                 print("rounded amber");
            }?>">
            <a href="search.php?pagination=<?php if($_GET["pagination"]-2 != 0){print($_GET["pagination"]+1);}else{ print($_GET["pagination"]);} ?>" class="page-link">
            <?php 
            if($_GET["pagination"]-2 == -1){
                 print($_GET["pagination"]+1);
            }else{ 
                print($_GET["pagination"]); 
            } ?>
            </a>
            </li>
        <?php } 
        
        
        
        
        
        if(sizeof($_SESSION["pag"]) > $_GET["pagination"]+2){
        ?>
            
            
            
            <li class="page-item"><a href="search.php?pagination=<?php  if($_GET["pagination"]-2 == -1){

                print($_GET["pagination"]+2);
            }else{ 
                print($_GET["pagination"]+1); 
            }?>" class="page-link">            <?php 
            if($_GET["pagination"]-2 == -1){
                 print($_GET["pagination"]+2);
            }else{ 
                print($_GET["pagination"]+1); 
            } ?></a></li>
            <?php } 
            if(sizeof($_SESSION["pag"]) > $_GET["pagination"]+1){
            ?>
            <li class="page-item">
                <a href="search.php?pagination=<?php echo $_GET["pagination"]+1; ?> " class="page-link">Next</a>
            </li>
            <?php }?>
        </ul>
    </nav>
    </div>

</div>