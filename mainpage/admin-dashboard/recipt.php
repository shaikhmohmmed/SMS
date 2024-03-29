<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php')
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Maintance bill</title>
        <!-- <style>
            
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
        </style> -->

	</head>

	<body>

		<h1>SOCIETY MANAGEMENT SYSTEM</h1>
		<h3>It is Bill of Maintance of Society. </h3>

		

		<?php
        if(isset($_SESSION['status'])){
          echo "<h4>".$_SESSION['status']."</h4>";
          unset($_SESSION['status']);
        }
      ?>
		<table id="example1" class="table table-bordered table-striped">

		<form action="">
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="images/logo.jpg" alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>

								<?php
                // Assuming you have already established a database connection

                // Make sure $conn is your mysqli connection variable
                $query = "SELECT * FROM invoice"; // Replace "your_table" with your actual table name

                // Perform the query using mysqli_query with the connection object and SQL query
                $query_run = mysqli_query($conn, $query);

                // Check if the query was successful
                if ($query_run) {
                    // Check if any rows w	ere returned
                    if(mysqli_num_rows($query_run) > 0) {
                        // Fetch each row and display the 'name' field
                        while($row = mysqli_fetch_assoc($query_run)) {
                            ?>

								<td>
									Maintance Bill No.: <?php echo $row['id']?><br />
									Created: January <?php  echo $row['date']?><br />
									Due: <?php echo $row['lastdate'] ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
								<?php echo $row['name'];  ?><br />
								<?php echo $row['flatnumber'];  ?><br />
								<?php echo $row['buildnumber'];  ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				

				<tr class="heading">
					<td>For</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>Maintance bill</td>

					<td><?php echo $row['fee'];  ?></td>
				</tr>

				<tr class="item">
					<td>Late Fees Penlty</td>

					<td><?php echo $row['latefee'];  ?></td>
				</tr>


				<tr class="total">
					<td></td>

					<td>Total: <?php echo $row['total'];  ?></td>
				</tr>
			</table>
			<?php
                        }
                    } else {
                        // If no rows were returned, display a message
                ?>
                    <tr>
                        <td>No Record Found</td>
                    </tr>
                <?php
                    }
                } else {
                    // If the query failed, handle the error here
                    echo "Error executing query: " . mysqli_error($conn);
                }
                ?>
		</div>
		</form>
	</body>
</html>

