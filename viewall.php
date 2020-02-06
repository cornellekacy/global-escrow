<?php include 'header.php'; ?>
			<!--Header End-->
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>All Escrow In The System</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="wt-active">All Escrow In The System</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
			<div class="container">
	<div class="row">
		<div class="col-md-1">
			
		</div>
		<div class="col-md-10">
			  <table class="table table-striped">
    <thead>
      <tr>
        <th>Transaction #</th>
        <th>Amount</th>
        <th>Secret Code</th>
        <th>Completion Time</th>
        <th>Tracking Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                 <?php
                                    include 'conn.php';
// Check connection
                                    if (!$link) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT * FROM escrow";
                                    $result = mysqli_query($link, $sql);

                                    if (mysqli_num_rows($result) > 0) {
    // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                          
                                                <tr>
                                                    <td><?php echo $row["transname"] ?></td>
                                                    <td>$ <?php echo $row["price"] ?></td>
                                                    <td><?php echo $row["secret_code"] ?></td>
                                                    <td><?php echo $row["completion_time"] ?></td>
                                                    <td><?php echo $row["track_id"] ?></td>
                                                    <td><a class="btn btn-danger" href="delete_track.php?id=<?php echo $row["escrow_id"]; ?>">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>
                                             
                                                </td>
                                            </tr>


                                      
                                        <?php 

                                    }
                                } else {
                                    echo "0 results";
                                }

                                mysqli_close($link);
                                ?>
    </tbody>
  </table>
		</div>
		<div class="col-md-1">
			
		</div>
	</div>
</div>
			</main>
			<!--Main End-->
			<!--Footer Start-->
			<?php include 'footer.php'; ?>