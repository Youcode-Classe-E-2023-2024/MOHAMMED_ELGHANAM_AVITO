<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="w-screen h-screen flex justify-center items-center bg-orange-900">
    <form action="EDIT_TRETMENT.php" method="post" class="w-60 h-96 flex flex-col justify-center items-center gap-2 bg-slate-500 rounded-3xl p-3">
        <h1 class="text-white text-center font-bold text-2xl">ADD ANNONCE</h1>
        <h3 class="text-white flex text-start">ADD ID</h3>
        <input type="text" name="id" class="h-8 rounded-lg">
        <h3 class="text-white flex text-start">ADD NOM</h3>
        <input type="text" name="nom" class="h-8 rounded-lg">
        <h3 class="text-white">ADD DESCRIPTION</h3>
        <input type="text" name="desc" class="h-8 rounded-lg">
        <h3 class="text-white" >ADD PRIX</h3>
        <input type="text" name="prix" class="h-8 rounded-lg">
        <input type="submit" value="send" name="send" class="h-8 w-12 bg-red-500 pos rounded-lg text-white">
        
    </form>
</body>
</html>