Tampilkan Data <br>
<?php
echo "NIM : " . $_POST["nim"] . "<br>" ; 
echo "Nama Mahasiswa : " . $_POST["nama"] . "<br>" ; 
echo "Jenis Kelamin : " . $_POST["jenis_kelamin"] . "<br>" ; 
echo "Agama : " . $_POST["agama"] . "<br>" ; 
echo "Hobi : " ;
if(isset($_POST["bola"]))
    echo "Main Bola" ;
else if (isset($_POST["masak"]))
    echo "Memasak" ;
else if (isset($_POST["belanja"]))
    echo "Belanja" ;
else if (isset($_POST["wisata"]))
    echo "Wisata" ;
else
    echo "Lain-lain" ;
echo "<br>" ; 
echo "Alamat : " . $_POST["alamat"] . "<br>" ; 
?>