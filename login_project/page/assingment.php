<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://192.168.29.197/login_project/index.html");
    exit;
}
?>
<html>
<style>
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;

}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}/* Remove default bullets */

ul, #myUL {
  list-style-type: none;
}

/* Remove margins and padding from the parent ul */
#myUL {
  margin: 0;
  padding: 0;
}

/* Style the caret/arrow */
.caret {
  cursor: pointer;
  user-select: none; /* Prevent text selection */
}

/* Create the caret/arrow with a unicode, and style it */
.caret::before {
  content: "\25B6";
  color: white;
  display: inline-block;
  margin-right: 6px;
}

/* Rotate the caret/arrow icon when clicked on (using JavaScript) */
.caret-down::before {
  transform: rotate(90deg);
}

/* Hide the nested list */
.nested {
  display: none;
}

/* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
.active {
  display: block;
}
body {
	color: white;
	text-shadow: 0px 0px 5px #123456;
	height: 250vh;
	background:
		linear-gradient(-135deg, rgb(51, 51, 135) 10%, transparent),
		repeating-linear-gradient(45deg, rgba(34, 76, 152, 1) 0%, rgba(31, 48, 94, 0.6) 5%, transparent 5%, transparent 10%),
		repeating-linear-gradient(-45deg, rgba(34, 76, 152, 0.4) 0%, rgba(31, 48, 94, 0.5) 5%, transparent 5%, transparent 10%);
	background-color: rgba(34, 76, 152, 0.25);
}
</style>
   <body bgcolor = "#392085" color=red><b>
   <img src="Photos/logo.png" align=center alt="logo" width="130" height="130">
<ul id="myUL" style="margin-top:50">
  <li><span class="caret"><font color=white>Assignments</span>
    <ul class="nested">
      <li><a href = "http://videos.americaniche.com/asgn1.html" target = "main_page">Assignment_1</a></li>
      <li><a href = "http://videos.americaniche.com/asgn2.html" target = "main_page">Assignment_2</a></li>
      <li><a href = "http://videos.americaniche.com/asgn3.html" target = "main_page">Assignment_3</a></li>
      <li><a href = "http://videos.americaniche.com/asgn4.html" target = "main_page">Assignment_4</a></li>
      <li><a href = "http://videos.americaniche.com/asgn5.html" target = "main_page">Assignment_5</a></li>
      <li><a href = "http://videos.americaniche.com/asgn6.html" target = "main_page">Assignment_6</a></li>
      <li><a href = "http://videos.americaniche.com/asgn7.html" target = "main_page">Assignment_7</a></li>
      <li><a href = "http://videos.americaniche.com/asgn8.html" target = "main_page">Assignment_8</a></li>
      <li><a href = "http://videos.americaniche.com/asgn9.html" target = "main_page">Assignment_9</a></li>
</ul>
</li>

<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
   </body>

</html>
