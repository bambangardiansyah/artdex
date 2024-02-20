@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single-Post</title>
    <link rel="stylesheet" href="css/spost.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="">
        </div>
        
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="">Explore</a></li>
            <li><a href="/#pricing">Premium</a></li>
            <li><a href="/#contact">Contact</a></li>
            <li><a href="profile">Profile</a></li>
            <li style="transform:translateY(-1%); color:" class="dropdown">
                <a href="#" id="btnlanguage">Language</a>
                <div class="dropdown-content">
                    <a href="#" onclick="changeLanguage('id')" data-lang="id" class="ind">Bahasa <br> Indonesia</a>
                    <a href="#" onclick="changeLanguage('en')"data-lang="en" class="eng">English</a>
                </div>
            </li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" name="" id="">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <div class="container">
        <div class="pict">
            <img src="assets/images/portfolio/img-10.jpg" alt="">
        </div>
        <div class="desc">
            <div class="dropdown">
                <button onclick="toggleDropdown()" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="4" viewBox="0 0 128 512"><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Report</a>
                </div>
                </div>
            <h2>Princess Cat</h2>
            <img id="penerbit" src="assets/images/team/img-1.jpeg" alt="">
            <h3>Iwanda Amelia</h3>
            <div class="outline">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste magnam molestias sit porro officia? Maiores repellat quia perspiciatis aliquid rerum.</p>
            </div>
            <svg class="like" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
            <span>15k</span>
        </div>
        <div class="comment">
            <h2>Comment Section</h2>
            <div class="user">
                <h3>Name</h3>
                <img src="assets/images/portfolio/img-10.jpg" alt="">
                
                <div class="line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="add-comment">
                <h2>Add Comment</h2>
                <textarea name="" placeholder="Type Something Here...." id="" cols="30" rows="10"></textarea>
                <button class="add" >Add</button>
            </div>
        </div>
    </div>
   
<script>

function toggleDropdown(dropdown) {
        dropdown.classList.toggle('active');
    }    

    function toggleDropdown() {
  var dropdownContent = document.getElementById("myDropdown");
  dropdownContent.classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
<script src="assets/js/single.js"></script>
</body>
</html>