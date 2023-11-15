<?php

$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");
$id = $_GET['id'];
$sql_query = "SELECT * FROM sinflar where id = '$id' ";
$sql_query2 = "describe sinflar";
$result2 = mysqli_query($connection,$sql_query2);
$result = mysqli_query($connection, $sql_query);
$table = "sinflar";
// var_dump($column = mysqli_fetch_assoc($result));


?>   
<main>
			<div class="head-title">
				<div class="left">
                    <h1>Classes</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Classes</a>
						</li>
					</ul>
				</div>
				<a href="?page=classes/index" class="btn-download">
					<i class='bx bxs-left-arrow' ></i>
					<span class="text">Back</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
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
                                        echo "<td>" . $row['group_name'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['ages'] . "</td>";
                                        echo "<td>" . $row['capacity'] . "</td>";
                                        echo "<td>" . $row['price'] ." sum" . "</td>";
                                        echo "<td>" . $row['time'] . "</td>";
                                        echo "<td> <img src='./" . $row['img'] . "'></td></tr>";
	
							}
	}
	?>
						</tbody>
					</table>
				</div>
			</div>
		</main>