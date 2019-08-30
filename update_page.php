<!-- header and connection file include -->
<?php
	    include('header.php');
		include('connection.php');
?>


<body>

 <?php

          $form_id=@$_GET['form_id'];
          $query="Select * from form where form_id='".$form_id."'";

          $sql=mysqli_query($conn,$query);
          $edit=mysqli_fetch_array($sql);
      ?>


	<div class="container">
		<div class="card">
			<div class="jumbotron">
				<h1 class="text-center">Edit Page </h1>
			</div>
				<form class="container" method="POST" action="edit.php">
					<input type="hidden" name="form_id" value="<?php echo $edit['0'];?>">
	<!-- Name and Email -->				
					<div class="row">
						<div class="col-sm-4 col-12">
							 <input type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $edit['f_name'];?>" required><br>
						</div>
						<div class="col-sm-4 col-12">
							<input type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $edit['l_name'];?>" required><br>
						</div>
						<div class="col-sm-4 col-12">
							 <input type="email" class="form-control" id="email" name="email" value="<?php echo $edit['email'];?>" required><br>
						</div>
					</div>
	<!-- contact and area code -->
					<div class="row">
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="area_code" name="code" value="<?php echo $edit['area_code'];?>" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="contact" name="contact" value="<?php echo $edit['contact'];?>" required><br>
						</div>
					</div>
	<!-- address and city -->
					<div class="row">
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="s_address" name="s_address" value="<?php echo $edit['s_address'];?>" required><br>
						</div>
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="s_address2" name="s_address1" value="<?php echo $edit['s_address1'];?>"><br>
						</div>
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="city" name="city" value="<?php echo $edit['city'];?>" required><br>
						</div><br>
					</div>
	<!-- state, postal code and country -->
					<div class="row">
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="state" name="state" value="<?php echo $edit['state'];?>" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="country" name="country" value="<?php echo $edit['country'];?>" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo $edit['postal_code'];?>" required><br>
						</div>
					</div>
	<!-- DOB and gender -->
					<div class="row row-sm">
						<div class="col-sm-6 col-12">
							<div class="row">
							   <label class="form-control-label col-lg-3">Birth Date:</label>
							   <input type="date" class="form-control col-lg-8" value="<?php echo $edit['DOB'];?>" name="DOB">
							</div><br>
						</div>
						<div class="col-sm-6 col-12 ">
							<input type="text" class="form-control" id="course" name="course" value="<?php echo $edit['course'];?>" required><br>
						</div>
					</div>
	<!-- course, branch and university -->
					<div class="row">
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="branch" name="branch" value="<?php echo $edit['branch'];?>" required><br>
						</div>
						<div class="col-sm-6 col-12">
							 <input type="text" class="form-control" id="university" name="university" value="<?php echo $edit['university'];?>"required><br>
						</div>
					</div>
	<!-- comment section -->
					<div class="row">
						<div class="col-sm-12 col-12">
							 <input type="text" class="form-control" id="comment" name="comment" value="<?php echo $edit['comment'];?>"><br>
						</div>
					</div>
	<!-- footer -->
	<!-- submit form -->
					<center>
					  <a href="edit.php?form_id=<?php echo $row['form_id'];?>"><button type="submit" class="btn btn-primary" name="update" style="margin-bottom:40px;">Update</button></a>
					 </center>
				</form>
		</div>
	</div>

</body>


<?php include('footer.php');
?>