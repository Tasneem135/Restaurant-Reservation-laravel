<html>
    <head>
        <title>Login</title>
        <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
       <div class="container">
        <div class="imgbox">
            <img src="https://images.pexels.com/photos/1640770/pexels-photo-1640770.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
        </div>
         <div class="blur">
              <div class="loginbox">
                  <form class="form">
                    <input type="text" id="email" class="email" placeholder="&#xf0e0; Email"><br><br>
                    <input type="text" id="pass"class="pass" placeholder="&#xf023; Password"><br><br>
                    <input type="checkbox"  name="remember" class="cbox" ><p class="re">Remember me</p><br>
                    <button type="submit" class="log" name="submit">LOG IN<a href=""><a></button><br>
                    <div class="forg"><a href="#">Forget Password?</a></div>
                 </form>
            </div>
            <i class="bi bi-person-circle"></i>
         </div>
       </div>
    </body>
</html>