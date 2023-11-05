<?php
$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");

$sql_query = "SELECT * FROM features";
$sql_query2 = "describe features";
$result2 = mysqli_query($connection,$sql_query2);
$result = mysqli_query($connection, $sql_query);

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
							</tr>
						</thead>
						<tbody>
                            <?php 
                                if($result){
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['feature_id'] . "</td>";
                                        echo "<td>" . $row['feature_name'] . "</td>";
                                        echo "<td>" . $row['feature_description'] . "</td>";
										echo "<td> <img src='./" . $row['logo'] . "'></td>";
										?>
										<td>
										<a href="#"><i class="fa-solid fa-pen-to-square fa-xl" style="color: #1e8c08;"></i></a>
										<a href="#"><i class="fa-solid fa-trash fa-xl" style="color: #c81414;"></i></a>
										</td>
									</tr>
	<?php 
							}
	}
	?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->