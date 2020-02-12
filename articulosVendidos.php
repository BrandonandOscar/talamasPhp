<?php 
require("articulosVendidos.php");

$sql = "SELECT * FROM productos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["IdProducto"]. " - SubCategoria: " . $row["SubCategoria"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
ini_set('memory_limit', '-1');
?>