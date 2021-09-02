<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<br/>
<body>
    
<form id="first_form" method="post" action="">
  <div>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"></input>
  </div>
  <div>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"></input>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"></input>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"></input>
  </div>

  <div>
    <input type="submit" value="Submit" />
  </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="register.js"></script>
</body>
</html>