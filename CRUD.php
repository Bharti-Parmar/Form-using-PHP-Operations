<?php
    include('header.php');
    include('connection.php');
?>

 <div class="container"> 
<h2 class="text-center" style="color:skyblue;"> Register View </h2>

   <!--       <?php if(@$_GET['update']) {?>
          <div class="alert alert-success alert-dismissible">
            <a href="registration_entry.php" class="close">&times;</a>
            <strong>Success!</strong> Update Successfull!
          </div>
          <?php }?>

           <?php if(@$_GET['set']) {?>
          <div class="alert alert-success alert-dismissible">
            <a href="registration_entry.php" class="close">&times;</a>
            <strong>Success!</strong> Delete Successfully!
          </div>
          <?php }?>
 -->

<!-- for Database data view -->

      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>f_name</th>
            <th>l_name</th>
            <th>email</th>
            <th>area code</th>
            <th>contact</th>
            <th>s_address</th>
            <th>s_address1</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>postal code</th>
            <th>DOB</th>
            <th>gender</th>
            <th>course</th>
            <th>branch</th>
            <th>university</th>
            <th>comment</th>
            <th>date_time</th> 
          </tr>
        </thead>
        <tbody>

          <?php 

              $query = "SELECT * FROM form order by form_id desc";
              $sno = 1;
              $sql = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($sql))
              {

          ?>
          <tr>
            <td><?php echo $sno;?></td>
            <td><?php echo $row['f_name'];?></td>
            <td><?php echo $row['l_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['area_code'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['s_address'];?></td>
            <td><?php echo $row['s_address1'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['state'];?></td>
            <td><?php echo $row['country'];?></td>
            <td><?php echo $row['postal_code'];?></td>
            <td><?php echo $row['DOB'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['course'];?></td>
            <td><?php echo $row['branch'];?></td>
            <td><?php echo $row['university'];?></td>
            <td><?php echo $row['comment'];?></td>
            <td><?php echo $row['date_time'];?></td>
            <td><a href="update_page.php?form_id=<?php echo $row['form_id'];?>"><button type="button" name="edit" class="btn btn-info">Edit</button></a></td>
            <td><a href="delete.php?form_id=<?php echo $row['form_id'];?>"><button type="button" name="delete" class="btn btn-danger">Delete</button></a></td>
          </tr>
          <?php 
              
              $sno = $sno+1;
            }
          ?>
        </tbody>
      </table>
    </div>


<!-- To Insert Data -->
<?php


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

// TO update data



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

  echo  $query="UPDATE form SET f_name='".$f_name."',l_name='".$l_name."',email='".$email."',area_code='".$area_code."',contact='".$contact."',s_address='".$s_address."',s_address1='".$s_address1."',city='".$city."',state='".$state."',country='".$country."',postal_code='".$postal_code."',DOB='".$DOB."',course='".$course."',branch='".$branch."',university='".$university."',comment='".$comment."',date_time='".$date."' WHERE form_id='".$form_id."'"; //exit;

    mysqli_query($conn,$query);
    //var_dump($query);
    header('location:registration_entry.php?update=true');
     // exit;
  }

// To delete the data

     if(!empty($_GET['form_id'])){
          $query="DELETE FROM form WHERE form_id= '".$_GET['form_id']."'"; //exit;
          $result = mysqli_query($conn,$query);
          header("Location: registration_entry.php?set=true"); 
     }

?>