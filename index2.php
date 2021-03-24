

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">NAME</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">EMAIL</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">PHONE</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  echo "sssss";
}
?>
</form>
</body>
</html>
