@extends('main')
@section('container')

<style>
    body{
        font-family:sans-serif;
        color:black;
    }
    .main{
        width: 80em;
        height: 15em;
    }
    .container{
        width: 80em;
        height: 20em;
        background-color:black;
        display: flex;

      margin-left: 2rem;
      
    }
    .container2{
        display: flex;
    }
    .container1{
        
        
        width: 100em;
        
    }
    .box{
        display: flex;
        flex-direction:column;
        
        
        
      

    }
    audio{
        margin-top:2em ;
    }
    .button {
 /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.button1 {
    background-color: #008CBA;
  color: white;
}

.button1:hover {
  
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
.button2 {
    background-color: #f44336;
  color: white;
}

.button2:hover {
  
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}
</style>

@foreach($hotels as $hotel)@endforeach
<h1 style="text-align:center; margin-top:5rem">{{ $hotel->name }}</h1>
<div class="main">

   <div class="container">
   
      <a href="/detail/{{ ($hotel->id) }}"><img style="  width: 115rem;height: 30em;" src="{{asset('storage/'.$hotel->image)}}" alt=""></a>
  
     <div class="container1">
     
       
        
     </div>
</div>

<
     <h1 style="margin-left:1em;  margin-top:5em; ">{{ $hotel->name }}</h1>
        <h3 style="margin-left:2em;">Location:{{ $hotel->location }}</h3>
        <h3 style="margin-left:2em;" >Price: Rp{{ $hotel->price }}</h3>
      <p style="margin-left:2em; text-align:justify;">{{ $hotel->synopsis }}</p>
    <a href="/edit/{{ ($hotel->id) }}"><button style="margin-left:2em;" class="button button1">Edit</button></a>
<a href="/delete/{{ ($hotel->id) }}"><button class="button button2">Delete</button></a>
<h3 style="margin-left:2em; color:white;" id="price" >{{ $hotel->price }}</h3>



</div>
<div class="container2" style="margin-top:6rem">

<div style="margin-left:95rem; margin-top:9em;" class="box">
    <h1>BookNOW!</h1>
    <label for="">Price/night</label>
    <input type="text" id="input" placeholder="night">
    <button style="color:black" onclick="myFunction()"  type="submit">Book1</button>

    <p style="font-weight: bold;" id="demo"></p>


    
   
</div>
</div>

<script>
  function myFunction() {
    var night = document.getElementById('input').value;
  
  var price = document.getElementById('price').textContent;
  var total =price*night;
  document.getElementById("demo").innerHTML = "Total Price:"+"Rp"+total;
  }
</script>

