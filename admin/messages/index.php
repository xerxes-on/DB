<?php
$connection = mysqli_connect("localhost","root","root", "Jajjiprofessor") or die("Couldn't connect to DB");

$sql_query = "SELECT * FROM messages";
$sql_query2 = "describe messages";
$result2 = mysqli_query($connection,$sql_query2);
$result = mysqli_query($connection, $sql_query);

// var_dump($column = mysqli_fetch_assoc($result));
?>        
        
        <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
                    <h1>Messages</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Messages</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Messages</h3>
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
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['groupName'] . "</td>";
                                        echo "<td>" . $row['mobileNumber'] . "</td>";
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