<?php
session_start();
// to initialize the inventory
if (!isset($_SESSION['leche'])) {
    $_SESSION['leche'] = 0;
}
if (!isset($_SESSION['refresco'])) {
    $_SESSION['refresco'] = 0;
}


// to process the form
// when user click on a button
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Get worker name
    $trabajador = $_POST['trabajador'] ?? '';

// detect button (add or remove)
    if (isset($_POST['add'])) {
        // to add products
        // evaluate product
        $product = $_POST['product'] ?? '';
        $quantity = intval($_POST['quantity'] ?? 0);
// add quantity to corresponding product
        if ($product == 'leche') {
            $_SESSION['leche'] += $quantity;
        } elseif ($product == 'refresco') {
            $_SESSION['refresco'] += $quantity;
        }
    } 
    
    elseif (isset($_POST['remove'])) {
// to remove products
// evaluate product
        $product = $_POST['product'] ?? '';
        $quantity = intval($_POST['quantity'] ?? 0);

// check if quantity is not greater than current one
        if ($product == 'leche') {
            if ($quantity > $_SESSION['leche']) {
                $error = "Error: no hay suficientes unidades";
            } else {
// substract from quantity to corresponding product
                $_SESSION['leche'] -= $quantity;
            }
        } elseif ($product == 'refresco') {
            if ($quantity > $_SESSION['refresco']) {
                $error = "Error: no hay suficientes unidades";
            } else {
// substract from quantity to corresponding product
                $_SESSION['refresco'] -= $quantity;
            }
        }
        // RESET
    } elseif (isset($_POST['reset'])) {
        $trabajador = ''; // para limpiar el nombre del trabajador
        // para limpiar el inventario
        $_SESSION['leche'] = 0;
        $_SESSION['refresco'] = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h1>Ejercicio 2 - Gestion de supermercado</h1>

    <h2>Gestion del supermercado</h2>

    <form method="POST">
        <label>Nombre del trabajador:</label>
        <input type="text" name="trabajador" value="<?php echo htmlspecialchars($trabajador ?? ''); ?>" required>
        <br><br>

        <label>Elije un producto: </label>
        <select name="product" required>
            <option value="leche">leche</option>
            <option value="refresco">refresco</option>
        </select>
        <br><br>

        <label>Cantidad de producto: </label>
        <input type="number" name="quantity" min="0" value="0" required>
        <br><br>

        <button type="submit" name="add">AÑADIR</button>
        <button type="submit" name="remove">ELIMINAR</button>
        <button type="submit" name="reset">RESET</button>
        <br><br>

        <strong>Inventory:</strong><br>
        trabajador: <?php echo htmlspecialchars($trabajador ?? ''); ?><br>
        leche: <?php echo $_SESSION['leche']; ?><br>
        refresco: <?php echo $_SESSION['refresco']; ?><br>


    </form>

</body>


</html>