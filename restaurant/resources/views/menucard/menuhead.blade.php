<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Page</title>
        @yield('menucardcss') 
        <link href="css/menucard/cards.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
       
        <nav class="navbar">
    
            <div class="left">
                <p>Bengal Restaurant</p>
            </div>
            <div class="center">
            <ul>
            <li><a href=""><i class="bi bi-house-door" class="active">Home</i></a></li>
            <li><a href="#"><i class="bi bi-people">About Us</i></a></li>
            <li><a href="#"><i class="bi bi-telephone">contact Us</i></a></li>
            </ul>
            </div>
        </nav>


        <nav class="linknavbar">
    
            <div class="linkcenter">
            <ul>
            <li><a href="">Appetizer</a></li>
            <li><a href="">Lunch</a></li>
            <li><a href="">Dinner</a></li>
            <li><a href="">Dessert</a></li>
            <li><a href="">Drinks</a></li>
            <button type="submit" class="cartt" name="cartt"  onclick="openPopup()"><i class="bi bi-bag-check-fill"></i>Cart</button>
            </ul>
            </div>
        </nav>

       @yield('menuappetizer')
       @yield('menulunch')
       @yield('menudinner')
       @yield('menudessert')
       @yield('menudrink')
    
      <!----------------------------------------popupcart--------------------------->

            <div class="cart" id="popup">
              <div class="cartbox">
               <table>
                   <tr>
                       <th>Item</th>
                       <th>Total item</th>
                       <th>Total</th>
                      
                   </tr>
               <!------------- row-------------------------->
                   <tr>
                       <td>
                           <div class="cartinfo">
                              
                               <img src="https://img.taste.com.au/xi2t8DpL/taste/2016/11/lemon-panna-cotta-with-vodka-blueberry-syrup-92005-1.jpeg">
                                <div>
                                   <p>Dessert</p>
                                   <h1>Price:100tk</h1><br>
                                   <a href=""><i class="bi bi-trash3-fill"></i></a>
                                </div>

                           </div>
                       </td>
                       <td><input type="number" value="1"></td>
                       <td>100tk</td>
                        
                       

                   </tr>
                  <!------------- row-------------------------->
                  <!------------- row-------------------------->
                  <tr>
                   <td>
                       <div class="cartinfo">
                          
                           <img src="https://img.taste.com.au/xi2t8DpL/taste/2016/11/lemon-panna-cotta-with-vodka-blueberry-syrup-92005-1.jpeg">
                            <div>
                               <p>Dessert</p>
                               <h1>Price:100tk</h1><br>
                               <a href=""><i class="bi bi-trash3-fill"></i></a>
                            </div>

                       </div>
                   </td>
                   <td><input type="number" value="1"></td>
                   <td>100tk</td>
               </tr>
              <!------------- row-------------------------->

              <!------------- row-------------------------->
              <tr>
               <td>
                   <div class="cartinfo">
                      
                       <img src="https://img.taste.com.au/xi2t8DpL/taste/2016/11/lemon-panna-cotta-with-vodka-blueberry-syrup-92005-1.jpeg">
                        <div>
                           <p>Dessert</p>
                           <h1>Price:100tk</h1><br>
                           <a href=""><i class="bi bi-trash3-fill"></i></a>
                        </div>

                   </div>
               </td>
               <td><input type="number" value="1"></td>
               <td>100tk</td>
           </tr>
          <!------------- row-------------------------->
                 
               </table>
               <div class="totalprice">
                   <table>
                       <tr>
                           <td>Subtotal</td>
                           <td>100tk</td>
                       </tr>
                       <tr>
                           <td>Delivery Fee</td>
                           <td>10tk</td>
                       </tr>
                       <tr>
                           <td>Total</td>
                           <td>110tk</td>
                       </tr>
                   </table>
               </div>
             </div>
           </div> 
            
       
     <!----------------------------------------Script----------------------------------------->
     <script>
        let popup=document.getElementById("popup");
    
        function openPopup(){
            open-popup.classList.add("open-popup"); 
        } 
    
        function closePopup(){
            open-popup.classList.remove("open-popup"); 
        } 
        
        </script>
    
        <!----------------------------------------Script----------------------------------------->
    
    </body>
</html>