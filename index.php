<?php
include('./functions.php');
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Olympics</title>
</head>
<body>
  <form class="form" action="" method="POST"
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" placeholder="name">
</div>
         <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Surname</label>
        <input type="text" class="form-control"  placeholder="surname">
</div>
        <div class="form-group col-sm-6">
      <label for="inputEmail4">Sport</label>
      <input type="text" class="form-control"  placeholder="sport">
</div>
      <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Country</label>
      <input type="text" class="form-control"  placeholder="country">
</div>
       <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Gender</label>
      <input type="text" class="form-control"  placeholder="gender">
</div>
       <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Victories</label>
      <input type="text" class="form-control"  placeholder="victories">
    </div>
  <button class="btn btn-primary" type="submit">Prideti</button>
  </form>
</body>
</html>