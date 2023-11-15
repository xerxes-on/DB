<?php
$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");

$sql_query = "SELECT * FROM complaints";
$sql_query2 = "describe complaints";
$result2 = mysqli_query($connection,$sql_query2);
$result = mysqli_query($connection, $sql_query);
$table = "complaints";
// var_dump($column = mysqli_fetch_assoc($result));
?>        
        
        <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
                    <h1>Complaints</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Complaints</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Complaints</h3>
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
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . substr($row['complaint'], 0, 35) . "</td>";
										echo "<td><a href='?page=testimonials/show&id=". $row['id'] ."'><i class='fa-solid fa-eye fa-xl' style='color: #366ece;'></i></a>
									   <a href='./delete.php?id=" . $row['id'] . "&table=" .$table. "&page=testimonials'><i class='fa-solid fa-trash fa-xl' style='color: #c81414;'></i></a></td></tr>";

							}
							}
	?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->