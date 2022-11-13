@extends('Home/home')

@section('homebody')
    
        <div class="container">
        <div class="banner">
            <div class="slider">
                <img src="https://media.istockphoto.com/photos/cooking-nd-seasoning-spices-border-on-black-slate-background-picture-id953140058?b=1&k=20&m=953140058&s=170667a&w=0&h=cFHmDfsARUpEkPd55UlMklVcXHs0dyRoENAQawCISr8=" id="slideimg">
            </div>
            <div class="overlay">
           
            <div class="content">
                <h1>Welcome To Bengal Restaurent<h1>
                <h4>Craving For Food Order now<h4>
            </div>
            <div>
            <a href=""><button type="submit" class="reg" name="submit"   >Reserve a Table</button></a>
            </div>
            </div>
        </div>
   <!----------------------about us----------------------------------->
        <div class="text"><h2>ABOUT US</h2></div>
        <div class="line"></div>
       <div class="about">
           
           <div class="imgbox">
               <img src="https://plp.ie/wp-content/uploads/2020/04/Food-photography-Dublin-Ireland-1-2.jpg" class="imgg">
               
               </div>
               <div class="abouttext">
                   <div class="textbox">
                       <h1>READ OUR STORY</h1><br>
                       <h2>We've been Making The Delicious Foods Since 1999</h2><br>
                       <p>Fusce hendrerit malesuada lacinia. Donec semper semper sem vitae malesuada. Proin scelerisque risus et ipsum semper molestie sed in nisi. Ut rhoncus congue lectus, rhoncus venenatis leo malesuada id</p><br>
                       <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about templatemo. Thank you.</p>
                   </div>
               </div>              
       </div>

       <!--------------------------menu-------------------->
       <div class="text"><h2>OUR MENU</h2></div>
        <div class="line"></div>
       <div class="mbox">
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://c.ndtvimg.com/2022-06/gp4k2jro_burgers_625x300_20_June_22.jpg?im=FeatureCrop,algorithm=dnn,width=620,height=350?im=FaceCrop,algorithm=dnn,width=1200,height=886" class="mimg"> 
            <div class="mtext">
                <h1>Burger</h1><br>
                <h2>price:250Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://saltandbaker.com/wp-content/uploads/2020/01/Moist-Chocolate-Cake-5-.jpg" class="mimg"> 
            <div class="mtext">
                <h1>Chocolate Cake</h1><br>
                <h2>price:350Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYvjuKoIe2ec_JtLYpB7SDcO-38N0uSEiaxA&usqp=CAU" class="mimg"> 
            <div class="mtext">
                <h1>Cheese Cake</h1><br>
                <h2>price:300Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://w0.peakpx.com/wallpaper/392/95/HD-wallpaper-juice-drinks-cool-yummy-food-entertainment-fun.jpg" class="mimg"> 
            <div class="mtext">
                <h1>Seasonal Juice</h1><br>
                <h2>price:70Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://c.ndtvimg.com/2022-04/fq5cs53_biryani-doubletree-by-hilton_625x300_12_April_22.jpg" class="mimg"> 
            <div class="mtext">
                <h1>Chicken Briyani</h1><br>
                <h2>price:270Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAvrplsKIHSC8O3vMyoS9dg9wUislJ5aVoeLE-jBSQgdu-G5lcbQ9MZoa5X5_bosanqqs&usqp=CAU" class="mimg"> 
            <div class="mtext">
                <h1>Pizza</h1><br>
                <h2>price:300Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://3.imimg.com/data3/NT/TA/MY-3839705/04-500x500.jpg" class="mimg"> 
            <div class="mtext">
                <h1>Cold Cofee</h1><br>
                <h2>price:170Tk</h2>
            </div> 
        </div>
        <!----START slide--->
        <div class="sliderbox">
            <img src="https://thumbs.dreamstime.com/b/pink-yellow-cupcakes-against-black-background-birthday-party-sweet-food-desserts-copy-space-141128595.jpg" class="mimg"> 
            <div class="mtext">
                <h1>Cup Cake</h1><br>
                <h2>price:200Tk</h2>
            </div> 
        </div>
        
        <!----Finished slide--->
    </div>
    <div class="showmenu">
        <button type="submit" class="show">View Menu</button>
    </div>

    <!-----------------------book table---------------------------->
    <div class="text"><h2> RESERVE TABLE</h2></div>
         <div class="line"></div>
        <div class="tableboximg">
            <img src="https://media.istockphoto.com/photos/cozy-restaurant-for-gathering-with-friends-picture-id1159992039?b=1&k=20&m=1159992039&s=170667a&w=0&h=prGK7E_h62IuZFQNtnCDPhqmG6y1-MV-l_NiJhuAl7Q=">
                <div class="tablebox">
                    <form method="post">
                        <p><input type="email"  id="emaill" name="emaill" placeholder="E-mali" ></p><br>
                        <p><input type="number"  id="num" name="num" placeholder="Number of People" ></p><br>
                        <p><input type="time"  id="time" name="time" placeholder="Time" ></p><br>
                        <p><input type="date"  id="date" name="date" placeholder="Date" ></p>
                      <button type="submit" class="reserve" name="reserve" > Reserve</button>
               </form>
                </div>
        </div>

        <!-------------------contactus--------------------------->
        <div class="text"><h2>CONTACT US</h2></div>
        <div class="line"></div>
<div class="cbox">
    <div class="cleft">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.804971198637!2d90.4232898!3d23.8114419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c703d966dd0b%3A0x8a84128fe60a6d1f!2sBengal%20Software%20Ltd!5e0!3m2!1sen!2sbd!4v1666715771784!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <div class="cright">
        

        <div class="ctextbox">
            <form method="post">
                <p><input type="text"  id="fname" name="fname" placeholder="Full Name"  > </p>
                <p><input type="email"  id="email" name="email" placeholder="E-mali" ></p>
                <p><input type="text"  id="subj" name="subj" placeholder="Subject" ></p>
                <textarea  rows="12" id="write" name="postt" placeholder="Your Message"  required=" "></textarea><br>
                <button type="submit" class="sub" name="sub"> Submit </button>
           </form>
        </div>
    </div>
</div>
</div>

@endsection

         
        
    
    
    
    
     



