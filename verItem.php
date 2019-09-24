<?php 
namespace view;

$cores = ["#ff0000","#0d00ff","#1aff00","#ff00dd","#ff7300"];
$database = 
    [
        ["legenda"=>"Preço 1",
        "data"=>[
            120, 
            190, 
            30, 
            50, 
            20, 
            30]
        ],
        ["legenda"=>"Preço 2",
        "data"=>[
            20, 
            90, 
            60, 
            30, 
            120, 
            50]
        ],
        ["legenda"=>"Preço 3",
        "data"=>[
            10, 
            20, 
            40, 
            30, 
            20, 
            90]
        ]
    ]


?>
<div class="jumbotron rounded-0 bg-white orange-text text-center pt-5 justify-content-md-center px-5">
        <div class=" p-1">
            <p class="text-left mt-2 ml-2"><a href="#">Categoria</a>><a href="#">Categoria</a>><a href="#">Categoria</a></p>
        </div>
        <div class="row">
        <div class="col-sm-4">
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                        alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg"
                        alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
            </div>
            <div class="col text-left pt-4">
                <h4 class="orange-text font-weight-bolder">Nome do produto</h4>

                <div class="row">
                    <div class="col">
                        <text class="text-dark">A apartir de:</text>
                        <h4 class="text-orange"><a class="orange-text" href="#">R$2000,00</a></h4>
                        <p class="text-dark">Ou 10x R$200,00</p>
                        <div class="mt-5 btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-deep-orange">🖤 Favoritar</button>
                    </div>
                </div>
                    
                   
                </div>

            </div>
            <div class="col-sm-4 pt-3">
                <a href="#" class="badge badge-warning w-75  badge-pill"><h5>Tag</h5></a> 
                <hr>
                <p><p class="text-truncate d-block">Aqui vai uma breve descrição do produto e etc e tal lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at arcu tempor, malesuada leo at, lacinia odio. Etiam sit amet ante quis mi rutrum pretium ut ut quam.</p><a href="#">Ver mais</a></p>
                <p class="orange-text">Veja a <a href="#ficha">ficha técnica</a> desse produto</p>
            </div>
        </div>
        <hr>
        <div class="col-md-auto">
                <h5 class="orange-text font-weight-bolder">Histórico resumido dos preços</h5>
                <p class="text-muted"><small>Veja como o preço desse produto mudou</small></p>
        </div>
        <div class="w-100 row">
            <div class="ml-5 container row w-100 border-bottom">
                <div class="col-6">
                    <div class="float-left">
                        <img class="mt-5" src="https://i.zst.com.br/thumbs/8/32/30/821671752.jpg">
                        <img class="mt-5" src="https://i.zst.com.br/thumbs/46/2f/2c/46282021.jpg">
                    </div>
                    <text class="float-left mt-5 ml-5">
                        <text class="text-dark">A apartir de:</text>
                        <h4 class="text-orange"><a class="orange-text" href="#">R$2000,00</a></h4>
                        <p class="text-dark">Ou 10x R$200,00</p>
                    </text>
                </div>
                <div class="col-4">
                    <figure class="float-left mt-2 figure">
                        <canvas id="preco1"></canvas>
                    </figure>
                </div>
                <div class="col-2">
                    <a class=" btn mt-5 p-2 rounded amber">Ir para a loja</a>
                </div>
                <script>
                    getData();

                    async function getData(){
                        var ctx = document.getElementById('preco1');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ["janeiro","fevereiro","março","abril","maio","junho"],
                                datasets: [
                                    {
                                    label: "item 1",
                                    data: [120, 190, 30, 50, 20, 30],
                                    borderColor: "<?php $numero=rand(0,4);echo $cores[$numero] ?>",
                                    backgroundColor: "<?php $numero=rand(0,4);echo $cores[$numero] ?>",
                                    borderWidth: 1,
                                    fill: false
                                }]
                            },
                            
                            options: {
                                tooltips:{
                                    mode:"index",
                                    intersect:false
                                },
                                responsive: true,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });           
                    }
                    
                </script>
            </div>
            
        </div>
        <div class=" row">
            <div class="ml-5 container row w-100 border-bottom">
                <div class="col-6">
                    <div class="float-left">
                        <img class="mt-5" src="https://i.zst.com.br/thumbs/8/32/30/821671752.jpg">
                        <img class="mt-5" src="https://i.zst.com.br/thumbs/46/2f/2c/46282021.jpg">
                    </div>
                    <text class="float-left mt-5 ml-5">
                        <text class="text-dark">A apartir de:</text>
                        <h4 class="text-orange"><a class="orange-text" href="#">R$2000,00</a></h4>
                        <p class="text-dark">Ou 10x R$200,00</p>
                    </text>
                </div>
                <div class="col-4">
                    <figure class="float-left mt-2 figure">
                        <canvas id="preco2"></canvas>
                    </figure>
                </div>
                <div class="col-2">
                    <a class=" btn mt-5 p-2 rounded amber">Ir para a loja</a>
                </div>
                <script>
                    getData();

                    async function getData(){
                        var ctx = document.getElementById('preco2');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ["janeiro","fevereiro","março","abril","maio","junho"],
                                datasets: [
                                    {
                                    label: "item 1",
                                    data: [120, 190, 30, 50, 20, 30],
                                    borderColor: "<?php $numero=rand(0,4);echo $cores[$numero] ?>",
                                    backgroundColor: "<?php $numero=rand(0,4);echo $cores[$numero] ?>",
                                    borderWidth: 1,
                                    fill: false
                                }]
                            },
                            
                            options: {
                                tooltips:{
                                    mode:"index",
                                    intersect:false
                                },
                                responsive: true,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });           
                    }
                    
                </script>
            </div>
            
        </div>
        <div class=" row">
            <div class="ml-5 container row w-100 border-bottom">
                <div class="col-6">
                    <div class="float-left">
                        <img class="mt-5" src="https://i.zst.com.br/thumbs/8/32/30/821671752.jpg">
                        <img class="mt-5" src="https://i.zst.com.br/thumbs/46/2f/2c/46282021.jpg">
                    </div>
                    <text class="float-left mt-5 ml-5">
                        <text class="text-dark">A apartir de:</text>
                        <h4 class="text-orange"><a class="orange-text" href="#">R$2000,00</a></h4>
                        <p class="text-dark">Ou 10x R$200,00</p>
                    </text>
                </div>
                <div class="col-4">
                    <figure class="float-left mt-2 figure">
                        <canvas id="preco3"></canvas>
                    </figure>
                </div>
                <div class="col-2">
                    <a class=" btn mt-5 p-2 rounded amber">Ir para a loja</a>
                </div>
                <script>
                    getData();

                    async function getData(){
                        var ctx = document.getElementById('preco3');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ["janeiro","fevereiro","março","abril","maio","junho"],
                                datasets: [
                                    {
                                    label: "item 1",
                                    data: [120, 190, 30, 50, 20, 30],
                                    borderColor: "<?php $numero=rand(0,4);echo $cores[$numero] ?>",
                                    backgroundColor: "<?php $numero=rand(0,4);echo $cores[$numero] ?>",
                                    borderWidth: 1,
                                    fill: false
                                }]
                            },
                            
                            options: {
                                tooltips:{
                                    mode:"index",
                                    intersect:false
                                },
                                responsive: true,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });           
                    }
                    
                </script>
            </div>
            
        </div>
    </div>



    <div id="ficha" class="ml-3 mr-3 jumbotron rounded-0 bg-white orange-text  pt-5  px-5">
        <h4 class="text-center justify-content-md-center">Ficha Técnica:</h4>
        <div class="">
        <table class="" style="height:20%; width:100%">
            <tr class="">
                <th class="border-right"><text class="p-3">Name:</text></th>
                <td class=""><text class="p-3">Bill Gates</text></td>
            </tr>
            <tr class="amber lighten-4 ">
                <th class="border-right"><text class="p-3">Telephone:</text></th>
                <td class=""><text class="p-3">555 77 854</text></td>
            </tr>
            <tr class="">
                <th class="border-right"><text class="p-3">Telephone:</text></th>
                <td class=""><text class="p-3">555 77 855</text></td>
            </tr>
        
        </table>
        </div>
    </div>
    <div class="ml-3 mr-3 jumbotron rounded-0 bg-white orange-text  pt-5  px-5">
        <figure class="w-100 figure">
            <canvas id="myChart"></canvas>
        </figure>
    </div>
    <script>
        getData();

        async function getData(){
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode(["janeiro","fevereiro","março","abril","maio","junho"]);##Serão sempre os nomes dos ultimos 6 meses ?>,
                    datasets: [
                    <?php 
                    $conter = 0;
                    foreach($database as $key => $item){ 
                        $conter++;
                        ?>
                        {
                        label: <?php echo json_encode($item["legenda"]); ?>,
                        data: <?php echo json_encode($item["data"]); ?>,
                        
                        borderColor: "<?php 
                        shuffle($cores);
                        $element = array_pop($cores);    
                        echo $element;
                        
                        ?>",
                        backgroundColor: "<?php
                        echo $element
                        
                        ?>",
                        borderWidth: 1,
                        fill: false
                    }<?php if(sizeof($database)!=$conter)echo ",";
                    } ?>]
                },
                
                options: {
                    tooltips:{
                        mode:"index",
                        intersect:false
                    },
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });           
        }
        
        </script>
    <div class="ml-5 mr-5 jumbotron rounded-0 bg-white orange-text  pt-5  px-5">
    <form id="someform">
        <div class="input-group">
            <textarea placeholder="Post your Comment Here ..." name="post" class="form-control custom-control" rows="3" style="resize:none"></textarea> 
        </div>
        <div>
        <span class="">                                            
            <button type="submit" name="post_comment" class="btn btn-orange">
                Post
            </button>
        </span>
        </div>
    </form>


	<div class="card w-100">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col w-25">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center">15 Minutes Ago</p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
        	       </p>
        	       <div class="clearfix"></div>
                   <div class="ml-4 mt-3">
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	      </div>
        	    </div>
	        </div>
            </div>
        
    
    </div>

    