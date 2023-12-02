<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan gejala yang dipilih oleh pengguna
    $selectedGejala = $_POST['gejala'] ?? [];

    // Inisialisasi variabel penyakit yang terdeteksi
    $detectedPenyakit = null;

    // Mengevaluasi gejala dengan pernyataan if
    if (in_array('G001', $selectedGejala) &&
        in_array('G004', $selectedGejala) &&
        in_array('G006', $selectedGejala)) {
        $detectedPenyakit = 'P001';
    } elseif (in_array('G001', $selectedGejala) &&
        in_array('G004', $selectedGejala) &&
        in_array('G008', $selectedGejala)) {
        $detectedPenyakit = 'P002';
    } elseif (in_array('G001', $selectedGejala) &&
        in_array('G004', $selectedGejala) &&
        in_array('G010', $selectedGejala)) {
        $detectedPenyakit = 'P003';
    } elseif (in_array('G001', $selectedGejala) &&
        in_array('G002', $selectedGejala) &&
        in_array('G003', $selectedGejala)) {
        $detectedPenyakit = 'P004';
    } elseif (in_array('G001', $selectedGejala) &&
        in_array('G002', $selectedGejala) &&
        in_array('G003', $selectedGejala) &&
        in_array('G005', $selectedGejala)) {
        $detectedPenyakit = 'P005';
    } elseif (in_array('G001', $selectedGejala)) {
        $detectedPenyakit = 'P006';
    } elseif (in_array('G001', $selectedGejala) &&
        in_array('G002', $selectedGejala) &&
        in_array('G003', $selectedGejala) &&
        in_array('G009', $selectedGejala)) {
        $detectedPenyakit = 'P008';
    } elseif (in_array('G001', $selectedGejala) &&
        in_array('G002', $selectedGejala) &&
        in_array('G003', $selectedGejala) &&
        in_array('G009', $selectedGejala) &&
        in_array('G010', $selectedGejala)) {
        $detectedPenyakit = 'P007';
    }

    // Tabel Keterangan Penyakit
    $keteranganPenyakit = [
        'P001' => 'Diare',
        'P002' => 'Demam Tifoid',
        'P003' => 'Demam Berdarah',
        'P004' => 'Influenza',
        'P005' => 'Pneumonia (radang paru-paru)',
        'P006' => 'Observasi Febris',
        'P007' => 'Tonsillitis (Radang Amandel)',
        'P008' => 'Tonsillopharyngitis (Radang tenggorokan)'
    ];

    // Menampilkan hasil diagnosa
    echo "<h2>Hasil Diagnosa:</h2>";
    if ($detectedPenyakit) {
        echo "<p>Berdasarkan gejala yang Anda pilih, Anda kemungkinan menderita penyakit dengan ID: $detectedPenyakit</p>";
        // Menampilkan tabel keterangan penyakit
        echo "<table border='1'>";
        echo "<caption>Keterangan Penyakit</caption>";
        echo "<tr><th>ID Penyakit</th><th>Nama Penyakit</th></tr>";
        echo "<tr><td>$detectedPenyakit</td><td>{$keteranganPenyakit[$detectedPenyakit]}</td></tr>";
        echo "</table>";
    } else {
        echo "<p>Tidak dapat mendiagnosa penyakit.</p>";
    }
}
?>
