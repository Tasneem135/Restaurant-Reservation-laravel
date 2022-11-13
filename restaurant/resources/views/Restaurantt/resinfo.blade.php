@extends('layouts/resdashboard')


@section('resinfoc')
<style>
    .container{
        position: fixed;
        width: 100%;
        height: 100%;
        margin-left: 15%;
    }
    .box{
        background-color: white;
        margin-left: 10%;
        width: 60%;
        height: 80%;
        margin-top: 5%;
        border: 0.1px solid rgb(238, 222, 238);
        box-shadow: 0px 0px 10px 0px rgb(88, 95, 160);
    }

    .text{
        width: 50%;
        height: 10%;
        margin-left: 25%;
        margin-top: 3%;
    }

    .text h1{
        text-align: center;
        color: rgb(0, 13, 128);
    }

    .hr{
      margin-left:5%;
        width: 90%;
    }

    .inputbox{
        margin-top:9%;
        background-color: white;
        margin-left: 10%;
        width: 50%;

    }

    .resName{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .resName:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .location{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .location:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .email{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .email:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .password{
        width: 100%;
        height: 10%;
        padding: 5px 0;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        outline: none;
        cursor: pointer
    }

    .password:hover{
        box-shadow: 0 2px 5px rgba(119, 109, 119, 0.863);
    border: none;
    }

    .add{
        margin-top: 3%;
        margin-left: 50%;
        width: 30%;
        height: 7%;
        border-radius: 10%;
        background: rgb(160, 189, 221);
        box-shadow: 10px 15px 20px rgba(128, 135, 221, 0.863);
        font-size: 18px;
        font-weight: bold;
        color: black;
        cursor: pointer;
        border: 1px solid rgb(112, 148, 194);
    }

    .add:hover{
        background: rgb(29, 51, 146);
        font-size: 18px;
        font-weight: bold;
        color: white;
        box-shadow: none;
    }  
    
    .myinfoo{
    margin-top: 1%;
    background: #fff;
   
    width: 80%;
    height:50% ;
    margin-left: 2% ;
    margin-top: 10%;
    position: flex;
    flex-wrap: wrap;
  }
  .infoo 
  {
    margin-top: 1%;
    background: #fff;
    /*border:0.1px solid  #bd6c1c;*/
    box-shadow: 0 2px 5px rgba(163, 197, 219, 0.863);
    height: 15%;
    width: 120%;
   
  }

  .infoo h1{
    margin-top: 1%;
    font-size: 18px;
    font-family: initial;
  }
   
  .infoo lable{
    
    font-family: initial;
    color: #1c2cbd;
    margin-left: 2%;
   
  }

  .imgbox{
    margin-top: -55%;
    width: 70%;
    height: 80%;
    margin-left: 150%;
    
  }
   
  .imgbox img{
    
    width: 70%;
    height: 80%;
    border:2px solid blue;
  }

  .edi{
    border: none;
    background: transparent;
    margin-left:130%;
    display: flex;
    margin-top: -6%;
    cursor: pointer;
    color:rgb(22, 58, 218) ;
    font-family: initial;
    font-size: 17px;
    
  }
  
  .edi:hover{
    color: rgb(0, 13, 128);
    font-weight: bold;
    font-size: 20px;
  }
 
/*----------------------------pop up-----------------------*/
  .popup{
  background: #f3f0ed;
  border:0.1px solid  #1c2cbd;
  width: 60%;
  height:70% ;
  margin-left: 15% ;
  margin-top: 14%;
  position: flex;
  flex-wrap: wrap;
  border-radius: 10px;
  position: absolute;
  top: 0%;
  left: 25%;
  transform:translate(-50%,-50%) scale(0.1);
  visibility: hidden;
  transition: transform 0.4s,top 0.4s;
  
 }

 .open-popup{
  visibility: visible;
  top: 30%;
  transform:translate(-50%,-50%) scale(1);
}

 .cross{
  margin-top: 1%;
 }
 .cross i{
  margin-left: 95%;
  cursor: pointer;
 }

 .cross i:hover{
  color: #1c2cbd;
  font-size: 20px;
  font-weight: bolder;
 }



.infos 
{
  
  margin-top: 0%;
  background: #fff;
  height: 10%;
  width: 60%;
  border-radius: 10px;
  margin-left: 15% ;
  margin-top: 5%;
  background: transparent;


}

.infos h1{
  margin-top: 1%;
  font-size: 18px;
  font-family: initial;
}
 
.infos lable{
  
  font-family: initial;
  color: #1c42bd;
  margin-left: 0%;
 

}

#id{
    width: 100%;
	padding: 5px 0;
	margin: 5px 0;
	border-left: 0;
	border-right: 0;
	border-top: -5%;
	border-bottom: 1px solid black;
	outline: none;
	background: transparent;
}

#rname{
    width: 70%;
	padding: 5px 0;
	margin: 5px 0;
	border-left: 0;
	border-right: 0;
	border-top: 0;
	border-bottom: 1px solid black;
	outline: none;
	background: transparent; 
}



#email{
	width: 70%;
	padding: 5px 0;
	margin: 5px 0;
	border-left: 0;
	border-right: 0;
	border-top: 0;
	border-bottom: 1px solid black;
	outline: none;
	background: transparent;
}

