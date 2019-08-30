<!-- header file include -->
<?php include('header.php');
?>


<body>

<!-- registration successfull -->
<?php
     if(@$_GET["save"]) {
?>

	<div class="alert alert-success alert-dismissible">
   <a href="index.php" class="close">&times;</a>
 	 <strong>Success!</strong> Registration Successfully.
 	</div>

<?php
  }
?>

 <?php if(!isset($_GET["form_id"])){
       	 // header("location:index.php");
       }
       else{

?>


	<div class="container">
		<div class="card">
			<div class="jumbotron">
				<h1 class="text-center">Registration Form </h1>
				<p class="text-center"><i>Complete the registration form below</i></p>
			</div>
				<form class="container" method="POST" action="registration.php">
	<!-- Name and Email -->
					<div class="row">
						<div class="col-sm-4 col-12">
							<input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" required><br>
						</div>
						<div class="col-sm-4 col-12">
							<input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" required><br>
						</div>
						<div class="col-sm-4 col-12">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required><br>
						</div>
					</div>
	<!-- contact and area code -->
					<div class="row">
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="area_code" name="code" placeholder="Area code" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required><br>
						</div>
					</div>
	<!-- address and city -->
					<div class="row">
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="s_address" name="s_address" placeholder="street address" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="s_address1" name="s_address1" placeholder="street address line 2"><br>
						</div>
						<div class="col-sm-4 col-12">
							<input type="text" class="form-control" id="city" name="city" placeholder="city" required><br>
						</div><br>
					</div>
	<!-- state, postal code and country -->
					<div class="row">
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="state" name="state" placeholder="state" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="country" name="country" placeholder="country" required><br>
						</div>
						<div class="col-sm-4 col-12">
							 <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="postal_code" required><br>
						</div>
					</div>
	<!-- DOB and gender -->
					<div class="row row-sm">
						<div class="col-sm-6 col-12">
							<div class="row">
							   <label class="form-control-label col-lg-3">Birth Date:</label>
							   <input type="date" class="form-control col-lg-8" name="DOB">
							</div><br>
						</div>
						<div class="col-sm-6 col-12 ">
							<label class="form-control-label">Gender:</label>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-check">
								      <label class="form-check-label" for="radio1">
								        <input type="radio" class="form-check-input " id="male" name="gender" value="male" checked><label class="form-control-label">Male</label>
								      </label>
								    </div>
								</div>
								<div class="col-sm-6">
								    <div class="form-check">
								      <label class="form-check-label" for="radio2">
								        <input type="radio" class="form-check-input" id="female" name="gender" value="female"><label class="form-control-label">Female</label>
								      </label>
								    </div>
								</div>
							</div><br>
						</div>
					</div>
	<!-- course, branch and university -->
					<div class="row">
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="course" name="course" placeholder="Course" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="branch" name="branch" placeholder="branch" required><br>
						</div>
						<div class="col-sm-4 col-12">
							 <input type="text" class="form-control" id="university" name="university" placeholder="college / university" required><br>
						</div>
					</div>
	<!-- where you hear about this program -->
					<div class="row">
						<label style="margin-left:20px;">Where did you hear about this:</label>
							<div class="col-sm-2">
								<div class="form-check">
							      <label class="form-check-label" for="check1">
							        <input type="checkbox" class="form-check-input" id="check1" value="college" name="select" checked><p>college</p>
							      </label>
							    </div>
							</div>
							<div class="col-sm-2">
								<div class="form-check">
							      <label class="form-check-label" for="check2">
							        <input type="checkbox" class="form-check-input" id="check2" value="friend" name="select"><p>friend</p>
							      </label>
							    </div>
							</div>
							<div class="col-sm-2">
								<div class="form-check">
							      <label class="form-check-label" for="check1">
							        <input type="checkbox" class="form-check-input" id="check1" value="family"  name="select"><p>family</p>
							      </label>
							    </div>
							</div>
							<div class="col-sm-2">
								<div class="form-check">
							      <label class="form-check-label" for="check2">
							        <input type="checkbox" class="form-check-input" id="check2" value="other" name="select"><p>other</p>
							      </label>
							    </div>
							</div>
					</div>
	<!-- comment section -->
					<div class="row">
						<div class="col-sm-12 col-12">
							<textarea class="form-control" rows="5" id="comment" placeholder="Your Comment / Feedback" name="comment"></textarea>
						</div>
					</div>
	<!-- footer -->
					<p>
					<center><i>Once you submit your application, we will sent you an message on your email shortly to complete your further process.<br>Thank you!</i>
					</p>
	<!-- submit form -->
					 <button type="submit" class="btn btn-primary" name="submit" value="submit" style="margin-bottom:40px;">Submit Registration Form</button>
					 </center>
				</form>
		</div>
	</div>
	 <?php 	} ?>

</body>


<?php include('footer.php');
?>


<!-- date picker -->

  <!-- 	<select class="form-control" id="month" name="month" placeholder="month">
			    <option>jan</option>
			    <option>feb</option>
			    <option>mar</option>
			    <option>apr</option>
			    <option>may</option>
			    <option>jun</option>
			    <option>july</option>
			    <option>aug</option>
			    <option>sep</option>
			    <option>oct</option>
			    <option>nov</option>
			    <option>dec</option>
			  </select>
			  <input type="number" class="form-control" id="date" name="date" placeholder="date" required>
			   <select id="selectYear" style="width:auto;" class="form-control selectWidth">
                            @for ($i = 1900; $i <= 2019; $i++) -->
                           <!--  <option class=""></option> -->
                         <!--    @endfor
                </select>
			 -->

<!-- multiple selector dropdown -->

			 <!--       <input type="text" class="form-control" id="skill" name="skill" value="skill" required><br> -->
     <!--     <div class="form-inline">
	            <select class="form-check selectpicker" id="skill" value="Skill" multiple="multiple">
	                <option value="Web Development">Web Development</option>
	                <option value="Data Science">Data Science</option>
	                <option value="Database">Database</option>
	                <option value="Data Analysis">Data Analysis</option>
	                <option value="Front-End">Front-end</option>
	                <option value="Big Data">Big Data</option>
	                <option value="Programming">Programming</option>
	                <option value="Data mining">Data Mining</option>
	                <option value="Back-End">Back-End</option>
	                <option value="Cyber Security">Cyber Security</option>
	                <option value="UI/UX Design">UI/UX Design</option>
	            </select>  -->


<!-- java scripts -->


		<!-- 	// $('select').selectpicker();

// 			$('#basic').multiselect({
//     templates: {
//         li: '<li><a href="javascript:void(0);"><label class="pl-2"></label></a></li>'
//     }
// });

		 // $('#datepicker').datepicker({
   //          uiLibrary: 'bootstrap4'
   //      });


		 // $(function () {
   //              $('#datetimepicker1').datetimepicker();
   //          });
 -->
