
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <hr>
        <h1 class="mt-2">เพิ่มข้อมูลประเภทสินค้า</h1>
        <hr>
        
<div class="mb-2">
<form  action="create3.php" method="post">
            <div class="mb-3">
                <label for="T_Id" class="form-label">Id</label>
                <input type="text" class="form-control" name="T_Id" required>
            </div>
            <div class="mb-3">
                <label for="T_Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="T_Name" required>
            </div>
            <button type="submit" class="btn btn-success mr-2">Create</button>
            <a class="btn btn-success mr-2" href="index.php">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

<table id="mytable" class="table table-bordered table-striped mt-2">
        <thead>

<tr>
<th>Id</th> 
<th>Name</th>
<th>Update</th>
<th>Delete</th>

</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM typee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {

echo '<tr>';
echo '<td>'. $row['T_Id'] . '</td>';
echo '<td>'. $row['T_Name'] . '</td>';
echo '<td><a role="button"  href="update3.php?T_Id='.$row['T_Id'].'" class="btn btn-primary">update</a></td>';
echo '<td><a role="button"  href="delete3.php?T_Id='.$row['T_Id'].'" class="btn btn-danger">delete</a></td>';
echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
</html>