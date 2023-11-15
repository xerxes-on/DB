<?php 
    $connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
$res_class = mysqli_query($connection, "SELECT * FROM sinflar");

    ?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bizning sinflarimiz</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">Bosh sahifa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Sinflar</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Ommabop darslar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun darslar</h1>
            </div>
            <div class="row">

            <?php
                if($res_class){
                    while($row = mysqli_fetch_assoc($res_class)){
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


