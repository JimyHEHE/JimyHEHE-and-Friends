<?php 
require('config.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>akaun</title>
 </head>
 <body>
 	<hr>
 	<table align="center">
 		<p align="center">AKAUN PENDAFTARAN</p>
 		<td align="center" bgcolor="lightgrey">ID</td>
 		<td align="center" bgcolor="lightgrey">NAMA</td>
 		<td align="center" bgcolor="lightgrey">EMAIL</td>
 		<td align="center" bgcolor="lightgrey">NO.TEL</td>
 		<td align="center" bgcolor="lightgrey">SLOT</td>
 			<td align="center" bgcolor="lightgrey">EDIT</td>
 			<td align="center" bgcolor="lightgrey">DELETE</td>

<?php 
$result=mysqli_query($link,"SELECT * FROM seminar ");
while($array=mysqli_fetch_array($result)){
	$id=$array['id'];
	echo "<tr>";
	echo "<td><center>".$array['id']."</center></td>";
	echo "<td><center>".$array['nama']."</center></td>";
	echo "<td><center>".$array['emel']."</center></td>";
	echo "<td><center>".$array['notel']."</center></td>";
	echo "<td><center>".$array['slot']."</center></td>";

echo "<td><center>","<a href=\"edit.php?id=id\">EDIT</a>","</center>";
echo "<td><center>","<a href=\"delete.php?id=$\">DELETE</a>","</center>";
echo"</tr>";
}
 ?>

 	</table>
 </body>
 </html>