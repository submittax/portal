   
    <?php include("../assets/header.php"); ?>
    <div class="container col-md-12">
        <div class="sidebar col-md-4">
            <a class="active" href="?action=view-profile">Profile</a>
            <a href="?action=pending-order">Pending Orders</a>
            <a href="?action=order-history">Order History</a>
            <a href="?action=user-documents">Documents</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="content col-md-8">
            <!-- <div id="" class="tab-content">
                <h2>Responsive Sidebar Example</h2>
                <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
                <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
                <h3>Resize the browser window to see the effect.</h3>
            </div>
            <div class="tab-content">
                <h2>Responsive Sidebar Example</h2>
                <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
                <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
                <h3>Resize the browser window to see the effect.</h3>
            </div>
            <div class="tab-content">
                <h2>Responsive Sidebar Example</h2>
                <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
                <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
                <h3>Resize the browser window to see the effect.</h3>
            </div> -->
        
        
    <!-- <div class="col-md-2">  </div> -->
        <!-- <div class="col-md-4">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">London</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')" >Paris</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
            </div>
        </div>

        <div class="col-md-6">
            <div id="London" class="tabcontent">
                <h3>London</h3>
                <p>London is the capital city of England.</p>
            </div>

            <div id="Paris" class="tabcontent" style="display:none;">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p>
            </div>

            <div id="Tokyo" class="tabcontent" style="display:none;">
                <h3>Tokyo</h3>
                <p>Tokyo is the capital of Japan.</p>
            </div> 
        </div> -->





<?php
$action = @$_GET['action'];
switch($action){
    case "":
    case "view-profile":
        include("../module/view-profile.php");
        break;
    case "order-history":
        include("../module/order-history.php");
        break;
    case "pending-order":
        include("../module/pending-order.php");
        break;
    case "user-documents":
        include("../module/user-documents.php");
        break;
    case "add-doc":
        include("../module/upload-documents.php");
        break;
    case "logout":
        include("../module/logout.php");
        break;


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
