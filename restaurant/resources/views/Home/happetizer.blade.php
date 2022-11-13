

@section('hmenucss')
<style>
   /* *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
}*/

.menucontainer{
    
    width: 100%; 
    align-items: center;
    justify-content: center;
  
}

.mbox{
  
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(350px,10fr));
    grid-gap:2px;
}

.sliderbox{
    background-color: rgb(194, 18, 185);
    position: relative;
    width: 100%;
    height: 100%;
    margin-top: 3%;
    overflow: hidden;
}

.sliderbox .mimg{
    width: 100%;
    height: 100%; 
}


.mtext{
    width: 100%;
    height: 40%; 
    background-color: black;
    box-sizing: border-box;
    position: relative;
    text-align: center;
    bottom: 20%;
    opacity: 70%;
}

.mtext h1{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ;
    font-size: 25px;
    color: white;
 
}

.mtext h2{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ;
    font-size: 15px;
    color: white;
    visibility: hidden;
    opacity: 0%;
}


.sliderbox:hover{
    cursor: pointer;
}

.sliderbox:hover .mtext{
    position: absolute;
    bottom: 0%;
    width: 100%;
    height: 30%; 
}

.sliderbox img:hover{
    width: 100%;
    height: 100%; 
 
}

.sliderbox:hover .mtext h2{
opacity: 1;
visibility: visible;
}

.showmenu{
    background-color: rgb(15, 15, 15);
    text-align: center;
    align-items: center;
    width: 100%;
    height: 20%;
    opacity: 80%;
}



.show{
    background-color: transparent;
     margin-top: 4%;
     width: 10%;
     height: 30%;
     opacity: 100%;
     cursor: pointer;
     border: 2px solid white;
     font-size: 20px;
     color: white;
     
}

.show:hover{
   width: 30%;
   background-color: blueviolet;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
</style>
@endsection

@section('appetizer')
    

        <div class="menucontainer">
        
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
            
        </div>
        
        @endsection