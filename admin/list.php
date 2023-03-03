<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
    <title>Document</title>
</head>
<body>
    <?php
    require('nav.php');
    require('get.php');
    ?>
    <div class="container-fluid mt-4">
        <table class="table table-dark table-striped table-hover text-center" style="line-height:40px;margin-right: 3%;"> 
            <thead class="table table-dark">
            <tr> 
                <th colspan="4"><h2>Student Record</h2></th> 
                </tr>
                <tr>
                      <th> Roll No </th> 
                      <th> Name </th> 
                      <th> Username </th> 
                      <th> Password </th> 
                      
                </tr>
                </thead> 
                <tbody class="table-group-divider">
                <?php while($rows=mysqli_fetch_assoc($result)) 
                { 
                ?> 
                <tr> <td><?php echo $rows['rollno']; ?></td> 
                <td><?php echo $rows['sname']; ?></td> 
                <td><?php echo $rows['username']; ?></td> 
                <td><?php echo $rows['password']; ?></td> 
                </tr> 
            <?php 
                       } 
                  ?> 
        </tbody>
        </table>
    </div>     
</body>
</html>