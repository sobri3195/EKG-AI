<!DOCTYPE html>
<html>
<head>
    <title>Interpretasi EKG dengan EKG AI</title>
</head>
<body>
    <h1>Interpretasi EKG dengan EKG AI</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="Unggah" />
    </form>

    <?php
    // Fungsi untuk menginterpretasi EKG dengan menggunakan EKG AI
    function interpretasiEKG($imagePath)
    {
        // Pastikan Anda telah menginstal library EKG AI dan memuatnya di sini
        require 'path/ke/ekg-ai/vendor/autoload.php';

        // Menggunakan library EKG AI untuk interpretasi
        $ekgAI = new EKGAI\Interpreter();
        $interpretasi = $ekgAI->interpretasi($imagePath);

        // Tampilkan hasil interpretasi
        echo "<h2>Hasil Interpretasi:</h2>";
        echo "<pre>" . $interpretasi . "</pre>";
    }

    // Cek apakah tombol submit ditekan
    if (isset($_POST['submit'])) {
        // Pastikan file telah diunggah dengan benar
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $imagePath = $_FILES['file']['tmp_name'];
            // Panggil fungsi interpretasiEKG dengan path gambar
            interpretasiEKG($imagePath);
        } else {
            echo "Terjadi kesalahan dalam mengunggah file.";
        }
    }
    ?>
</body>
</html>
