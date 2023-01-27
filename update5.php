<?php 

    session_start();
    include('connection.php');
    $S_Id= $_GET['S_Id'];
    $sql = "select * from sale where S_Id='$S_Id'";
    $result = $conn->query($sql);
    
    $row;
    $row = $result->fetch_assoc();
    $_SESSION['S_Id'] = $S_Id;
    
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
        <form action="upd_save5.php?S_Id=<?=$_GET["S_Id"];?>" enctype="multipart/form-data"   method="POST">
            <label for="S_Id" class="form-label">Id Sale</label>
            <input class="form-control" type="text" name="S_Id" value="<?php echo $row['S_Id']; ?>">
            
            <label for="P_Id" class="form-label">Id product</label>
            <input class="form-control" type="text" name="P_Id" value="<?php echo $row['P_Id']; ?>">
            
            <label for="T_Id" class="form-label">Id typee</label>
            <input class="form-control" type="text" name="T_Id" value="<?php echo $row['T_Id']; ?>">

            <label for="C_Id" class="form-label">Id customers</label>
            <input class="form-control" type="text" name="C_Id" value="<?php echo $row['C_Id']; ?>">

            <label for="S_Total" class="form-label">Total</label>
            <input class="form-control" type="text" name="S_Total" value="<?php echo $row['S_Total']; ?>">

            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="ins_form5.php" class="btn btn-primary mt-3">Go Back</a>
         
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
