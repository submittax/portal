    <?php 

    include("../assets/header.php");
   if(!isset($_SESSION['ADMINID']))
    {
        header('location: https://submittax.com');
    }  

     ?>
    <div class="container col-md-12">
        <div class="sidebar col-md-4">
            <a class="active" href="?action=analytics">Analytics</a>
            <a href="?action=paging-test">PAN</a>
            <a href="?action=paging-test">PAN</a>
            <a href="?action=order-history">Order History</a>
            <a href="?action=test-mail">Test Mail</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="content col-md-8">
            


<?php
$action = @$_GET['action'];
switch($action){
    case "":
    case "analytics":
        include("module/analytics.php");
        break;
    case "pan":
        include("module/pan-details.php");
        break;
    case "pending-order":
        include("../module/pending-order.php");
        break;
    case "user-documents":
        include("../module/user-documents.php");
        break;
    case "paging-test":
        include("module/paging-test.php");
        break;
    case "edit-pan":
        include("module/edit-pan.php");
        break;
    case "logout":
        include("../module/logout.php");
        break;
    default: include("module/analytics.php");


    }
?>
    </div> <!--Dashboard right component ends -->
</div> <!--main container ends -->















        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
            <!-- vertical tabs -->
       
            <script>
            // document.ready(alert("SFfs"));
            function openCity(evt, cityName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the link that opened the tab
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += "J active";
                }



                        // window.ready(openCity(docuement.ready,'London')); 
</script>
    
    
    
    </body>
</html>
