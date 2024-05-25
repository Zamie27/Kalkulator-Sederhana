<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .calculator input[type="number"],
        .calculator select,
        .calculator input[type="submit"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .calculator input[type="submit"] {
            background-color: #38bdf8;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .calculator input[type="submit"]:hover {
            background-color: #64748b;
        }
        .title {
            text-align: center;
            margin-top: 20px;
        }
        .creator {
            text-align: center;
            font-weigth: 100;
            opacity: 75%;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1 class="title">Quiz Kalkulator Sederhana</h1>
        <p class="creator">Muhammad Ridho Al Zamzami | D1A230109</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Angka 1: <input type="number" name="angka1" required />
            Angka 2: <input type="number" name="angka2" required />
            Operasi: 
            <select name="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="submit" value="Hitung" />
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];

            switch ($operasi) {
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    $hasil = $angka1 / $angka2;
                    break;
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                default:
                    $hasil = 'Operasi tidak valid';
            }
            echo "<div class='result'>Hasil: $hasil</div>";
        }
        ?>
    </div>
</body>
</html>
