<?php
if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $socials = $_POST['socials'];
    $status = $_POST['status'];
    // img handling
    $img_name = $_FILES['img']['name'];
    $img_ext = explode("/",$_FILES['img']['type']);
    

    $uniqueName = uniqid(" ", $img_name) .".". $img_ext[1];
    $img_temp = $_FILES['img']['tmp_name'];
    $img_path = "teachers/uploads/" . $uniqueName;
 

    move_uploaded_file($img_temp, $img_path);

    // query
    $sql = "INSERT INTO teachers (name, subject,status, img, socials) VALUES ('{$name}', '{$subject}','{$status}', '{$img_path}', '{$socials}')";

    // result
    $r = mysqli_query($connection, $sql);

    if($r){
        header("location: ?page=teachers/index");
    }else{
        echo "Error";
    }
}
?>
<main>
			<div class="head-title">
				<div class="left">
					<h1>Teachers</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="?page=teachers/index">Add a teacher</a>
						</li>
					</ul>
				</div>
				<a href="?page=teachers/index" class="btn-download">
					<i class='bx bxs-left-arrow' ></i>
					<span class="text">Back</span>
				</a>
			</div>

			<div class="table-data">
            <form action="" method="post" enctype="multipart/form-data" >
                <label for="name">Name:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="name" placeholder="John Doe"><br>

                <label for="subject" >Subject:</label>
                <input type="text" name="subject" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Math, Science.."><br>


                <label for="status" >Status:</label>
                <input type="number" name="status" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="1 0"><br>


                <label for="email" required>E-mail:</label>
                <input type="email"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="example@web.com" name="socials"><br>

                <label for="img">Upload an image:</label>
                <input type="file" name="img" required><br><br>
                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
</main>

