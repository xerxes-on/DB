<?php 
    $connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
$res_maqola = mysqli_query($connection, "SELECT * FROM maqolalar");
?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bizning maqolalarimiz</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">Bosh sahifa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Maqolalar</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bog'cha hayoti</span></p>
                <h1 class="mb-4">So'nggi maqolalar</h1>
            </div>
            <div class="row pb-3">

                <?php
                if($res_maqola){
                    while($row = mysqli_fetch_assoc($res_maqola)){
                        echo'<div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="./admin/main/' .$row['img'] .'" alt="">
                            <div class="card-body bg-light text-center p-4">
                                <h4 class="">'.$row['title'].'</h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> '.$row['author'].'</small>
                                </div>
                                <p>'.$row['description'].'</p>
                                <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
                            </div>
                        </div>
                    </div>';
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->

