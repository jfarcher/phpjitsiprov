<?php
$uuid=$_GET{'uuid'};
include('config.inc.php');

$sql="select jitsiprov.uuid,sip.id,sip.data from sip,jitsiprov where jitsiprov.uuid=\"$uuid\" and jitsiprov.id=sip.id  and keyword=\"secret\"";
//echo $sql;
$db = new PDO('mysql:host=localhost;dbname=asterisk;charset=utf8', $user, $pwd);
foreach($db->query($sql) as $row) {
   print "Given UUID: ".$row[0].'<br>Extension: '.$row[1].'<br>Secret:  '.$row[2]; //etc...
}




?>
