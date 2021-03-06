<!DOCTYPE html>
<html lang="en" id="index">
  <head>
    <title> Boom Saver </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../styling/normalize.css">
    <link rel="stylesheet" type="text/css" href="../styling/styling.css" />
	<script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
	</script>
    <script src="{{ url_for('static', filename='index_handlers.js') }}" type=text/javascript></script>
  </head>


  <body class="bkpg1">
    <nav id="navigation">
    <!-- This is the top navigation bar showing the 4 main pages -->
        <ul id= "topbar">
        <img class="titlemain" src="../media/boomLogo.png" alt = "Boom Saver Logo" />
        <a href="login.php"> Sign In </a>
        <a href="blogList.php"> Blogs</a>
        <a href="contact.php"> Contact Us</a>
        <a href="../index.php"> Tech News </a>
       </ul>
    </nav>

    <h1> Sign In </h1>
    <fieldset>
    <form action="includes/signup.inc.php" method="POST" id= 'signUp'>
      <!-- display validation errors-->
      <div id = "signCont">
        <label id="emailText" for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" id="inputBox" name="email" required>

        <label id="user" for="uname"><b>Username</b></label>
        <input type="text" placeholder="Username" id="inputBox" name="username" required>

        <label id="pass" for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" id="inputBox" name="password" required>

        <button type="submit" name="submit" class="btn">Register</button>

        <!--<button id="button"> <a href="./blogList.html">Login</a></button>-->


      </div>
    </form>
  </fieldset>
  </body>
