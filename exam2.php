<?php
$file="data.json";
$json = json_decode(file_get_contents($file), true);
echo "<pre>";
	
		for ($i=0; $i <count($json) ; $i++) { 
			# code...
			if ($json["$i"][rating]==5){
				echo"<hr>";
			echo $json["$i"]["model"]."<br>";
			echo $json["$i"]["price"]."<br>";
			echo $json["$i"]["rating"]."<br>";
			$imgs = $json["$i"]["picture"];
			echo '<img src="'.$imgs.'"><br>';
			echo "<hr>";
		}
	}
echo "</pre>";
?>