<?php 

    session_start();
    include('connection.php');
    $Id = $_GET['C_Id'];
    $sql = "select * from customers  where C_Id='$Id'";
    $result = $conn->query($sql);
    
    $row;
    $row = $result->fetch_assoc();
    $_SESSION['C_Id'] = $Id;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Update</h1>
        <hr>
        <form action="upd_save.php?C_Id=<?=$_GET["C_Id"];?>" enctype="multipart/form-data"   method="POST">
            <label for="C_Id" class="form-label">Id</label>
            <input class="form-control" type="text" name="C_Id" value="<?php echo $row['C_Id']; ?>">

            <label for="C_Name" class="form-label">Name</label>
            <input class="form-control" type="text" name="C_Name" value="<?php echo $row['C_Name']; ?>">
            
            <label for="C_Address" class="form-label">Address</label>
            <input class="form-control" type="text" name="C_Address" value="<?php echo $row['C_Address']; ?>">

            <label for="C_Tel" class="form-label">Tel</label>
            <input class="form-control" type="text" name="C_Tel" value="<?php echo $row['C_Tel']; ?>">

            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="ins_form2.php" class="btn btn-primary mt-3">Go Back</a>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
