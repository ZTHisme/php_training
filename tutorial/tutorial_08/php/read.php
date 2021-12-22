<?php
/**
 * Display user input data
 * Can update existing data
 * Can delete data
 */
include 'config.php';
$sql = "SELECT * FROM demo_table";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    if (isset($_GET['id']) && $row['id'] == $_GET['id']) {
        echo "<form action='./php/update.php' method='POST'>";
        echo "<td><input type='text' class='table-res' name='name' value='" . $row['name'] . "'></td>";
        echo "<td><input type='number' class='table-res' name='score' value='" . $row["score"] . "'></td>";
        echo "<td><button type='submit' class='btn'>Save</button></td>";
        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
        echo "</form>";
    } else {
        echo "<tr>";
        echo "<td class='form-deco'>" . $row['name'] . "</td>";
        echo "<td class='form-deco'>" . $row['score'] . "</td>";
        echo "<td class='form-deco'><a href='index.php?id=" . $row["id"] . "' class='btn'>Update</a></td>";
        echo "<td class='form-deco'><a href='./php/delete.php?id=" . $row["id"] . "' class='btn btn-sec'>Delete</a></td>";
        echo "</tr>";
    }
}
$conn->close();

?>