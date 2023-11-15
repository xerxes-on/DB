<?php
    $id = $_GET['id'];
    $connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
    $sql_query = "SELECT * FROM maqolalar WHERE id = '$id'";
    $result = mysqli_query($connection, $sql_query);
    $row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    // get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    // img handling
    $img_name = $_FILES['img']['name'];
    $img_ext = explode("/",$_FILES['img']['type']);
    
 
    $uniqueName = uniqid(" ", $img_name) .".". $img_ext[1];
    $img_temp = $_FILES['img']['tmp_name'];
    $img_path = "maqolalar/uploads/" . $uniqueName;
 

    move_uploaded_file($img_temp, $img_path);

    // query
    $sql = "UPDATE maqolalar SET title = '{$title}', description = '{$description}', img = '{$img_path}', author = '{$author}' WHERE id = '{$id}'";

    // seeding
    $r = mysqli_query($connection, $sql);
    // result
    if($r){
        header("location: ?page=maqolalar/index");

    }else{
        echo "Error";
    }


}




?>
<main>
			<div class="head-title">
				<div class="left">
					<h1>Maqolalar</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="?page=maqolalar/index">Add a maqola</a>
						</li>
					</ul>
				</div>
				<a href="?page=maqolalar/index" class="btn-download">
					<i class='bx bxs-left-arrow' ></i>
					<span class="text">Back</span>
				</a>
			</div>

			<div class="table-data">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="title" value="<?php echo $row['title']?>"><br>

                <label for="description" >Description:</label>
                <input type="text" name="description" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " value="<?php echo $row['description']?>"><br>

                <label for="img">Upload an image:</label>
                <input type="file" name="img" required><br><br>


                <label for="author" required>Author:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="author" value="<?php echo $row['author']?>"><br>

                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
		</main>
