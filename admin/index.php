<?php
session_start();

if(isset($_SESSION["login"])){
    header("location:./main/index.php");
}
// db
$connection = mysqli_connect('localhost','root','root','Jajjiprofessor') or die('Failed to connect to DB');
$query = "SELECT * FROM admin";
$result = mysqli_query($connection, $query);
$data = [];
if($result){
    while($row = $result->fetch_assoc()) {
        $data[] = $row; 
      }
  }
    if (isset($_POST['s1'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $c = 0;
        foreach($data as $user ){
            if($user["username"] == $username && $user["pass"] == $password){
                $_SESSION["login"] =true;
                header("Location: ./main/index.php");
              exit();
            }
            $c++;
        }
        if($c = count($users) ){
            ?>
            <p style="color: red;">Invalid Log in details try again!</p>
            <?php
        }
    }
?>
<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>AdminHub Login</title>
      <link rel="stylesheet" href="./main/assets/stylelogin.css">
    </head>
    <body>
        <section class="container">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">
                    <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                    <h1 class="opacity">LOGIN</h1>
                    <form method="post">
                        <input type="text" name="username" placeholder="USERNAME" />
                        <input type="password" name="password"  placeholder="PASSWORD" />
                        <input type="submit" name="s1"style="font-weight:300;" value="Log in">
                    </form>
                </div>
                <div class="circle circle-two"></div>
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </body>
    </html>


