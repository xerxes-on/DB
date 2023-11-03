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
            <form action="" method="post">
                <label for="feature_name">Title:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="feature_name" placeholder="High quality"><br>

                <label for="description" >Description:</label>
                <input type="text" name="description" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Blah blah blah..."><br>

                <label for="logo">Upload the logo:</label>
                <input type="file" name="logo" required><br><br>

                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
		</main>
<?php
if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    // get form data
    $name = $_POST['feature_name'];
    $subject = $_POST['description'];
    $img = $_POST['logo'];
    // query
    $sql = "insert into features(feature_name,feature_description, logo) values('{$name}', '{$subject}','{$img}')";
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