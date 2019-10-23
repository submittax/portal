    <?php
    //Including Database configuration file.
    include("../../config/database.php");
    //Getting value of "search" variable from "script.js".
    if (isset($_GET['contact'])) {
    //Search box value assigning to $Name variable.
       $contact = $_GET['contact'];
    //Search query.
       $Query = "SELECT * FROM `new_pan_individual` WHERE contact_no LIKE '%$contact%' LIMIT 5";

    //Query execution
       $ExecQuery = mysqli_query($conn, $Query);
    //Creating unordered list to display result.
       echo '<ul>';
       //Fetching result from database.
       while ($Result = mysqli_fetch_assoc($ExecQuery)) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
       <!-- <li onclick='fill("<?php echo $Result['fname']; ?>")'> -->
       <a>
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
         <li>  <?php echo $Result['fname']; ?></li>
       </a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>
    </ul>