<!DOCTYPE html>
<html>
<head>
	<title>LIVE RANKING</title>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style type="text/css">
		body{
			background-color:#c0c0c0;
		}
		h1{
			color:red;
			font-style: "comic sans MS",cursive,sans-serif;;
			font-size: 100px;
		}
		#image{
			
			width:80%;
			background-color: white;
			margin-bottom: 30px;
			border-radius: 20px;
			padding: 10px 10px 10px 10px;

		}
		#prof{
			border-radius: 120px;
		}
		
	</style>
</head>
<body>
<center>
<h1 style="color: #d80027;"">LIVE RANKINGS<img src="img/rank.png"></h1>
<div>

<div id="liverank">

</div>

</div>
</center>

<script>
var selctedbranch;

function fun(sel){
	selctedbranch = sel.options[sel.selectedIndex].text;
}

function submit(){
	document.location.href = 'liveranks.php?q=' + selctedbranch;
}

<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	 	$branch = $_GET['q'];
	 	
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

$sql = "SELECT rank,pic FROM `teacher` WHERE branch='$branch' ORDER BY rank DESC";
$result = $conn->query($sql);
$arrayList = "";
$count = 1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$arrayList .= '<div id="image"><img src="' . $row['pic'] . '"width="200px" height="200px" id="prof">' 
    	. '<h3 style="color: #d80027;">Nicknames Rewarded</h3>'
    	.'<p style="width: 500px; font-size: 18px;">'. getNicknameQuery($row['pic']) .'</p>' 
    	. '<label style="font-size: 200px;color: #d80027;">'. $count .'</label><img src="img/rank.png" width="100px" height="100px">'
    	.'<label style="font-size: 50px;color: green;">' . $row['rank'] . '</label><label style="color: green; font-size: 20px;">votes</label>'
    	.'</div>';
    	$count++;
    }
         echo  "$('#liverank').append('$arrayList');";
} else {
    echo "0 results";
}

function getNicknameQuery($picurl){
	$nicknm ="";
	$picurl = explode('/', $picurl)[2];
	$picID = explode('.', $picurl);
	$picID = $picID[0]; 
	global $conn; 

	$sql2 = "SELECT * FROM `nickmane` WHERE id='$picID'";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
    // output data of each row
    	while($row = $result2->fetch_assoc()) {
         	$nicknm .= ($row["nickname"] . ":");
    	}

	}

    // breaking
    $arr = explode(':', $nicknm);
    $size = count($arr) - 1;
    $arrString = "";
    if($size >= 50){
    	for($j = $size-1; $j >= $size - 50; $j-- ){
    		if($j % 10 == 0){
    			$arrString .= $arr[$j] . "<br>";
    		}else{
    			$arrString .= $arr[$j] . " | ";
    		}
    	}
    	
    }else{
    	for($j = 1; $j <= $size ; $j++ ){
    		if($j % 10 == 0){
    			$arrString .= $arr[$j-1] . "<br>";
    		}else{
    			$arrString .= $arr[$j-1] . " | ";
    		}
    	}    	
    }


    return '| ' . $arrString;
}


$conn->close();
?>

</script>
</body>
</html>