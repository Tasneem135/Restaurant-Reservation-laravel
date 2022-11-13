@extends('layouts/dashboard')


@section('createrestaurantd')
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
        box-shadow: 10px 5px 10px rgba(224, 53, 196, 0.1);
    }

    .text{
        width: 50%;
        height: 10%;
        margin-left: 25%;
        margin-top: 3%;
    }

    .text h1{
        text-align: center;
        color: purple;
    }
   

    .inputbox{
        margin-top:5%;
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
        background: plum;
        box-shadow: 10px 15px 20px rgba(204, 156, 204, 0.863);
        font-size: 18px;
        font-weight: bold;
        color: black;
        cursor: pointer;
        border: 1px solid rgb(194, 112, 194);
    }

    .add:hover{
        background: rgb(146, 29, 146);
        font-size: 18px;
        font-weight: bold;
        color: white;
        box-shadow: none;
    }   
</style>
@endsection




@section('addrestaurant')
<div class="container">  
 <div class="box">
    <div class="text"> 
        <h1>Create Restaurant</h1>
        </div>
    <div class="inputbox">
        <form>
            <input type="hidden" class="id" name="id">
            <input type="text" id="resName"class="resName" name="resName" placeholder="Restaurant name"><br><br>
            <input type="text" class="location" name="location" Placeholder="Location" ><br><br>
            <input type="text" class="email" name="email" placeholder="Email" ><br><br>
            <input type="text" class="password"  name="password" placeholder="Password"><br><br>    
            <input type="file" class="fileName" name="fileName" id="file" style="margin-left:30%;" class="file"><br><br>
            <button type="submit" class="add" name="add"  >ADD</button>
        </form>
    </div>
 </div>
<div>
@endsection