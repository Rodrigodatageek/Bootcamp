<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle-form.php" method="POST">
        <label for="">Name</label><br>
        <input type="text"
         name = 'name'
         id='name'
         value="<?= $author->name ?>">
        <br>
        <br>

        <label for="country">Country</label><br>
        <input type="text"
        name="country"
        id="country"
        value="<?= $author->country ?>">
        <br>
        <br>


        <button>Save Author</button>





    </form>
    
</body>
</html>