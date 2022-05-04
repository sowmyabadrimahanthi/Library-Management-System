<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Css Search Box Practice</title>
<!--  font awesome  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
</head>
<style>
    html {
  font-size: 62.5%;
}

*,*::before,*::after {
  overflow: hidden;
margin: 0;
padding: 0;
line-height: inherit;
box-sizing: inherit;
}

body {
margin: 0;
padding: 0;
box-sizing: border-box;
height: 100vh;
background-color: #ffffff;
line-height: 2;
}

.container {
width: 350px;
height: auto;
border: 5px solid #000;
background-color: white;
/*   margin: 20vh auto; */
position: absolute;
top: 30%;
left: 20%;
transform: translate(-50%, -50%);
border-radius: 4rem;
padding: 10px;
}

.search__box {
float: left;
width: 0;
height: 4rem;
/*   display: inline; */
background: none;
color: #000000;
font-size: 1.5rem;
border-radius: 2rem;
outline: none;
border: none;
position: relative;
opacity: 1;
transition: all .75s ease-in;
cursor: pointer;
/*   border: 2px solid tomato; */
/*   margin-top: 5px; */
}

/* .search__box:focus, .search__box:hover {
background-color: #f1f2f6;
} */

.search__icon {
box-sizing: border-box;
float: right;
font-size: 2.5rem;
display: inline-block;
/*   justify-content: center;
align-items: center; */
margin-left: .8rem;
margin-top: 0;
cursor: pointer;
position: absolute;
color: #000000;
transition: all .25s ease-in;
padding: .7rem;
border-radius: 50%;
}

.container:hover > .search__box {
width: 85%;
padding: 0 1rem;
}

.container:hover > .search__icon {
background-color: #eee;
}

.mat{
  position: relative;
  top: -200px;
  right: -125px
}

.show {
width: 85%;
border: 1px solid red;
}
#a{
    font-size : 5rem;
    color: #000;
}
#b{
    font-size: 5rem;
    position: absolute;
    top: 550px;
    left: 40%;
    color: #000;
}
img{
    position: relative;
    top: 5%;
    left: 60%;
}
</style>    
<body>
    <center>
    <h1 id="a">Library Management System</h1>
    <h1>Search your needs here</h1>
    </center>
    <img src="assets/img/books.jpg" class="img-fluid" alt="" >
  <div class="container">
    <form action="temp.php" method="post">  
    <input type="text" id="box" name="src" placeholder="Search anything...">
    <input type="submit" value="submit">
  </form>
  </div>
  <!-- <br><br><br> -->
  <div class="mat"> 
  <h1>Enter your requirenment...!</h1>
   <h2>
     now you will be redirected to a new page</br>
     if you recuired book is present in our library , </br>
     list of books will be displayed that are related to the name.</br>

  </h2></div>
    <center>
      <h1 id="b">Thank You</h1>
    </center>
</body>
<script>
    function toggleShow () {
  var el = document.getElementById("box");
  el.classList.toggle("show");
}


</script>
</html>