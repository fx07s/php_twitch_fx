<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Exemple test</title>
</head>

<body>
<?php
echo "<h1>-- affiche le print_r array_end videos --</h1>";

$json_array = json_decode(file_get_contents('https://api.twitch.tv/kraken/channels/nightblue3/videos?broadcasts=true'), true);
$array_end = $json_array['videos'];
print_r ($array_end); // Check

echo "<h1>-- affiche mon foreach --</h1>";

foreach( $array_end as $key => $value ) 
{ 
  echo $key . ': <br />'; 
  
  foreach( $value as $valeur ) 
    echo '  ' . $valeur . '<br />';
	
  echo '<br />'; 
} 
?>


///
///
$valeur->broadcast_id
ne me rend rien
///
///

</body>
</html>
