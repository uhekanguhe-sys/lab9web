<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/header.php';
?>

<section class="content">
    <h2>Latihan 1: Suhu dan Nilai</h2>
    <p>37 derajat Celcius = <?php echo konversiCelciusKeFahrenheit(37); ?> derajat Fahrenheit</p>
    <p>Nilai 78 mendapat predikat <?php echo e(tentukanStatusNilai(78)); ?></p>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>