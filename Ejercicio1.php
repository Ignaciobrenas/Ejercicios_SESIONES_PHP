<?php
// Start the session
session_start();
// ary10,20,30
if (!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = array(10, 20, 30);
}

// to process the form
// if req es post

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// when user click on a button

// reeset logic
if (isset($_POST['reset'])) {
        $_SESSION['numbers'] = array(10, 20, 30);
        unset($_SESSION['average']);
    }
// modify logic
//if isset(modify)
if (isset($_POST['modify'])) {
        $position = $_POST['position'];
        $number = $_POST['value'];

        if ($position !== "" && $number !== "") {
            $_SESSION['numbers'][$position] = $number;
        }
    }
// get form data
//$number = POST["value"]

//$position = POST["position"]

// modify selected position
//array[position] = number;

// average logic
// calculate the average value (sum all values / number of values)
// for array
// total += pos

if (isset($_POST['average'])) {
        $total = 0;

        foreach ($_SESSION['numbers'] as $num) {
            $total += $num;
        }

        $_SESSION['average'] = $total / count($_SESSION['numbers']);
    }



    
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1 - Modificar arrays</h1>
    <form method="post">
        Posicion a Modificar:
        <select name="position">
            <option value="">Selecciona</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <br><br>
        Nuevo Valor: <input type="number" name="value" min="1"><br><br>
        <input type="submit" name="modify" value="MODIFICAR">
        <input type="submit" name="average" value="HACER LA MEDIA">
        <input type="submit" name="reset" value="RESET">
    </form>

    <p>ARRAY ACTUAL: <?php echo implode(", ", $_SESSION['numbers']); ?></p>

    <?php if (isset($_SESSION['average'])) { ?>
        <p>MEDIA DEL ARRAY: <?php echo $_SESSION['average']; ?></p>
    <?php } ?>

</body>

</html>
