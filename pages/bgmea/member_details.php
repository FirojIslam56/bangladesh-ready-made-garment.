<?php
	include('../../classes/myFunction.php');
	$objMyFunction = new MyFunction();
?>
<?php
	if(isset($_GET['searchMemberId'])){
		$searchMemberId = $_GET['searchMemberId'];
		$get_single_data = $objMyFunction->searchMemberDetails($searchMemberId);
	}
?>

<?php
	if(isset($_GET['memberId'])){
		$memberId = $_GET['memberId'];
		$get_single_data = $objMyFunction->memberDetails($memberId);
	}
?>



<?php include('./header_bgmea.php'); ?>

<section class="members-details">
		<div class="container">
			<div class="company-name-topbar mt-4">
				<strong><?php echo $get_single_data['association_name'] ?></strong>
				<button class="btn btn-primary btn-sm"><a href="./members.php" style="color: white;">Back To Member</a></button>
			</div>
			<div class="members-info mt-5">
				<div class="dynamic-tab">
					<ul class="nav nav-tabs">
						<li class="nav-item"><a href="#one" class="nav-link active" data-toggle="tab">Contact
								Representative Information</a></li>
						<li class="nav-item"><a href="#two" class="nav-link" data-toggle="tab">Company Information</a>
						</li>
						<li class="nav-item"><a href="#three" class="nav-link" data-toggle="tab">Contact Address Information</a>
						</li>
					</ul>

					<div class="tab-content"
						style="background-color: white; padding: 15px; border-right: 1px solid lightgrey; border-bottom: 1px solid lightgrey; border-left: 1px solid lightgrey;">
						<div class="tab-pane active" id="one">
							<table class="table table-responsive-lg table-bordered table-sm table-striped" width="100%">
								<tbody>
									<tr>
										<th scope="row" width="30%"><strong>Name</strong></th>
										<td style="text-align:left;"><?php echo $get_single_data['contuct_person_name'] ?></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Designation</strong></th>
										<td style="text-align:left;">Chairman</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Mobile</strong></th>
										<td style="text-align:left;">017********</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Email</strong></th>
										<td style="text-align:left;"><?php echo $get_single_data['contuct_person_email'] ?></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Address</strong></th>
										<td style="text-align:left;">Holding # 2059, Joy Bangla Road,National
											UniversityGazipurJoydevpur</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="two">
							<table class="table table-responsive-lg table-bordered table-sm table-striped" width="100%">
								<tbody>
									<tr>
										<th scope="row" width="30%"><strong>Company Name</strong></th>
										<td style="text-align:left;"><?php echo $get_single_data['association_name'] ?></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Website</strong></th>
										<td style="text-align:left;"><a href="http://www.ajintl.com"
												target="_blank">www.ajintl.com</a></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Date of Establishment</strong></th>
										<td style="text-align:left;">2010</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>BGMEA Membership Number</strong></th>
										<td style="text-align:left;">2344</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Membership Type</strong></th>
										<td style="text-align:left;">General Member</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Membership Category</strong></th>
										<td style="text-align:left;">A</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Factory Type</strong></th>
										<td style="text-align:left;"><?php echo $get_single_data['product_type']; ?></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Number of Employees</strong></th>
										<td style="text-align:left;">3000</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Number of machines</strong></th>
										<td style="text-align:left;">350</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Production Capacity</strong></th>
										<td style="text-align:left;">75300</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Certifications</strong></th>
										<td style="text-align:left;">ISO</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Principal Exportable Product</strong></th>
										<td style="text-align:left;"><?php echo $get_single_data['principle_product'] ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="three">
							<table class="table table-responsive-lg table-bordered table-sm table-striped" width="100%">
								<tbody>
									<tr>
										<th scope="row" width="30%"><strong>Office Address</strong></th>
										<td style="text-align:left;">
											B-164-165-166-185-186-187, BSCIC I/E, SHASONGAON
											FATULLAH, NARAYANGANJ, DHAKA
											BANGLADESH</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Factory Address</strong></th>
										<td style="text-align:left;">
											B-164-165-166-185-186-187, BSCIC I/E, SHASONGAON
											FATULLAH, NARAYANGANJ, DHAKA
											BANGLADESH</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Mobile</strong></th>
										<td style="text-align:left;">017********</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>Email</strong></th>
										<td style="text-align:left;"><?php echo $get_single_data['contuct_person_email']; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('footer_bgmea.php'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>







