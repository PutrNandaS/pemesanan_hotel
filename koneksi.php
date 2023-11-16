<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "Pemesanan_Kamar";
// Create connection
 
$conn = mysqli_connect($host, $user, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>

<h1>Simpan Buku Tamu MySql</h1>
	<?php
	$nama= $_POST ["nama"];
	$email= $_POST ["email"];
	$komentar= $_POST ["komentar"];
	$conn=mysqli_connect ("localhost","root","","bukutamu") or die ('koneksigagal');
	echo "Nama: $nama<br>";
	echo "Email: $email<br>";
	echo "Komentar: $komentar<br>";
	$sqlstr= "insert into bukutamu1 (nama, email, komentar) values ('nama','email','komentar')";
	$result=mysqli_query ($conn, $sqlstr);
	echo "simpan buku tamu berhasil dilakukan";
	?>