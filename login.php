<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Kura Online</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
    <!--header image with IEBC logo-->
<header>
  <img class="logo" src="iebc.jpg" alt="logo">
</header>


        <section class="container">
          <div class="login">
          <h1>Login to Uchaguzi Online</h1>
          	
         
          <form method="POST" action="DbConn.php">
        <p>
        	<label for "username">Username: </label>
        	<input type="text" name="user" id="username" class="field" placeholder="username"/>
        </p>
        <p>
        	<label for="password">Password: </label>
        	<input type="password" name="pass" id="password" class="field" placeholder="password">
        </p>
        <div class="button">
        <button id="submit" name = "btn-login" value="send credentials">Login</button>
        </div>
        <label for="">
        	<input type="checkbox" name="remember_me" id="remember_me">Remember me on this computer
        </label>	
        </form>
        <div class="login-help">
    <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
  </div>
         </div>
            
        </section>
    </body>
</html>
