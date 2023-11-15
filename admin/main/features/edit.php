<?php
    $id = $_GET['id'];
    $connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
    $sql_query = "SELECT * FROM features WHERE id = '$id'";
    $result = mysqli_query($connection, $sql_query);
    $row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    // get form data
    $name = $_POST['feature_name'];
    $subject = $_POST['description'];
    // img handling
    $img_name = $_FILES['logo']['name'];
    $img_ext = explode("/",$_FILES['logo']['type']);
    

    $uniqueName = uniqid(" ", $img_name) .".". $img_ext[1];
    $img_temp = $_FILES['logo']['tmp_name'];
    $img_path = "features/uploads/" . $uniqueName;
 

    move_uploaded_file($img_temp, $img_path);

    // query
    $sql = "UPDATE features SET feature_name = '{$name}', feature_description = '{$subject}', logo = '{$img_path}' WHERE id = '{$id}'";

    // seeding
    $r = mysqli_query($connection, $sql);
    // result
    if($r){
        header("location: ?page=features/index");
    }else{
        echo "Error";
    }

}




?>
<main>
			<div class="head-title">
				<div class="left">
					<h1>Features</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="?page=features/index">Add a feature</a>
						</li>
					</ul>
				</div>
				<a href="?page=features/index" class="btn-download">
					<i class='bx bxs-left-arrow' ></i>
					<span class="text">Back</span>
				</a>
			</div>

			<div class="table-data">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="feature_name">Title:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="feature_name" value="<?php echo $row['feature_name']?>"><br>

                <label for="description" >Description:</label>
                <input type="text" name="description" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " value="<?php echo $row['feature_description']?>"><br>

                <label for="logo">Upload the logo:</label>
                <input type="file" name="logo" required><br><br>

                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
		</main>
