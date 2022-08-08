	<?php
		include('../../classes/myFunction.php');
		$objMyFunction = new MyFunction();

		
	?>




	<?php include('./header_bgmea.php'); ?>

	<section class="members-banner">
	    <div class="container">
	        <img src="./img/bgmea-banner-4.jpg" height="300px" alt="">
	    </div>
	</section>

	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <section class="members-search p-0">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-4">
	                            <div class="row">
	                                <form method="POST" action="" id="membersSearchFormTwo">
	                                    <div class="row">
	                                        <div class="form-group mb-1" style="width:70%;">
	                                            <input type="text" name="association_name" class="form-control"
	                                                placeholder="Search by association">
	                                        </div>
	                                        <div class="form-group mb-1" style="width:30%;">
	                                            <input type="submit" name="submit_association_name"
	                                                class="form-control btn btn-primary" value="Search">
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>

	                        <div class="col-md-4">
	                            <div class="row">
	                                <form method="POST" action="" id="membersSearchFormTwo">
	                                    <div class="row">
	                                        <div class="form-group mb-1" style="width:70%;">
	                                            <select name="region" class="form-control" id="region">
	                                                <option value="" selected disabled>Search by region</option>
	                                                <option value="Dhaka">Dhaka</option>
	                                                <option value="Gazipur">Gazipur</option>
	                                                <option value="Narayanganj">Narayanganj</option>
	                                                <option value="Mymensingh">Mymensingh</option>
	                                            </select>
	                                        </div>
	                                        <div class="form-group mb-1" style="width:30%;">
	                                            <input type="submit" name="submit_region"
	                                                class="form-control btn btn-primary" value="Search">
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>

	                        <div class="col-md-4">
	                            <div class="row">
	                                <form method="POST" action="" id="membersSearchFormTwo">
	                                    <div class="row">
	                                        <div class="form-group mb-1" style="width:70%;"> 
	                                            <select name="product_type" class="form-control" id="region">
	                                                <option value="" selected disabled>Search by product</option>
	                                                <option value="Knit">Knit</option>
	                                                <option value="Woven">Woven</option>
	                                                <option value="Sweater">Sweater</option>
	                                            </select>
	                                        </div>
	                                        <div class="form-group mb-1" style="width:30%;"> 
	                                            <input type="submit" name="submit_product_type"
	                                                class="form-control btn btn-primary" value="Search">
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </section>

	            <section class="members-lists search-member pt-3">
	                <div class="container">
	                    <h4 class="members-type-title text-success"><strong>Search Result</strong></h4>
	                    <div class="list-table">
	                        <table class="table table-striped">
	                            <thead style="background-color: deepskyblue; color: white;">
	                                <tr>
	                                    <th scope="col">Member/Company Name</th>
	                                    <th scope="col">Contact Person</th>
	                                    <th scope="col">Email Adddress</th>
	                                    <th scope="col">View More</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <?php 
					   		if(isset($_POST['submit_association_name'])){
								$get_all_row = $objMyFunction->displayData_associationName($_POST);
								while($get_single_row = mysqli_fetch_assoc($get_all_row)){
									?>
	                                <tr>
	                                    <td><?php echo $get_single_row['association_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_email']; ?></td>
	                                    <td><a href="member_details.php?searchMemberId=<?php echo $get_single_row['member_id']; ?>"
	                                            class="btn btn-primary">Details</a></td>
	                                </tr>
	                                <?php } } ?>


	                                <?php 
					   		if(isset($_POST['submit_region'])){
								$get_all_row = $objMyFunction->displayData_region($_POST);
								while($get_single_row = mysqli_fetch_assoc($get_all_row)){
									?>
	                                <tr>
	                                    <td><?php echo $get_single_row['association_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_email']; ?></td>
	                                    <td><a href="member_details.php?searchMemberId=<?php echo $get_single_row['member_id']; ?>"
	                                            class="btn btn-primary">Details</a></td>
	                                </tr>
	                                <?php } } ?>


	                                <?php 
					   		if(isset($_POST['submit_product_type'])){
								$get_all_row = $objMyFunction->displayData_productType($_POST);
								while($get_single_row = mysqli_fetch_assoc($get_all_row)){
									?>
	                                <tr>
	                                    <td><?php echo $get_single_row['association_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_email']; ?></td>
	                                    <td><a href="member_details.php?searchMemberId=<?php echo $get_single_row['member_id']; ?>"
	                                            class="btn btn-primary">Details</a></td>
	                                </tr>
	                                <?php } } ?>


	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </section>


	            <section class="members-lists all-member">
	                <div class="container">
	                    <h4 class="members-type-title"><strong>All Members List</strong></h4>
	                    <div class="list-table">
	                        <table class="table table-striped">
	                            <thead style="background-color: deepskyblue; color: white;">
	                                <tr>
	                                    <th scope="col">Member/Company Name</th>
	                                    <th scope="col">Contact Person</th>
	                                    <th scope="col">Email Adddress</th>
	                                    <th scope="col">View More</th>
	                                </tr>
	                            </thead>
	                            <tbody>


	                                <?php 
							$get_all_row = $objMyFunction->displayAllMember();
							while($get_single_row = mysqli_fetch_assoc($get_all_row)){
								?>
	                                <tr>
	                                    <td><?php echo $get_single_row['association_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_name']; ?></td>
	                                    <td><?php echo $get_single_row['contuct_person_email']; ?></td>
	                                    <td><a href="member_details.php?memberId=<?php echo $get_single_row['member_id']; ?>"
	                                            class="btn btn-primary">Details</a></td>
	                                </tr>
	                                <?php } ?>
	                            </tbody>
	                        </table>
	                    </div>



	                    <div class="for-pagination">
	                        <nav aria-label="Page navigation example">
	                            <ul class="pagination ">
	                                <li class="page-item">
	                                    <a class="page-link" href="#" aria-label="Previous">
	                                        <span aria-hidden="true">&laquo;</span>
	                                        <span class="sr-only">Previous</span>
	                                    </a>
	                                </li>
	                                <li class="page-item"><a class="page-link" href="#">1</a></li>
	                                <li class="page-item"><a class="page-link" href="#">2</a></li>
	                                <li class="page-item"><a class="page-link" href="#">3</a></li>
	                                <li class="page-item">
	                                    <a class="page-link" href="#" aria-label="Next">
	                                        <span aria-hidden="true">&raquo;</span>
	                                        <span class="sr-only">Next</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </nav>
	                    </div>
	                </div>
	            </section>
	        </div>
	        <div class="col-md-2">
				<section>
					<div class="splide right-add" id="rightAddSplide_membersPage">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<a href=""><img src="./img/bgmea-banner-1.jpg" class="img-fluid" alt=""></a>
								</li>
								<li class="splide__slide">
									<a href=""><img src="./img/bgmea-banner-2.jpg" class="img-fluid" alt=""></a>
								</li>
								<li class="splide__slide">
									<a href=""><img src="./img/bgmea-banner-3.jpg" class="img-fluid" alt=""></a>
								</li>
								<li class="splide__slide">
									<a href=""><img src="./img/bgmea-banner-4.jpg" class="img-fluid" alt=""></a>
								</li>
								<li class="splide__slide">
									<a href=""><img src="./img/bgmea-banner-5.jpg" class="img-fluid" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
	    </div>
	</div>


	<section class="video-slider">
		<div class="slide-show container mt-4 mb-4">
			<div class="splide" id="bgmeaVideoSplide_membersPage">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide" style="margin-right: 10px;">
							<img src="./img/profile-mainProducts-1.jpg" class="img-fluid p-2" alt="">
						</li>
						<li class="splide__slide" style="margin-right: 10px;">
							<img src="./img/profile-mainProducts-2.jpg" class="img-fluid p-2" alt="">
						</li>
						<li class="splide__slide" style="margin-right: 10px;">
							<img src="./img/profile-mainProducts-3.jpg" class="img-fluid p-2" alt="">
						</li>
						<li class="splide__slide" style="margin-right: 10px;">
							<img src="./img/profile-mainProducts-4.jpg" class="img-fluid p-2" alt="">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>






	<?php include('footer_bgmea.php'); ?>






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

	<script src="./js/bootnavbar.js"></script>
	<script>
new bootnavbar();
	</script>


	<script src="./splide/splide.min.js"></script>
	<script src="./splide/splide-extension-auto-scroll.min.js"></script>
	
	<script>
		new Splide("#rightAddSplide_membersPage", {
		type: 'loop',
		perPage: 5,
		autoplay: true,
		direction: 'ttb',
		height: '600px',
		}).mount();

		new Splide("#bgmeaVideoSplide_membersPage", {
		type: 'loop',
		drag: 'free',
		focus: 'center',
		perPage: 4,
		autoScroll: {
			speed: 1,
		},
		}).mount(window.splide.Extensions);
	</script>



	

	</body>

	</html>