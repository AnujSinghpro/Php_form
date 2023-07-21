<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="process.php">
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="text" name="gender" required="">
      <label>gender</label>
    </div>
    <div class="user-box">
      <input type="text" name="education" required="">
      <label>education</label>
    </div>
    <div class="user-box">
      <input type="int" name="age" required="">
      <label>Age</label>
    </div>
    <div class="btn">
    <button name="submit">Submit</button>
    </div>
    
    
  </form>
</div>
</body>

</html>