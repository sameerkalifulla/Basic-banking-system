<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customers</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/14.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		padding:50px;
		border:0px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:red;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:black;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="mahesh"){
				 var arr=["suresh","raja","kannan","nishant","Mukilan","sameer","harish","ravi","lavanya"];
				 }
				 else if(a==="suresh"){
					var arr=["mahesh","raja","kannan","nishant","Mukilan","sameer","harish","ravi","lavanya"];

				}
				else if(a==="raja"){
					var arr=["mahesh","suresh","kannan","nishant","Mukilan","sameer","harish","ravi","lavanya"];

				}
				else if(a==="kannan"){
					var arr=["suresh","raja","mahesh","nishant","Mukilan","sameer","harish","ravi","lavanya"];

				 }
				 else if(a==="lavanya"){
					var arr=["suresh","raja","kannan","nishant","Mukilan","sameer","harish","ravi","mahesh"];
				 }
				 else if(a==="mukilan"){
					var arr=["suresh","raja","kannan","nishant","Mahesh","sameer","harish","ravi","lavanya"];

				 }
				 else if(a==="sameer"){
					var arr=["suresh","raja","kannan","nishant","Mukilan","mahesh","harish","ravi","lavanya"];
				 }
				 else if(a==="Nishant"){
					var arr=["suresh","raja","kannan","mahesh","Mukilan","sameer","harish","ravi","lavanya"];
				 }
				 else if(a==="ravi"){
					var arr=["suresh","raja","kannan","nishant","Mukilan","sameer","harish","mahesh","lavanya"];
				 }
				 else if(a==="harish"){
					var arr=["suresh","raja","kannan","nishant","Mukilan","sameer","mahesh","ravi","lavanya"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
	<h3 >
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		</h3>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>choose</option>
			<option value="suresh">suresh</option>
			<option value="raja">raja</option>
			<option value="kannan">kannan</option>
			<option value="mukilan">mukilan</option>
			<option value="nishant">nishant</option>
			<option value="lavanya">lavanya</option>
			<option value="sameer">sameer</option>
			<option value="harish">harish</option>
			<option value="mahesh">mahesh</option>
			<option value="ravi">ravi</option>
		</select><br><br>
		<h3>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		</h3>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>choose</option>
		</select><br><br>
		<h3>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label></h4>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>