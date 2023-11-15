<?php
$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");

$sql_query = "SELECT * FROM features";
$sql_query2 = "describe features";
$result2 = mysqli_query($connection,$sql_query2);
$result = mysqli_query($connection, $sql_query);
$table = "features";
// var_dump($column = mysqli_fetch_assoc($result));
?>        
        
        <!-- MAIN -->
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
							<a class="active" href="#">Features</a>
						</li>
					</ul>
				</div>
				<a href="?page=features/create" class="btn-download">
					<i class='bx bxs-plus-circle' ></i>
					<span class="text">Add a feature</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Features</h3>
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
                                        echo "<td>" . $row['feature_name'] . "</td>";
                                        echo "<td>" . $row['feature_description'] . "</td>";
										echo "<td> <img src='./" . $row['logo'] . "'></td>";
										echo "<td><a href='?page=features/show&id=". $row['id'] ."'><i class='fa-solid fa-eye fa-xl' style='color: #366ece;'></i></a>
										 <a href='?page=features/edit&id=". $row['id'] ."'><i class='fa-solid fa-pen-to-square fa-xl' style='color: #1e8c08;'></i></a>
										<a href='./delete.php?id=" . $row['id'] . "&table=" .$table. "&page=features'><i class='fa-solid fa-trash fa-xl' style='color: #c81414;'></i></a></td></tr>";
							}
	}
	?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->