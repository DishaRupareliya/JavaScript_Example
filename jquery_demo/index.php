<!DOCTYPE html>
<html>
<head>
  <title>jQuery Form Example</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script src="../jQuery/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="fst-italic">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 col-md-4 bg-dark text-light" id="user_details">
        <h1 class="pt-lg-5">Ajax Form</h1>
        <h6>User Add Details</h6>
      </div>
      <div class="col-6 col-md-8 bg-light">
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          <h4 id="response"></h4>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <form action="javascript:void(0)" class="p-lg-5">
          <h1>Form</h1>
          <div class="row">
            <div class="col-12 col-md-6">
              <label for="name" class="form-lable">Name</label>
              <input type="text" name="name" id="name" autocomplete="off" placeholder="Enter name" class="form-control">
              <span id="msg"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <label for="email" class="form-lable">Email</label>
              <input type="email" name="email" id="email" autocomplete="off" placeholder="email@gmail.com" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <label for="password" class="form-lable">Password</label>
              <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter password" class="form-control">
            </div>
          </div><br>
          <div class="row">
            <div class="col-6">
              <button class="btn btn-primary" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $(".alert").hide();
      $("form").submit(function(){
        var formData=$(this).serialize();
        console.log(formData);
        $.ajax({
          url: 'process.php',
          type: 'POST',
          data: formData,
          dataType: "JSON",
        }).done(function (res) {
          $('.alert').show();
          if(res.success == true) {
            $('#response').text('success');
          } if(res.success == false) {
            $('#response').text('error');
          }
        });
      });
    });
  </script>
</body>
</html>