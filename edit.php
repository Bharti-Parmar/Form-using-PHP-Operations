<?php
	include('connection.php');

	if(isset($_POST['update']))
	{
      
        $form_id=$_POST['form_id'];
		 $f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$email=$_POST['email'];
		$area_code=$_POST['code'];
		$contact=$_POST['contact'];
		$s_address=$_POST['s_address'];
		$s_address1=$_POST['s_address1'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$country=$_POST['country'];
		$postal_code=$_POST['postal_code'];
		$DOB=$_POST['DOB'];
		$course=$_POST['course'];
		$branch=$_POST['branch'];
		$university=$_POST['university'];
		$comment=$_POST['comment'];
		$date=date('Y/m/d H:i:s');

	echo	$query="UPDATE form SET f_name='".$f_name."',l_name='".$l_name."',email='".$email."',area_code='".$area_code."',contact='".$contact."',s_address='".$s_address."',s_address1='".$s_address1."',city='".$city."',state='".$state."',country='".$country."',postal_code='".$postal_code."',DOB='".$DOB."',course='".$course."',branch='".$branch."',university='".$university."',comment='".$comment."',date_time='".$date."' WHERE form_id='".$form_id."'"; //exit;

		mysqli_query($conn,$query);
		//var_dump($query);
		header('location:registration_entry.php?update=true');
		 // exit;
	}
?>