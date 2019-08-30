
<?php
require('connection.php');


     if(!empty($_GET['form_id'])){

      $query="DELETE FROM form WHERE form_id= '".$_GET['form_id']."'"; //exit;
			$result = mysqli_query($conn,$query);
			header("Location: registration_entry.php?set=true");
     }
 ?>
