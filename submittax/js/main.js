  $(document).ready(function(){
    $('#login-form').on('submit', function(e){
    e.preventDefault();
        $.ajax({
        type: 'POST',
        url: 'config/function.php',
        data: $('#login-form').serialize(),
        success: function (output) {
              
             var result = $.parseJSON(output);
              if (result['msg'] == 'notExist') {
                swal("OOP's", "You Are Not Registered With Us" , "error");
              }

              if (result['msg'] == 'success') {
                // swal("Success", "You Are Successfully Login !!!" , "success");
                location.href='dashboard.php';
              }

              if (result['msg'] == 'failure') {
                swal("Error", "Incorrect Password!!!" , "error");
              }
        }
      });
