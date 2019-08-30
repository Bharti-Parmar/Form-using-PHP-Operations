<?php
  
    include('connection.php');

  if(isset($_POST['submit']))
  {
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $code=$_POST['code'];
    $contact=$_POST['contact'];
    $s_address=$_POST['s_address'];
    $s_address1=$_POST['s_address1'];
    $city=$_POST['city'];
  	$state=$_POST['state'];
  	$country=$_POST['country'];
    $postal_code=$_POST['postal_code'];
    $DOB=$_POST['DOB'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $university=$_POST['university'];
    $multi_select=$_POST['select'];
    $comment=$_POST['comment'];
  	$date=date('Y/m/d H:i:s');

  	$query = "INSERT INTO form(f_name,l_name,email,area_code,contact,s_address,s_address1,city,state,country,postal_code,DOB,gender,course,branch,university,where_you_hear,comment,date_time)VALUES('".$f_name."','".$l_name."','".$email."','".$code."','".$contact."','".$s_address."','".$s_address1."','".$city."','".$state."','".$country."','".$postal_code."','".$DOB."','".$gender."','".$course."','".$branch."','".$university."','".$multi_select."','".$comment."','".$date."')";


  	mysqli_query($conn,$query);

  	header('location:index.php?save=true');

  }


?>