<?php 
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu Cafe Ambon</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <h1>Cafe Ambon ☕</h1>
</header>

<h2>Menu Cafe Ambon</h2>

<div class="menu-container">
<?php
$data = mysqli_query($koneksi,"SELECT * FROM menu");
while($d = mysqli_fetch_array($data)){
?>

<div class="card">
    <img src="https://source.unsplash.com/400x300/?coffee" alt="menu">
    <h3><?php echo $d['nama_menu']; ?></h3>
    <p class="kategori"><?php echo $d['kategori']; ?></p>
    <h4>Rp <?php echo number_format($d['harga']); ?></h4>
    <p><?php echo $d['deskripsi']; ?></p>
    <button>Pesan Sekarang</button>
</div>

<?php } ?>
</div>

</body>
</html>
