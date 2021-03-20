<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transfer Money</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/table.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <style type="text/css">
        button{
        transition: 1.5s;
        }
        button:hover{
        background-color:#616C6F;
        color: white;
        }
        </style>
    </head>
    <body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-flude"><!--
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets\img\PicsArt_12-25-03.57." height="130" width="170" alt="" /></a> -->
    <button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu
    <i class="fas fa-bars ml-1"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase text-info ml-auto">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="view.php">View Custmers</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="transactionhistory.php">View Transfer History</a></li>
      </ul>
    </div>
  </div>
</nav>


        <?php
        include 'config.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
        ?>
        <?php
       
        ?><br><br><br><br>
        <div class="container">
            <h2 class="text-center pt-4">Transfer Money</h2>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center py-2">Id</th>
                                    <th scope="col" class="text-center py-2">Name</th>
                                    <th scope="col" class="text-center py-2">E-Mail</th>
                                    <th scope="col" class="text-center py-2">Balance</th>
                                    <th scope="col" class="text-center py-2">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($rows=mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name']?></td>
                                    <td class="py-2"><?php echo $rows['email']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    <td><a href="transact.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>