#location{
  width: 70%;
	padding: 5px 0;
	margin: 5px 0;
	border-left: 0;
	border-right: 0;
	border-top: 0;
	border-bottom: 1px solid black;
	outline: none;
	background: transparent;
}


.upimg{
  margin-left: 90%;
  margin-top: -40%;
}

.upicon{
  border: 2px dashed black;
  width: 300%;
  height: 300%;
  margin-top: -7%;
}

.editt{
  
  background: transparent;
  margin-left:40%;
  margin-top: 10%;
  border-radius: 20%;
  width: 15%;
  height: 5%;
  outline:none;
  border: none;
  cursor: pointer;
  box-shadow: 0 2px 5px rgba(154, 199, 236, 0.863);
  font-size: 12px;
}

.editt:hover{
  background: #1c67bd;
  color: white;
  box-shadow: none;
}




/*-------------------------------popup----------------------------*/

</style>
@endsection

@section('seeresinfo')
<div class="container">  
 <div class="box">
    <div class="text"> 
        <h1>Restaurant Information</h1>
        <button type="submit" class="edi" name="edi"  onclick="openPopup()"><i class="bi bi-pencil"></i>Edit</button>
        </div>
        <div class="hr">
            <hr>
            <hr>
        </div>
       
    <div class="inputbox">
        <div class="myinfoo">
            <div class="infoo">
                <h1><lable>Restaurant Id: </lable>0456</h1>
               </div>
               <br>
            <div class="infoo">
            <h1><lable>Restaurant Name: </lable>Kuddos</h1>
           </div>
           <br>
           <div class="infoo">
            <h1><lable>Location: </lable>Bashundhara Dhaka</h1>
           </div>
           <br>
           <div class="infoo">
            <h1><lable>Email: </lable>Kuddos@gmail.com </h1>
           </div>
           <div class="imgbox">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHw%3D&w=1000&q=80">
           </div>
      </div>
       <!--------------------------popup----------------->

       <div class="popup" id="popup">
        <div class="cross"><i class="bi bi-x-circle-fill" onclick="closePopup()"></i></div>
         <form method="post"  >
            <div class="infos">
            <input type="hidden"  id="id" name="id" placeholder="Restaurant ID"></h1>
           </div>
           <div class="infos">
            <h1><lable>Restaurant Name: </lable><br>
            <input type="text"  id="rname" name="rname" placeholder="Restaurant Name" ></h1>
           </div>
           <div class="infos">
            <h1><lable>Location: </lable><br>
            <input type="text" id="location" name="location" placeholder="location">
           </div>
           <div class="infos">
          <h1><lable>Email: </lable><br>
            <input type="email"  id="email" name="email" placeholder="E-mali" ></h1>
           </div>
           <div class="infos">
            <div class="upimg">

             <div class="upicon">
              <i class="bi bi-cloud-arrow-up-fill"></i>
              <div class="uptext">
                No File Choosen yet
               </div>
             </div>
            <input type="file" class="file"  id="file"  name="fileName"><br>
            
          </div>
           </div>
           <button type="submit" class="editt" name="edittt"  onclick="closePopup()">Save</button>
           </form>

      </div>
       <!--------------------Popup----------------------->
    </div>
 </div>
<div>

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

@endsection