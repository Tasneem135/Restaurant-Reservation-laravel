<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin dash board</title> 
      
        @yield('createrestaurantd')
        @yield('Updaterestaurantd')
        <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
    <!----------------------------------------Page----------------------------------->
  
              
    <div class="header">

     <h3>Admin </h3><br><hr><br><br>
     <a href=""><i class="bi bi-person-circle">My Profile</i></a><br>
     <a href="#"><i class="bi bi-border-width">Dash Board</i></a><br>
     <a href="#"><i class="bi bi-building">Add Restaurant</i></a><br>
     <a href="#"><i class="bi bi-gear-fill">Setting </i></a><br>
     <a href="#"><i class="bi bi-box-arrow-right">Logout</i></a><br>

    </div>

    <!----------------------------------------Page Finished----------------------------------->

    @yield('addrestaurant')
    @yield('updaterestaurant')
</body>
</html>