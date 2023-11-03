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
							<a class="active" href="?page=maqolalar/index">Add a maqolala</a>
						</li>
					</ul>
				</div>
				<a href="?page=maqolalar/index" class="btn-download">
					<i class='bx bxs-left-arrow' ></i>
					<span class="text">Back</span>
				</a>
			</div>

			<div class="table-data">
            <form action="" method="post">
                <label for="title">Title:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="title" placeholder="Main News"><br>

                <label for="description" >Description:</label>
                <input type="text" name="description" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Blah blah blah..."><br>

                <label for="img">Upload an image:</label>
                <input type="file" name="img" required><br><br>


                <label for="author" required>Author:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="John Doe" name="author"><br>

                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
		</main>
<?php
if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    // get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_POST['img'];
    $author = $_POST['author'];
    // query
    $sql = "insert into maqolalar(title, description, img, author) values('{$title}', '{$description}','{$img}','{$author}')";
    // seeding
    $r = mysqli_query($connection, $sql);
    // result
    if($r){
        echo "Done!";
    }else{
        echo "Error";
    }


}




?>