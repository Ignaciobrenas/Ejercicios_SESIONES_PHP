<?php
// Start the session
session_start();
// ary10,20,30

// to process the form
// if req es post

// when user click on a button
// detect button (modify or average)

// modify logic
//if isset(modify)
// get form data
//$number = POST["value"]
//$position = POST["position"]

// modify selected position
//array[position] = number;

// average logic
// calculate the average value (sum all values / number of values)
// for array
// total += pos


//$avg = total/count(array)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

</head>

<body>
    <h1>Ejercicio 1 - Modificar arrays</h1>
    <form method="post" enctype="multipart/form-data">
        Posicion a Modificar:
        <select name="extension">
            <option value="">--Selecciona--</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>

        </select>
        <br><br>
        Nuevo Valor: <input type="number" name="tamano" min="1"><br><br>
        <input type="submit" value="MODIFY">
        <input type="submit" value="AVERAGE">
        <input type="submit" value="RESET">
    </form>


</body>

</html>