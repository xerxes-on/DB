<?php 
    $connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
    $result_teachers = mysqli_query($connection, "SELECT * FROM teachers WHERE status = 0");
    $res_maqola = mysqli_query($connection, "SELECT * FROM maqolalar");
    $res_class = mysqli_query($connection, "SELECT * FROM sinflar");
    $res_testimonial = mysqli_query($connection, "SELECT * FROM testimonials");
    $features = mysqli_query($connection, "SELECT * FROM features");


?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Shavkat Mirziyoyev:</h4>
                <h1 class="display-3 font-weight-bold text-white">"Maktabgacha ta'lim sohasida zamonaviy tizim yaratish muhim vazifamizdir"</h1>
                <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p> -->
                <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="assets/img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->
    


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">


                <?php
                if($features){
                    while($row = mysqli_fetch_assoc($features)){
                        echo'<div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <img class="rounded-circle" src="./admin/main/' .$row['logo'] .'" style="width: 70px; height: 70px;" alt="Image">
                            <div class="pl-4">
                                <h4>'.$row['feature_name'].'</h4>
                                <p class="m-0">'.$row['feature_description'].'</p>
                            </div>
                        </div>
                    </div>';
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="assets/img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">So'nggi maqola</span></p>
                    <h1 class="mb-4">Farzandlaringiz uchun eng yaxshi maktab</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning sinflar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun gruhni tanlang</h1>
            </div>
            <div class="row">

                <?php
                if($res_class){
                    $counter=0;
                    while((($row = mysqli_fetch_assoc($res_class))&&($counter!= 3))){
                        echo'<div class="col-lg-4 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="./admin/main/' .$row['img'] .'" alt="">
                            <div class="card-body text-center">
                                <h4 class="card-title">Group ' .$row['group_name'] .'</h4>
                                <p class="card-text">' .$row['description'] .'</p>
                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Bolalar yoshi</strong></div>
                                    <div class="col-6 py-1">' .$row['ages'] .' yosh</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Jami orindiqlar</strong></div>
                                    <div class="col-6 py-1">' .$row['capacity'] .' orindiq</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Dars vaqti</strong></div>
                                    <div class="col-6 py-1">' .$row['time'] .'</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right"><strong>Oylik tolov</strong></div>
                                    <div class="col-6 py-1">' .$row['price'] .' / Oy</div>
                                </div>
                            </div>
                            <a href="tel:+998996111300" class="btn btn-primary px-4 mx-auto mb-4">Hoziroq qoshil</a>
                        </div>
                    </div>';
                    $counter++;
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">O'rindiqni buyurtma qiling</span></p>
                    <h1 class="mb-4">Bolangiz uchun joyni buyurtma qiling</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                    <!-- <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a> -->
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">O'rindiqni buyurtma qiling</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form method="post" >
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Ismingiz" name="name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control border-0 p-4" placeholder="Telefon raqamingiz" name="mobile" required="required" />
                                </div>
                                <div class="form-group">
                                    <select name="group" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Sinfni tanlang</option>
                                        <option value="Bugirsoq">Group Bugirsoq</option>
                                        <option value="Alpomish">Group Alpomish</option>
                                        <option value="Profesor">Group Profesor</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-secondary btn-block border-0 py-3"  name="s1" value="Yuborish">
                                </div>
                            </form>
                            <!-- form handling -->
                            <?php if(isset($_POST['s1'])){
                                $name = $_POST['name'];
                                $mobile = $_POST['mobile'];
                                $group = $_POST['group'];
                            $result_message = mysqli_query($connection,"INSERT INTO messages(name, mobileNumber,groupName) VALUES ('{$name}', '{$mobile}', '{$group}')");
                            if($result_message){
                                echo '
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                <script>
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        title: "Successfully Sent",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                </script>';
                            }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>
            <div class="row">

                <?php    
                    if($result_teachers){
                        $count = 0;
                        while(($row = mysqli_fetch_assoc($result_teachers)) && ($count!=4)){
                            echo '                <div class="col-md-6 col-lg-3 text-center team mb-5">
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
                            <i>'. $row['subject'] .' o"qituvchisi</i>
                        </div>';
                        $count++;
                        }
                        
                    }
                
                
                ?>
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
                    $counter=0;
                    while(($row = mysqli_fetch_assoc($res_maqola))&& $counter!=3){
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
                    $counter++;
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->


