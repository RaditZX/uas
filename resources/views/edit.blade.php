@extends('main')
@section('container')

<style>
    /* 64ac15 */
*,
*:before,
*:after {
  box-sizing: border-box;
}

body {
 
  color:white;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #696969;
  padding: 20px;
  margin-top: 5em;
}
input[type="file"] {
    display: none;
}


.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

</style>
@foreach($hotels as $hotel)@endforeach
<div class="container">
  <form action="{{ url('hotels',$hotel->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method("PUT")
  
     <h1> Hotel</h1>

        <input type="text" value="{{ $hotel->name }}" placeholder="Hotel Name" name="name"/>
    
  
<h4>Cover</h4>
<label class="custom-file-upload">Choose FIle
      <input class="form-control" type="file" id="image" name="image"  " >
</label><br><br>
  
        <input type="text" placeholder="Location" value="{{ $hotel->location }}"  name="location"/>
        <input type="text" placeholder="Price" value="{{ $hotel->price }}"  name="price"/>

        <label for="">KingBed</label>
        <input type="checkbox" value="Kingbed" placeholder="Price" name="facilate"/>
        <label for="">Bathup</label>
        <input type="checkbox" value="Bathup" placeholder="Price" name="facilate"/>
        <input type="text" placeholder="Price" value="{{ $hotel->synopsis }}"  name="synopsis"/>
        
    <input type="submit" >
   
  </form>
</div>