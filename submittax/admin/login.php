<?php 
    // $type = $_GET['type'];

    if (isset($_GET['mailexist']))
    {
        $msg = '*This email is Already Registered !!';
    }
    if (isset($_GET['contactexist']))
    {
        $msg = '*This Contact Number is Already Associated with other account !!';
    }
    if (isset($_GET['notExist']))
    {
        $msg = 'Hey, this email seems alien to us. Please Signup with this email, Form is 50px right of this message. !!';
    }
    if (isset($_GET['wrongPass']))
    {
        $msg = 'Oops, Wrong password !!';
    }
    if (isset($_GET['signupFailure']))
    {
        $msg = 'Oops, It seems like an alien error.Something Went Wrong !!';
    }
    if (isset($_GET['loginFailure']))
    {
        $msg = 'Oops, It seems like an alien error.Something Went Wrong !!';
    }

?>

 
    <!-- Image and text -->
<?php include("../assets/header.php"); ?>
    <div class="section col-md-12">
        <div class="row">
            <!-- login form starts -->
            <div class="col-md-4 bg-grey">
                <h4>Login</h4>
                   <!-- alert div -->
               <?php if((isset($_GET['notExist'])) || (isset($_GET['wrongPass'])))
                    {
                ?>
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?php echo $msg ?></strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }
                ?>
                <!-- alert div ends -->

                <form action="../config/function.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="admin_login_email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_login_pass">
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" name="admin_login" class="btn btn-primary">LogIn</button>
                </form>
            </div>
            <!-- login form ends -->
            <div class="col-md-1 bg-white"></div>
            <!-- signup form start -->
         
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>