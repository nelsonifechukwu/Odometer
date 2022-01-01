	<?php

	//GET ALL RECORDS (FILTER BY TODAY,THIS WEEK,THIS MONTH, SPECIFIC DATE) DEFAULT IS TODAY
		//GET MAXIMUM RECORDS (FILTER BY TODAY,THIS WEEK,THIS MONTH) DEFAULT IS TODAY

	require_once('connections/connections.php');

global $where_clause;

			if(isset($_GET['date'])){

				switch($_GET['date']){

					case 'today': {

						$where_clause = "WHERE `created_at` = date('Y-m-d')";
						break;
					}


					case 'last_week': {
						
						$where_clause = "WHERE YEARWEEK(`created_at`, 1) = YEARWEEK( CURDATE() - INTERVAL 1 WEEK, 1)";
						break;
					}


					case 'last_7_days': {
						
						$where_clause = "WHERE created_at >= DATE_SUB(DATE(NOW()), INTERVAL 7 DAY)";
						break;
					}

					case 'last_month': {
						
						$where_clause = "WHERE MONTH(created_at) = ( MONTH(NOW()) - 1 ) ";
						break;
					}

					case 'last_3_months': {
						
						$where_clause = "WHERE created_at >= DATE(NOW()) - INTERVAL 3 MONTH - last 3 months";
						break;
					}		


					case 'last_year': {
						
						$where_clause = "WHERE YEAR(created_at) = YEAR(NOW() - INTERVAL 1 YEAR)";
						break;
					}

					default: {

						$date = strip_tags(mysqli_real_escape_string($con, $_GET['date']));
						$where_clause = "WHERE `created_at` = $date";

					}

				}


			}else{
				$date = date('Y-m-d');
				$where_clause = "WHERE DATE(`created_at`) = '$date'";
			}

			$records = "SELECT * FROM `distance_conditions` ". $where_clause . " ORDER BY `id` DESC";

			$get_records = mysqli_query($con, $records);

			if($get_records){

				while($param = mysqli_fetch_assoc($get_records)){ ?>

				<p> <?php echo $param['distance']; ?> </p>
			
			
				<p> <?php echo $param['created_at']; ?> </p>

				<?php

		}
	}else{
		echo $where_clause ."<br><br>";
		echo mysqli_error($con);
	}


?>