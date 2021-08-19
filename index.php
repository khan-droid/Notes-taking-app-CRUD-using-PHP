<?php
  require 'partials\dbconnect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title=$_POST['title'];
    $notes=$_POST['notes'];
    if(strlen($title)!=0 || strlen($notes)!=0){
      $sql = "INSERT INTO `$database`.`notestable` (`title`, `notes`) VALUES ('$title', '$notes');";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Your entry is successfully stored!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      header('location: index.php'); //to avoid adding same data when refreshed
      exit;
      }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript">
        function divide() {
            var txt;
            txt = document.getElementById('a').value;
            var text = txt.split(".");
            var str = text.join('.</br>');
            document.write(str);
        }
    </script>
    <title>Hello, world!</title>
  </head>
  <body class="mx-auto bg-success p-2 text-dark bg-opacity-25"   style="width: 75%;" >
    <h1>Add your notes here</h1>
    <?php
    require 'partials/form.php';
    ?>
    <?php
    require 'partials/table.php'
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>