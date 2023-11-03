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
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " name="name" placeholder="John Doe"><br>

                <label for="subject" >Subject:</label>
                <input type="text" name="subject" class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="Math, Science.."><br>

                <label for="email" required>E-mail:</label>
                <input type="email"class="block w-full rounded-md border-0 py-1.5  ring-1 ring-inset ring-gray-300 focus:ring-2 " placeholder="example@web.com" name="socials"><br>

                <label for="img">Upload an image:</label>
                <input type="file" name="img" required><br><br>
                <input type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 leading-6 text-white hover:bg-indigo-500  " value="Send" name="submit">
            </form>
			</div>
</main>
<?php
if(isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','root', 'Jajjiprofessor') or die('Db not connected');

    // get form data
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $socials = $_POST['socials'];
    $img = $_POST['img'];
    // query
    $sql = "insert into teachers(name, subject, img, socials) values('{$name}', '{$subject}','{$img}','{$socials}')";
    // seeding
    // result
    $r = mysqli_query($connection, $sql);

    if($r){
        echo '<h1> Successfully added </h1>';
        // header("location: index.php?page=teachers/index");
    }else{
        echo "Error";
    }


}
?>