<?php 
include("../../config/database.php");
// include("../../assets/header.php");
?>


<?php
$page = intval($_GET['page']);
echo $page;
$rec_limit = 10;




		
        if($page==1)
        {
        	$offset=0;
        }
        if($page>1)
        {
        	$offset=($page*$rec_limit)-($rec_limit-1);
        }

         $sql = "SELECT * ". 
            "FROM `new_pan_individual` ".
            "LIMIT $offset, $rec_limit";
            echo "sql= ".$sql;
         
         $retval = mysqli_query( $conn, $sql);
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
   
         $pan_doc_location = "../pan-documents/";
         ?>
         <table class="table table-hover" id="pan-details">
  <thead class="thead-dark">
    <tr>
      <th scope="col">form ID</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address Proof</th>
      <th scope="col">ID Proof</th>
      <th scope="col">Aadhar Card</th>
      <!-- <th scope="col">type</th> -->
      <th scope="col">Payment Status</th>
      <th scope="col">Time Stamp</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="white-bg" id="table-body">

         <?php
         while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
            ?> 
            <tr>
               <td><?php echo $row['form_id']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['contact_no']; ?></td>
               <td><?php echo $row['fname']; ?></td>
               <td><?php echo $row['lname']; ?></td>
               <td><a class="btn btn-link" href="<?php echo $pan_doc_location.$row['poa_doc']; ?>"><?php echo $row['poa_name']; ?></a></td>
               <td><a class="btn btn-link" href="<?php echo $pan_doc_location.$row['poi_doc']; ?>"><?php echo $row['poi_name']; ?></a></td>
               <td><a class="btn btn-link" href="<?php echo $pan_doc_location.$row['pob_doc']; ?>"><?php echo $row['pob_name']; ?></a></td>
                  <td><?php echo $row['payment_status']; ?></td>
               <td>
                 <?php echo $row['created_at']; ?>
               </td>
               <td>
                <form method="POST" action="?action=edit-pan">
                  <input type="text" name="edit_form_id" value="<?php echo $row['form_id']?>" hidden>
                  <button type="submit" class="btn btn-info">Edit</button>
                </form>
               </td>
           <td>
                <!-- <form method="POST" action="?action=edit-pan"> -->
                  <button type="submit" class="btn btn-danger" onclick="deletePan(<?php echo $row['form_id']; ?>)">Delete</button>
                <!-- </form> -->
               </td>
            </tr>

         <?php
          }
          ?>
          </tbody>
</table>
          <?php

         $_PHP_SELF = &$_SERVER['PHP_SELF'];
         $_PHP_SELF = $_PHP_SELF."?action=paging-test"; 
         echo $_PHP_SELF;
         
         ?>
         




