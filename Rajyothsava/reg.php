<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>


<?php
$files = array('Aircrash','Anthyakshari','Cooking','CounterStrike','CreativeWriting','DumbCharades','FacePainting','HemmeyaKannadiga','Jam','KannadaDebate','Karaoke','LightVocals','OnspotPainting','Personality','Photography','Poetry','Rangoli','StaffAnthyakshari','StaffQuiz','StreetDance','StudentQuiz','TressureHunt','VoiceofMSRIT');
for($j=0;$j<23;$j++)
{
	
$handle = fopen($files[$j].'.csv','r');
$i=0;
$total;
?>

<div class="container-fluid">
<div class="col-md-4">
<table>
<?php
while(!feof($handle) ) {
		$line[$i] = fgetcsv($handle, 1024);
?>
		<tr>
		<td><?php
		print_r($line[$i][0]);echo "&emsp;&emsp;&emsp;";?>
		</td>
		<td><?php
		print_r($line[$i][1]);echo "&emsp;&emsp;&emsp;";?>
		</td>
		<?php
		$i++;
		$total++;
	}
	echo "<h2>$files[$j]</h2>";
	fclose($handle);
	
	?>
</table>
</div>
</div>
<?php

}
echo "..............................Total = $total";
?>


</html>