
<div id="" class="tab-content">
               
    <h2>Documents</h2>
    
      <a class="btn btn-primary" href="?action=add-doc">Add New</a>
      
                 
<!-- Fetching data from database and displaying in table -->
  
                <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Upload Date</th>
            
    </tr>
  </thead>
  <tbody>
<?php 
  $doc_fetch_qry = "Select * from user_documents";
  $res = mysqli_query($conn,$doc_fetch_qry);
  while($row = mysqli_fetch_assoc($res))
  {
?>

    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['ud_name'] ?></td>
      <td><?php echo $row['created_at'] ?></td>
      <td><form>
      <button type="submit" class="btn btn-info">Update</button>
      </form></td>
      <td><form>
      <a href="../user-documents/<?php echo $row['ac_name'];?>" target="blank" class="btn btn-primary">View</a>
      </form></td>
      
      <td><form>
      <button type="submit" class="btn btn-danger">Delete</button>
      </form></td>
      
    </tr>
<?php  
  }
?>
</tbody>
</table>               
            </div>
           