<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/header.php';

$harga  = 25000;
$jumlah = 4;
$total  = hitungTotal($harga, $jumlah);
?>

<section class="content">
    <h2>Latihan 2: Total Belanja</h2>
    <p>Harga satuan: <?php echo formatRupiah($harga); ?></p>
    <p>Jumlah: <?php echo $jumlah; ?></p>
    <p>Total: <?php echo formatRupiah($total); ?></p>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>