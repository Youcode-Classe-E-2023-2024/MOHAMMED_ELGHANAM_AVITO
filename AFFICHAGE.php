<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="w-screen h-full flex flex-col justify-center items-center gap-10">
    <?php
    include_once'CONNECT_BASE.php'; 
    $select_data = "SELECT * FROM med";
    $query = mysqli_query($connect,$select_data);
    

        echo '<h1 class="text-3xl font-bold text-blue-600 "> WELCOM TO MY COMPANY </h1>';
        echo '<div class="w-screen h-fit grid grid-cols-3 place-content-center gap-5 px-5">';

            while ($row = mysqli_fetch_assoc($query)) {


                    echo '<div class="w-64 h-96 flex flex-col justify-center items-center rounded-xl border-solid border-x-2 border-y-2 border-gray-600 gap-3 p-2">';
                            echo '<h1 class="text-xl font-bold text-blue-500 ">' . $row['username'] . '</h1>';
                            echo '<img src="./IMAGE/05.webp" alt="" class="w-56 h-28 rounded-xl">';

                            echo '<p class=" text-center">' . $row['description'] .'</p>';
                            echo '<h3 class="text-base font-bold text-gray-600 text-left">' . 'Prix:' . $row['prix'] . '</h3>';
                        echo '<div class="w-52 h-10 flex  items-center justify-evenly">';

                                echo '<a href="EDIT.php" class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">EDITE</a>';
                                echo '<a href="DELET_WITH_ID.php" class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">SUPPRIME</a>';


                            echo '</div>';
                    echo '</div>';

            }
        echo '</div>';


        echo'<a href="ADD_TACK.php" class=" w-40 h-10 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-sm">Create Annonce</a>';
    ?>
</body>

</html>