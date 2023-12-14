
<?php
    include_once('function.php');

    if(isset($_POST['calculate'])) {
        $first_number = $_POST['first_number'];
        $second_number = $_POST['second_number'];

        if(empty($first_number) || empty($second_number)) {
            echo 'Fields must not empty';
        }

        $calculate = new Calculate();
        echo "Summation : " . $calculate->add($first_number, $second_number) . '<br>';
        echo "Subtraction : " . $calculate->sub($first_number, $second_number) . '<br>';
        echo "Multiplication : " . $calculate->mul($first_number, $second_number) . '<br>';
        echo "Division : " . $calculate->div($first_number, $second_number) . '<br>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter The First Number :</label>
        <input type="number" name="first_number">

        <label for="">Enter The Second Number :</label>
        <input type="number" name="second_number">

        <button type="submit" name="calculate" value="calculate">Calculate</button>
    </form>
</body>
</html>