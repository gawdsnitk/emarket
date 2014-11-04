<?php
				$productid=$_GET['productid'];
				$query=$_GET['query'];


					$con=mysqli_connect("localhost","gawdsin_gawdsin","KckZ6ZJ?38wm","gawdsin_emarket");
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$result=mysqli_query($con,"SELECT $query FROM productinfo WHERE productid='$productid'");
					$count=mysqli_fetch_array($result);
					//print_r($count);
					echo $count["$query"];


?>