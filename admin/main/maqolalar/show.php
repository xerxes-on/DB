<?php
$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
$id = $_GET['id'];

$sql_query = "SELECT * FROM maqolalar WHERE id = '$id'";
$sql_query2 = "describe maqolalar";
$result2 = mysqli_query($connection,$sql_query2);
$result = mysqli_query($connection, $sql_query);
$table = "maqolalar";
// var_dump($column = mysqli_fetch_assoc($result));
?>        
        
        <!-- MAIN -->
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
							<a class="active" href="#">Maqolalar</a>
						</li>
					</ul>
				</div>
				<a href="?page=maqolalar/create" class="btn-download">
					<i class='bx bxs-plus-circle' ></i>
					<span class="text">Add a maqola</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Maqolalar</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <?php 
                                if($result2){
                                    while ($column = mysqli_fetch_assoc($result2)) {
                                        echo "<th style='font-size: 20px;'>" . $column['Field'] . "</th>";
                                    }
                                }
                                ?>
								<th></th>
							</tr>
						</thead>
						<tbody>
                            <?php 
                                if($result){
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td> <img src='./" . $row['img'] . "'></td>";
                                        echo "<td>" . $row['author'] . "</td>";
										echo "</tr>";
							}
	}
	?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->