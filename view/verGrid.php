<?php 
namespace view;
if(isset($_GET["pagination"])==False){
    $_GET["pagination"] = 1;
}
?>




            <form class="form-group row d-flex justify-content-center ">
                <div class="input-group md-form form-sm col-md-6 form-2 pl-0">
                    <input class="border border-warning rounded form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <span class="input-group-text border-warning orange lighten-3" id="basic-text1"><img class="" style="width:15px" src="https://cdn.iconscout.com/icon/free/png-256/magnifier-search-find-glass-magnify-30520.png"></span>                    </div>
                </div>
            </form>

<?php for(){ ?>
<div class="container pt-5 pb-5">
  <div class="row">
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
              <h5 class="amber-text"><i class="fas fa-utensils"></i> Culinary</h5>
              <!--Title-->
              <h4 class="card-title">Cheat day inspirations</h4>
              <!--Text-->
              <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                  aliquid ex ea commodi.</p>
                  <a class="float-left btn btn-deep-orange btn-unique waves-effect waves-light">Acessar</a>
            <h4 class="amber-text ml-5 p-3 float-left"">$1200,0</h4>
          </div>
          <!--/.Card content-->
      </div>
    </div>
    <div class="col-sm">
      <div class="card card-cascade narrower">
          <!--Card image-->
          <div class="view view-cascade">
              <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.NRUfyrW8TCA0qmUxOpLtmAHaEX%26pid%3DApi&f=1" class="z-depth-3 rounded card-img-top" alt="photo">
              <a>
                  <div class="mask img-gradient"></div>
              </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
              <h5 class="amber-text"><i class="fas fa-utensils"></i> Culinary</h5>
              <!--Title-->
              <h4 class="card-title">Cheat day inspirations</h4>
              <!--Text-->
              <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                  aliquid ex ea commodi.</p>
                  <a class="float-left btn btn-deep-orange btn-unique waves-effect waves-light">Acessar</a>
                    <h4 class="amber-text ml-5 p-3 float-left"">$1200,0</h4>
          </div>
          <!--/.Card content-->
        </div>
    </div>
    <div class="col-sm">
      <div class="card card-cascade narrower">
        <!--Card image-->
        <div class="view view-cascade">
            <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.NRUfyrW8TCA0qmUxOpLtmAHaEX%26pid%3DApi&f=1" class="z-depth-3 rounded card-img-top" alt="photo">
            <a>
                <div class="mask img-gradient"></div>
            </a>
        </div>
        <!--/.Card image-->

        <!--Card content-->
        <div class="card-body card-body-cascade">
            <h5 class="amber-text"><i class="fas fa-utensils"></i> Culinary</h5>
            <!--Title-->
            <h4 class="card-title">Cheat day inspirations</h4>
            <!--Text-->
            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                aliquid ex ea commodi.</p>
            <a class="float-left btn btn-deep-orange btn-unique waves-effect waves-light">Acessar</a>
            <h4 class="amber-text ml-5 p-3 float-left"">$1200,0</h4>
        </div>
        <!--/.Card content-->
        </div>
        </div>
        </div>
    </div>

    </div>
    <?php }?>
    <div class="p-4 text-center justify-content-md-center">
    <nav aria-label="Page text-center justify-content-md-center navigation example">
        <ul class="pagination text-center justify-content-md-center pg-blue">
            <li class="page-item">
                <a href="search.php?pagination=<?php  if($_GET["pagination"]-1==0){print($_GET["pagination"]);}else{print($_GET["pagination"]-1);} ?> "  class="page-link">Previous</a>
            </li>
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
            <li class="page-item <?php 
            if($_GET["pagination"]-2 != -1){
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
            <li class="page-item"><a href="search.php?pagination=<?php  if($_GET["pagination"]-2 == -1){print($_GET["pagination"]+2);}else{ print($_GET["pagination"]+1); }?>" class="page-link">            <?php 
            if($_GET["pagination"]-2 == -1){
                 print($_GET["pagination"]+2);
            }else{ 
                print($_GET["pagination"]+1); 
            } ?></a></li>
            <li class="page-item">
                <a href="search.php?pagination=<?php echo $_GET["pagination"]+1; ?> " class="page-link">Next</a>
            </li>
        </ul>
    </nav>
    </div>

</div>