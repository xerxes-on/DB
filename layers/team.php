<?php 
    $connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
    // teachers
$sql_query = "SELECT * FROM teachers WHERE status=0";
$sql_query1 = "SELECT * FROM teachers WHERE status=1";
$res_testimonial = mysqli_query($connection, "SELECT * FROM testimonials");
$result1 = mysqli_query($connection, $sql_query1);
$result = mysqli_query($connection, $sql_query);

?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bizning o'qituvchilarimiz</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">Bosh sahifa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">O'qituvchilar</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


     <!-- Team Start -->
     <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
            </div>
            <div class="row">
            <?php    
                    if($result1){
                        while($row = mysqli_fetch_assoc($result1)){
                            echo ' <div class="col-md-6 col-lg-3 text-center team mb-5">
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                                <img class="img-fluid w-100" src="./admin/main/'. $row['img'] .'" alt="" >
                                <div
                                    class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                        href="#"><i class="fab fa-telegram"></i></a>
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                        href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                        href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <h4>' . $row['name'] . '</h4>
                            <i>'. $row['subject'] .' o' . "'" .'qituvchisi</i>
                            </div>';
                            }
                        
                    }    
                ?>
            </div>
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>
            <div class="row">

            <?php    
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            echo ' <div class="col-md-6 col-lg-3 text-center team mb-5">
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                                <img class="img-fluid w-100" src="./admin/main/'. $row['img'] .'" alt="" >
                                <div
                                    class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                        href="#"><i class="fab fa-telegram"></i></a>
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                        href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                        href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <h4>' . $row['name'] . '</h4>
                            <i>'. $row['subject'] .' o' . "'" .'qituvchisi</i>
                            </div>';
                            }
                        
                    }    
                ?>
            </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Minnatdorchilik</span></p>
                <h1 class="mb-4">Ota-onalar nima deyishadi!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <?php
                if($res_testimonial){
                    while($row = mysqli_fetch_assoc($res_testimonial)){
                        echo'<div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            '.$row['comment'].'
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="./admin/main/' .$row['img'] .'" style="width: 70px; height: 70px;" alt="Image">
                            <div class="pl-3">
                                <h5>'.$row['name'].'</h5>
                                <i>'.$row['occupation'].'</i>
                            </div>
                        </div>
                    </div>';
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
