<!DOCTYPE html>
<html>
<head>
    <title>Smart Coin Monitoring Dashboard</title>
    <link rel="icon" type="image/x-icon" href="ajax/zksblogo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
h1 {text-align: center;}
h2 {text-align: center;}
/* responsive background picture*/

.responsive {
max-width: 100%;
height: auto;
}

/transparent form/
div.transbox {
opacity: 0.1;
}

/* Full-width input fields */
input[type=text], input[type=password] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}

/* center a table */
table.center {
margin-left: auto;
margin-right: auto;
}

/* Set a style for all buttons */
button {
background-color: #04AA6D;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}

button:hover {
opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
max-width: 100%;
height: auto;
text-align: center;
margin: 24px 0 12px 0;
position: relative;

}

img.avatar {
width: 40%;
border-radius: 50%;
}

.container {
padding: 16px;

}

span.psw {
float: right;
padding-top: 16px;
}

/* The Modal (background) */
.modal {
display: none; / Hidden by default /
position: fixed; / Stay in place /
z-index: 1; / Sit on top /
left: 0;
top: 0;
width: 100%; / Full width /
height: 100%; / Full height /
overflow: auto; / Enable scroll if needed /
background-color: rgb(0,0,0); / Fallback color /
background-color: rgba(0,0,0,0.4); / Black w/ opacity 
padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
background-color: #fefefe;
margin: 5% auto 15% auto; / 5% from the top, 15% from the bottom and centered /
border: 1px solid #888;
width: 70%; 
</style>
<body>
<div id="id01" class="modal">
  <!-- Modal Content -->
  <div class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="ajax/zksblogo.jpg" alt="Avatar" class="avatar">
    </div>
    
    <div class="container">
  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>

  <button type="submit">Login</button>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
</div>

<div class="container" style="background-color:#f1f1f1">
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  <span class="psw">Forgot <a href="#">password?</a></span>
</div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
    