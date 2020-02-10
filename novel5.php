<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM term WHERE namafile='novel5.pdf' ORDER BY namafile DESC");
?>

<html>
<head>    
    <title>Novel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
 <center>
<a href="utama2.html">Menu Utama</a>
<br/>
<br/>
    <table width='60%' cellspacing='0'>
    <tr>
        <th>Nama File</th>
		<th>Term</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['namafile']."</td>";
        echo "<td>".$user_data['term']."</td>";    
    }
    ?>
    </table>
	</center>
</body>
</html>