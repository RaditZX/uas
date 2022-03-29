<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<style>
    body {
    background-color:  white;
    font-family:sans-serif;
    }
    .main-nav {
  grid-area: mn;
  padding: 0 30px 0 20px;
  top: 20;
  left: 5em;
position: fixed;
width: 100%;
z-index: 1;
}

.main-nav a {
  color: black;
  text-decoration: none;
  margin: 5px;  
  
}
.netflixLogo {
  grid-area: nt;
  object-fit: cover;
  width: 100px;
  max-height: 100%;
  
  padding-left: 30px;
  padding-top: 0px;  
  top: 20;
position: fixed;
width: 100%;
z-index: 1;
}

.netflixLogo img {  
  height: 35px;     
}
#logo {
  color: #7CFC00;  
  margin: 0; 
  padding: 0; 
  text-decoration: none;
}

.main-nav a:hover {
  color: var(--dark);
}
.sub-nav {
  grid-area: sb;
  color: black;
  padding: 0 40px 0 40px;
  top: 10;
  left: 60em;
  position: fixed;
width: 100%;
z-index: 1;
}

.sub-nav a {
  color: black;
  text-decoration: none;
  margin: 5px;
}
.sub-nav h3 {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}


.sub-nav a:hover {
  color: var(--dark);
}
/* Style the search box inside the navigation bar */
button {
  background-color: #7CFC00;
  border: none;
  color: white;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  padding: 8px 20px;
  border-radius: 4px;

  
}
input{
    padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}


</style>
<header>
<div class="netflixLogo">
        <a id="logo" href="#home" style="font-weight: bold;">OYO</a>
      </div>      
<nav class="main-nav">       
                 
       
      


<a href="/list">Home</a>

<a href="/add">Add</a>
                
</nav>
<nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
 
        <form class="form-inline">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</nav>


            <!-- Hamburger -->
                 
    </header>

<body>
   
    <div>@yield('container')</div>
</body>
</html>