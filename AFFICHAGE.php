<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" width="90%">
        <tr>
        <th>USERNAME</th>
        <th>DESCRIPTION</th>
        <th>PRIX</th>
        </tr>

        <?php 
            include_once'CONNECT_BASE.php'; 
            $select_data = "SELECT * FROM med";
            $query = mysqli_query($connect,$select_data);
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";  // Use $row instead of $fetch
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['prix'] . "</td>";
                echo "</tr>";
            }

            // print_r($fetch);
            // while ($fetch) {
            //     echo "<tr>";
            //     echo "<td>" . $fetch['username'] . "</td>"; 
            //     echo "<td>" . $fetch['description'] . "</td>";
            //     echo "<td>" . $fetch['prix'] . "</td>";
            //     echo "</tr>";
            // }
       ?>
    </table>

        
</body>
</html>






















