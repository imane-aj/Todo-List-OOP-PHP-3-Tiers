<?php 
    include_once("../logic/taskLogic.php");

    if(!empty($_POST)){
      $validation = new taskLogic($_POST);
      $validation->insertlogic();
      // db
      
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .hero{
        margin-top:4em;
        padding: 24px;
        background: #b4b1b1;
      }
      h3{
        margin-bottom: 1em;
        color: darkolivegreen;
      }
      .add{
        border: unset;
        padding: 0px 27px;
        background: #556b2f;
        color: #fff;
      }
      .error{
        margin-top: -6px;
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hero">
              <h3>Todo List With Php Poo & 3 Tiers</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="task" >
                      <input type="submit" class="add" value="submit" name="submit">
                    </div>
                </form>



          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>