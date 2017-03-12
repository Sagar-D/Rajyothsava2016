<?php

	$name = $_POST["name"];
	$usn = $_POST["usn"];
	$phone = $_POST["mobile_no"];
	$email = $_POST["email"];

	$msg='<div style="padding-left:"100px";">Below is the list of events that you intend to participate in: </br>';
	$count=1;
	
	$selected = "no";
	
	if(isset($_POST['photo'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Photography.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Photography</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['poetry'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Poetry.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
	$msg.=$count.". Poetry</br>";
		$count++;
		$selected="yes";

	}
	
	if(isset($_POST['cs'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("CounterStrike.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
	$msg.=$count.". Counter Strike</br>";
		$count++;
		$selected="yes";
		
	}
	
	
	if(isset($_POST['opainting'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("OnspotPainting.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Onspot Painting</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['stquiz'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("StudentQuiz.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Student Quiz</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['debate'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("KannadaDebate.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Kannada Debate</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['thunt'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("TressureHunt.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Tressure Hunt</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['santhyakshari'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("StaffAnthyakshari.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Staff Anthyakshari</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['jam'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Jam.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Kannada Jam</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['streetdance'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("StreetDance.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Street Dance</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['dc'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("DumbCharades.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Dumb Charades</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['creativewriting'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("CreativeWriting.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Creative Writing</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['kannadiga'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("HemmeyaKannadiga.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Hemmeya Kannadiga And Kannadathi</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['cooking'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Cooking.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Cooking</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['karaoke'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Karaoke.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		
		$msg.=$count.". Karaoke</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['aircrash'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Aircrash.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Aircrash</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['voice'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("VoiceofMSRIT.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Voice of MSRIT</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['squiz'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("StaffQuiz.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Staff Quiz</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['lightvocals'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("LightVocals.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$selected="yes";
		
		$msg.=$count.". Light Vocals</br>";
		$count++;
	}
	
	if(isset($_POST['fpainting'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("FacePainting.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Face Painting</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['anthyakshari'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Anthyakshari.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Anthyakshari</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['personality'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Personality.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Personality</br>";
		$count++;
		$selected="yes";
	}
	
	if(isset($_POST['rangoli'])){
		
	$line = array("$name","$usn","$phone","$email");
	$handle = fopen("Rangoli.csv", "a");
	fputcsv($handle, $line);
	fclose($handle);
		$msg.=$count.". Rangoli</br>";
		$count++;
		$selected="yes";
	}
	
	
	$msg.="</div>";
	
	
	
?>

<html>
<head>
<title>Continue</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(yellowbackground.jpg);background-size:cover;min-height: 500px;color:white;background-repeat:no-repeat;background-position:center;">
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<img src="logo.png" class="img-responsive" style="height=25%;"/>
</div>
</div>
</div>
<?php
if($selected=="yes"){
echo '<h1 align="center" style="font-family: Tahoma;padding-left:10%;padding-right:10%;"><b></br>Congratulations </br> You have succesfully registered for Kannada Rajyotsava 2016</br></b></h1>';
}
else{
	echo '<h1 align="center" style="font-family: Tahoma;padding-left:10%;padding-right:10%;"><b></br>Sorry!! </br> You didn\'t select any events. Please select the events in which you want to take part.</br></b></h1>';
}
?>

<div style="font-size : 20px;font-family: Tahoma;padding-left:10%;" >

<?php
if($selected=="yes"){
echo "$msg";
}
?>
</br></br/>
<a href="index.html">Click here</a> for another registration</br>
For any queries contact:</br>
<table>
<tr>
	<td>Sharath K </td><td>&nbsp&nbsp8951372894</td>
</tr>
<tr>
	<td>Supreeth HS </td><td>&nbsp&nbsp8904430345</td>
</tr>
<tr>
	<td>Sachin BT </td><td>&nbsp&nbsp9740145280</td>
</tr>
</table>
</div>
</body>
</html>