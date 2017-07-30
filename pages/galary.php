
	<div class="container">
<div class='row'>
			<?php


				include('connection.php');
				$results_per_page=9;

				if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				$start_from = ($page-1) * $results_per_page;
				$sql = "SELECT * FROM images ORDER BY ID ASC LIMIT $start_from, ".$results_per_page;


				$query = mysqli_query($conn,$sql);

				while ($row = mysqli_fetch_assoc($query)) {


				echo  	 "
     					 <div class='col-lg-4 col-sm-6'>
        <div class='thumbnail'><a><img src='".$row['img']."' style='height:250px;width:100%;'></a>

		<p>" .$row['disc'] ."</p>
		<p>".$row['title']."</p>        </div>
      </div>
      ";




			$sql = "SELECT COUNT(img) AS total FROM images";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$total_pages = ceil($row["total"] / $results_per_page);


				}


				for ($i=1; $i<=$total_pages; $i++) {
				    echo "<a href='http://localhost/cess/#!/galary/".$i."'>".$i."</a> ";
				};







			 ?>



	</div>
</div>
