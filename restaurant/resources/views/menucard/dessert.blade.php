@extends('menucard/menuhead')
@section('menucardcss')
<style>
       /* *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
}*/


.menucontainer{
 margin-top: 3%;
  position: absolute;
    width: 100%;
    height: 100%; 
    align-items: center;
    justify-content: center;
  
}
.menucardbox{
    display: grid;
    grid-template-columns: repeat(3,20%);
    gap: 150px;
}
.menucard{

    background-color: white;
    width: 120%;
    height: 130%;
    max-height:auto ;
    margin-left: 50%;
    
    box-shadow: 5px 5px 20px rgb(63, 62, 62);
}



.mimgbox{
    background-color: white;
    width: 90%;
    height: 50%;
    padding: 10px 17px;
}

.mimgbox img{
    width: 100%;
    height: 100%;
}

.menutext{
    margin-left: 5%;
}
.rating i{
    color: rgb(221, 132, 16);
}



.foodname h1{
    font-size: 20px;
    font-weight: bold;
   
    font-family: 'Times New Roman', Times, serif;
}

.foodname h2{
    font-size: 16px;
    color: rgb(78, 77, 77);
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
}

.foodname h3{
    font-size: 20px;
    color: purple;
    
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.add{
    margin-left: 40%;
    margin-top: -8%;
    width: 50%;
    height: 10%;
    color: white;
    background-color: red;
    border-radius: 5%;
    cursor: pointer;

}

.add:hover{
    background-color: rgb(9, 211, 9);
    border: 2px solid green;
    width: 55%;
    color: black;
    font-weight: bold;
}
        </style>
   @endsection

   @section('menudessert')
       
      
        <div class="menucontainer">
           
            <div class="menucardbox">
            <!---------------------------------------------->
             <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits </h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->


             <!---------------------------------------------->
             <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->

              <!---------------------------------------------->
              <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->
              <!---------------------------------------------->
              <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->
              <!---------------------------------------------->
              <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->
              <!---------------------------------------------->
              <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->
              <!---------------------------------------------->
              <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->
              
             <!---------------------------------------------->
              <div class="menucard">
                <div class="mimgbox">
                    <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg">
                </div>
                <div class="menutext">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <br>
                <div class="foodname">
                    <h1>Seasonal Juice</h1>
                    <h2>Made with Fresh Seasonak fruits</h2><br>
                    <h3>120TK</h3>
                    <button type="submit" class="add">Add To Cart</button>
                </div>
             </div>
            </div>
             <!---------------------------------------------->
             


        </div>
        </div>
   
@endsection 