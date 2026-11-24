<?php require_once __DIR__ . '/header.php'; ?>
<section class="content">
<h2>Halaman Home</h2>
<p>Ini adalah konten khusus halaman beranda.</p>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>

<?php
function formatRupiah(float $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function e(string $nilai): string {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}

function konversiCelciusKeFahrenheit(float $c): float {
    return ($c * 9 / 5) + 32;
}

function tentukanStatusNilai(float $nilai): string {
    if ($nilai >= 85) {
        return 'A';
    } elseif ($nilai >= 70) {
        return 'B';
    } elseif ($nilai >= 55) {
        return 'C';
    } elseif ($nilai >= 40) {
        return 'D';
    }
    return 'E';
}

function hitungTotal(float $harga, int $jumlah): float {
    return $harga * $jumlah;
}