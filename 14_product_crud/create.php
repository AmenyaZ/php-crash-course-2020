
<?php

    $pdo = new PDO('mysql:host = localhost;port = 3307; dbname =product_crud', 'root', 'Amenya98');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   //image=&tittle=&description=&price=

//    $tittle = $_POST['tittle'];
//    $description = $_POST['description'];
//    $price = $_POST['price'];
//    $date = date('Y-m-d H:i:s');
   
//    $pdo-> prepare("INSERT INTO products(tittle, image, description, price, create_date)
//                    VALUE ('$tittle', '', '$description', '$price', $date) 
//                     ");
    if ($_SERVER['REQUEST_METHOD']=== 'POST'){
            $tittle = $_POST['tittle'];
            $description = $_POST['description'];
            $price =$_POST['price'];
            $date = date('Y-m-d H:i:s');

            $statement=$pdo-> prepare("INSERT INTO product_crud.products(tittle, image, description, price, create_date)
                            VALUES(:tittle, :image, :description, :price, :date )  ");
            $statement->bindValue(':tittle', $tittle);
            $statement->bindValue(':image', '');
            $statement->bindValue(':description', $description);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':date', $date);
            $statement->execute();
    }


?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
        <link rel="stylesheet" href="app.css">
        <title>Products CRUD</title>
  </head>
    <body>

        <h1>Create New Product</h1>

        <form action="" method="post">
            <div class="mb-3">
                <label >Product Image</label>
                <input type="file" name="image">
            </div>
            <div class="mb-3">
                <label >Product Title</label>
                <input type="text" name="tittle" class="form-control">
            </div>
            <div class="mb-3">
                <label >Product Description</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label >Product Price</label>
                <input type="Number"  step = ".01" name="price" class="form-control">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
  </body>
</html>
