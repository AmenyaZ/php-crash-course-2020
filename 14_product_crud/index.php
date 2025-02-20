
<?php

$pdo = new PDO('mysql:host = localhost;port = 3307; dbname =product_crud', 'root', 'Amenya98');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM product_crud.products ORDER BY create_date DESC');
$statement ->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


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

    <h1>Products CRUD</h1>

  <p>
    <a href="create.php" class="btn btn-success">Create Product</a>
  </p>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Tittle</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
     <?php foreach($products as $i=> $product):  ?>

      <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td></td>
            <td><?php echo $product['tittle']?></td>
            <td><?php echo $product['price']?></td>
            <td><?php echo $product['create_date']?></td>
            <td>
            
              <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
              <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
        
            </td>
            
        </tr>
       
      
     <?php endforeach ?>
    </tbody>
</table>
 
  </body>
</html>
