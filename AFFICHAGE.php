<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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

            
       ?>
    </table>
    <button class="w-36 h-10 rounded-xl text-white bg-red-600"><a href="ADD_TACK.php">Creat annonce</a></button>
    <button class="w-36 h-10 rounded-xl text-white bg-red-600"><a href="EDIT.php">Edit annonce</a></button>
    <button class="w-36 h-10 rounded-xl text-white bg-red-600"><a href="ADD_ID.php">Supprimer annonce</a></button>

        
</body>
</html>






















