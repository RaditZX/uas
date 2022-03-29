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
   
      <a href="/detail/{{ ($hotel->id) }}"><img style="  width: 80em;height: 20em;" src="{{asset('storage/'.$hotel->image)}}" alt=""></a>
  
     <div class="container1">
     
       
        
     </div>
</div>


     <h1 style="margin-left:1em;">{{ $hotel->name }}</h1>
        <h3 style="margin-left:2em;">Location:{{ $hotel->location }}</h3>
       
       
    <p style="margin-left:2em;">{{ $hotel->synopsis }}</p>
    <a href="/edit/{{ ($hotel->id) }}"><button style="margin-left:2em;" class="button button1">Edit</button></a>
<a href="/delete/{{ ($hotel->id) }}"><button class="button button2">Delete</button></a>


    </div>
   


</div>
<div class="container2" style="margin-top:6rem">

<div style="margin-left:65rem" class="box">
    <h1>BookNOW!</h1>
    <input type="text">
    <button type="submit"></button>
</div>
</div>

