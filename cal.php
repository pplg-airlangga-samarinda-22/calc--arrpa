<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #f9f9f9;
        }
        input, select, button {
            margin: 10px;
            padding: 8px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Kalkulator Sederhana</h2>
    <form method="POST">
        <input type="number" name="bilangan1" step="any" placeholder="Masukkan bilangan pertama" required>
        <br>
        <input type="number" name="bilangan2" step="any" placeholder="Masukkan bilangan kedua" required>
        <br>
        <select name="operator">
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (*)</option>
            <option value="/">Bagi (/)</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $bilangan1 = floatval($_POST['bilangan1']);
        $bilangan2 = floatval($_POST['bilangan2']);
        $operator = $_POST['operator'];
        $hasil = 0;

        function tambah($a, $b) { return $a + $b; }
        function kurang($a, $b) { return $a - $b; }
        function kali($a, $b) { return $a * $b; }
        function bagi($a, $b) { return ($b != 0) ? $a / $b : "Error: Tidak bisa membagi dengan nol!"; }

        switch ($operator) {
            case "+": $hasil = tambah($bilangan1, $bilangan2); break;
            case "-": $hasil = kurang($bilangan1, $bilangan2); break;
            case "*": $hasil = kali($bilangan1, $bilangan2); break;
            case "/": $hasil = bagi($bilangan1, $bilangan2); break;
            default: $hasil = "Operator tidak valid!"; break;
        }

        echo "<h3>Hasil: $bilangan1 $operator $bilangan2 = $hasil</h3>";
    }
    ?>

</body>
</html>
