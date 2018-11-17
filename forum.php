<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    body {font-family: Arial, Helvetica, sans-serif;
    margin: 5%;
    padding: 5%;
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

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
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
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
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
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.btn {  
    border: none;
    background-color: inherit;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
}

.btn:hover {background: rgb(0, 0, 0);}

.success {color: green;}
.info {color: dodgerblue;}
.warning {color: orange;}
.danger {color: red;}
.default {color: rgb(0, 0, 0);}


.button {
    background-color: rgb(0, 0, 0) /* Azure */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

header{
	background-color: white;
}

header h1{
	margin: 0;
}

html, body{
	margin: 5%;
	padding: 5%;
}
.center {
    border: 3px solid green;
}

table, th, td {
    text-align: center;
    padding: 2%;
    width: 1000px;
}

.submit{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
}


</style>


</head>
<body align="center">

    <?php
        $email    = $_POST["email"];
        $password = $_POST["password"];
        echo "Hello, " . $email . $password;
    ?>

<header>
	<h1 style ="color:rgb(70, 62, 62);">UAFS Study Groups</h1>
</header>	

<p style ="color:rgb(44, 46, 46);">Welcome to UAFS study groups! Click below to view upcoming study sessions, or make your own. </p>

<button id="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">View</button>     
<button id="login" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Create</button>

<div id="id01" class="modal">

    <div class="modal-content animate">
        <div class="center" align="center">
            <table>
            <tr>
                <th>Name</th>
                <th>Time</th>
                <th>Location</th>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>12/3/18 12:30pm</td>
                <td>UAFS Library 121</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>12/4/18 9:30am</td>
                <td>Fort Smith Coffee Co.</td>
            </tr>
            </table>
        </div>
</div>
</div>

<div id="id02" class="modal">

<form class="modal-content animate" action="" method="post">
    <div class="center" align="center">
        <table>
        <tr>
            <th>Event Name</th>
            <th>Event Time</th>
            <th>Location</th>
        </tr>
        <tr>
            <td>Your first and last name by default <input type="text"></td>
            <td>When do you plan on studying? <input type="text"></td>
            <td>Where will you be meeting? <input type="text"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" class="submit"></td>
        </tr>
        </table>
    </div>
</form>
</div>


<script>

var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>


</body>
</html>