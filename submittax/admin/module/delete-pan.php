<?php 
include("../../config/database.php");
// include("../../assets/header.php");
?>


<?php
$form_id = intval($_GET['form_id']);
echo $form_id;

//"DELETE FROM `new_pan_individual` WHERE `new_pan_individual`.`form_id` = 49";

$sql = "DELETE FROM `new_pan_individual` WHERE `new_pan_individual`.`form_id` = ".$form_id;
echo $sql;
// $sql="delete  FROM user WHERE form_id = '".$form_id."'";
$result = mysqli_query($conn,$sql);
var_dump($result);
echo "entry deleted successfully";
?>
</body>
</html>

