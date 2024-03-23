<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
  <section>
    <div class="box">
      <div class="boxContainer">
        <div class="form">
          <h2>Login Form</h2>
          <form method="post" action="./utility/cek.php">
            <div class="inputBox">
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="inputBox">
              <input type="password" placeholder="Password" name="password" />
            </div>
            <div class="inputBox">
              <input type="submit" value="Login" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>