<?php
if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    // get form data
    $name = $_POST['name'];
    $occupation = $_POST['occupation'];
    $comment = $_POST['comment'];
    // img handling
    $img_name = $_FILES['img']['name'];
    $img_ext = explode("/",$_FILES['img']['type']);
    

    $uniqueName = uniqid(" ", $img_name) .".". $img_ext[1];
    $img_temp = $_FILES['img']['tmp_name'];
    $img_path = "testimonials/uploads/" . $uniqueName;
 

    move_uploaded_file($img_temp, $img_path);

    // query
    $sql = "insert into testimonials(name, comment, img, occupation) values('{$name}', '{$comment}','{$img_path}','{$occupation}')";
    // seeding
    // result
    $r = mysqli_query($connection, $sql);

    if($r){
        header("location: ?page=testimonials/index");

    }else{
        echo "Error";
    }


}
?>
<main>
			<div class="head-title">
				<div class="left">
					<h1>Testimonials</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="?page=testimonials/index">Add a testimonial</a>
						</li>
					</ul>
				</div>
				<a href="?page=testimonials/index" class="btn-download">
					<i class='bx bxs-left-arrow' ></i>
					<span class="text">Back</span>
				</a>
			</div>

			<div class="table-data">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="name" placeholder="John Doe"><br>

                <label for="occupation" >Occupation:</label>
                <input type="text" name="occupation" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="English Teacher"><br>

                <label for="comment" required>Comment:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Blah blah blah..." name="comment"><br>

                <label for="img">Upload an image:</label>
                <input type="file" name="img" required><br><br>

                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
		</main>
