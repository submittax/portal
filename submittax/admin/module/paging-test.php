  <?php
         $sql = "SELECT count(form_id) FROM `new_pan_individual` ";
         $retval = mysqli_query($conn, $sql);
         
         if(!$retval ) {
            die('Could not get data: ' . mysql_error());
         }

         $row = mysqli_fetch_array($retval, MYSQLI_NUM );
         $rec_limit = 10;
         $rec_count = $row[0];
         echo "record count = ".$rec_count;
         $total_page = ceil($rec_count/$rec_limit);
         echo "total page = ".$total_page;
         $page=1;

         if($page < $total_page)
         {
          $page += 1;
          ?>
         <a class="btn btn-primary" onclick="loadPanData(<?php echo $page; ?>)">Next Page</a>
         
         <?php 
       }

         if($page>1)
         {
          $page -= 1;
          ?>
          <a class="btn btn-primary" onclick="loadPanData(<?php echo $page; ?>)">previous Page</a>
       
         <?php 
          }


         ?>

         <!-- search bar -->
         <input type="text" id="pan-data-searchbar" class="form-control" onkeyup="SearchPanDataWithContact(this.value)" placeholder="search contact.." title="Type email id">
         <div id="pan-datasearch-result-div"></div>
         <input type="text" id="pan-details-searchbar" class="form-control" onkeyup="searchPanDetails()" placeholder="search from table.." title="Type email id">
         <div id="pan-data-div"></div>
    
     
   
         <?php

         mysqli_close($conn);
      ?>
<script>
  function SearchPanDataWithContact(contact_number){
    if (contact_number=="") {
    alert("No results");
    return;
    }
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET","module/search-pan.php?contact="+contact_number,true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      console.log(this.responseText);
      //alert("successfully deleted entry with from id : "+form_id);
     document.getElementById("pan-datasearch-result-div").innerHTML=this.responseText;
    }
  }
}



        //by default load page 1
        window.onload = loadPanData('1');

function loadPanData(page_number){
    if (page_number=="") {
    alert("something went wrong");
    return;
    }
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET","module/load-pan.php?page="+page_number,true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      console.log(this.responseText);
      //alert("successfully deleted entry with from id : "+form_id);
     document.getElementById("pan-data-div").innerHTML=this.responseText;
    }
  }
}

//dynamic ajax call to delete entry
function deletePan(form_id) {
  if (form_id=="") {
    alert("something went wrong");
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.open("GET","module/delete-pan.php?form_id="+form_id,true);
  xmlhttp.send();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      console.log(this.responseText);
      alert("successfully deleted entry with from id : "+form_id);
//      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }

}





function searchPanDetails() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("pan-details-searchbar");
  filter = input.value.toUpperCase();
  table = document.getElementById("pan-details");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>