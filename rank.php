<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style type="text/css">
		img{
			border-radius: 20px 20px;
			position: relative;
		}
		img:hover{
			margin-right: 10px;
			margin-bottom: 10px;
			height:250px;
			width:240px;
			box-shadow: 10px 10px 5px #888888;


		}
		input{
			width: 300px;
			height: 80px;
			border-radius: 20px 20px;
			color:red;
			font-style: "comic sans MS",cursive,sans-serif;
			font-size: 42px;
		}
		h1{
			margin-bottom: 2px;
		}
	</style>
</head>
<body>
<center>
	<h1 style="font-size: 42px" id="branch"></h1>
	<h1 style="font-size: 62px; color: red;">VOTE FOR WROST TEACHER</h1>
	<h1>(CLICK!! LEFT || RIGHT)</h1>
	<input id="imgAn" type="text" placeholder="Enter Nickname"> <input id="imgBn" type="text" style="margin-left: 130px"  name="" placeholder="Enter Nickname"><br>

	<div >
	<img onclick="rateTeacher(this)" id="imgA" width="250px" height="260px">		
	<img onclick="rateTeacher(this)" id="imgB" width="250px" height="260px" style="margin-left: 200px;">
	</div>
</center>

<script>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	 	$reqs = $_GET['q'];
	 	
	} 	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teachers";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `teacher` WHERE branch='$reqs'";
$result = $conn->query($sql);

$arrString = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $arrString .= ($row["pic"] . ":");
    }
         echo "var dataImgs =" . '"' . $arrString . $reqs . '"' . ";";
} else {
    echo "0 results";
}

$conn->close();

?>

// javascript part
var i = 1, iConf = 1;
var imgArr = dataImgs.split(":");
var dataLen = imgArr.length - 1;
var zeroCount = imgArr.length;
document.getElementById("branch").innerHTML = imgArr[imgArr.length - 1];
// alert();
var imgA = document.getElementById("imgA");
var imgB = document.getElementById("imgB");
var textboxA = document.getElementById("imgAn");
var textboxB = document.getElementById("imgBn");

var randX = Math.floor((Math.random() * 100)) % dataLen ;
imgA.src = imgArr[randX];
imgArr[randX] = '0';
var indx = getRandPicIndx();
imgB.src = imgArr[indx];
imgArr[indx] = '0';

zeroCount -= 2;

function getRandPicIndx(){
	var x = Math.floor((Math.random() * 100)) % dataLen;
	while(zeroCount > 0 && imgArr[x] == '0'){
		x = Math.floor((Math.random() * 100)) % dataLen;
	}

	zeroCount--;
	return x;
}

function rateTeacher(imgObj){
	var imgId = imgObj.id;
	var picId, mNickname, nickId;
	if(zeroCount > 0){
		if(imgId == "imgA"){
			nickId = (imgB.src.split("/"))[6];
			nickId = nickId.split(".")[0];
			imgB.src = imgArr[getRandPicIndx()];

			mNickname = textboxB.value;
			textboxB.value = "";
			
		}else{
			nickId = (imgA.src.split("/"))[6];
			nickId = nickId.split(".")[0];
			imgA.src = imgArr[getRandPicIndx()];

			mNickname = textboxA.value;
			textboxA.value = "";
		}	

			picId = (imgObj.src.split("/"))[6];
			picId = picId.split(".")[0];


		i += iConf;
		iConf++;
		callAjax('picId=' + picId + '&' + 'i=' + i + '&' + 'nickname=' + mNickname + '&' + 'nickId=' + nickId);
	
	}else{
			picId = (imgObj.src.split("/"))[6];
			picId = picId.split(".")[0];

			var textbox = document.getElementById(imgId + 'n');
			mNickname = textbox.value;
			textbox.value = "";

			i += iConf;
			iConf++;
			callAjax('picId=' + picId + '&' + 'i=' + i + '&' + 'nickname=' + mNickname + '&' + 'nickId=' + picId);

			document.location.href = 'liveranks.php?q=' + imgArr[imgArr.length - 1];

	}
}


function callAjax(reqs){
	$.ajax({
		url: 'ajaxHandler.php?' + reqs,
		type: 'GET',
		cache: false,
		dataType: 'text',
		async: false,
		success: function(rval, status){
		},
		error: function (error){
			alert("Error in Ajax !: " + error);
		} 
	});
}	
</script>
</body>
</html>