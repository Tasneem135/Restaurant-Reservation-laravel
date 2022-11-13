<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title> 
        <link href="css/home/rhome.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body onload="slider()">
     <!----------------------------------1st Section------------------------------->
     @include('Home/header')
     @yield('homebody')
     @include('Home/footer') 
    
     



<!------------------------Script---------------------------->
        <script>
            var slideimg = document.getElementById("slideimg");
            var images = new Array(
                "https://media.istockphoto.com/photos/cooking-nd-seasoning-spices-border-on-black-slate-background-picture-id953140058?b=1&k=20&m=953140058&s=170667a&w=0&h=cFHmDfsARUpEkPd55UlMklVcXHs0dyRoENAQawCISr8=",
                "https://www.rossorestaurant.at/wp-content/uploads/2015/05/italian-food-background.jpg",
                "https://t4.ftcdn.net/jpg/02/84/46/89/360_F_284468936_x9z7JcG7abktWKd750bP2CcjCqeZyHtm.jpg",
            );
            var len = images.length;
            var i = 0;
            function slider(){
                if (i > len-1){
                    i=0;
                }

                slideimg.src=images[i];
                i++;
                setTimeout('slider()',1000);
            }


            
        </script>


<script>
     let popup=document.getElementById("popup");

function openPopup(){
    open-popup.classList.add("open-popup"); 
} 

function closePopup(){
    open-popup.classList.remove("open-popup"); 
} 
    
    </script>

<!------------------------Script---------------------------->
    <body>

    
</html>