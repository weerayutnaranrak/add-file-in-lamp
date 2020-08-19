<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.appendgrid@2/dist/AppendGrid.js"></script>
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="container">
    <div class="card mt-5">
    <table class="table table-hover table-bordered table-success m-2 table-sm">
        <thead>
            <th>ID</th>
            <th>Grid1</th>
            <th>Total Grid1</th>
            <th>Grid2</th>
            <th>Total Grid2</th>
            <th>Edit</th>
        </thead>
        <tbody>
            <?php 
            $con= mysqli_connect('localhost','root','','testgrid') or die("Error: " . mysqli_error($con));
            mysqli_query($con, "SET NAMES 'utf8' ");
            $sql = "SELECT * FROM datagrid";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)){
                echo  '<tr >
                <td>'.$row['ID'].'</td>
                <td>'.$row['grid1'].'</td>
                <td>'.$row['totalgrid1'].'</td>
                <td>'.$row['grid2'].'</td>
                <td>'.$row['totalgrid2'].'</td>
                <td><a href="edit.php?id='.$row['ID'].'" class="btn btn-warning" </a>Edit</td>
                </tr>';   
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>