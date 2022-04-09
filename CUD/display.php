<?php
include 'connect.php';
?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUD operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="jquery.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
        </script>
</head>
<body style="background-image: url('bg.webp');">
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <div class="container">
        <button class="btn btn-primary  my-5"><a href="user.php" class="text-light">Add Customer</a>
        </button>
        <a href="logout.php" class="btn btn-primary">LOGOUT </a>
        <table class="table" id="myTable" style="border:1px solid black">
          <thead>
            <tr>
              <th  scope="col">SI No</th>
              <th scope="col">Company Name</th>
              <th scope="col">Company Website</th>
              <th scope="col">Company Phone Number</th>
              <th scope="col">Company Address</th>
              <th scope="col">Company City</th>
              <th scope="col">Company State</th>
              <th scope="col">Company Country</th>
              <th scope="col">Industry List</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>
        <?php
        $sql="Select * from company";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $website=$row['website'];
                $phno=$row['phno'];
                $address=$row['address'];
                $city=$row['city'];
                $state=$row['state'];
                $country=$row['country'];
                $indlist=$row['indlist'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$website.'</td>
                <td>'.$phno.'</td>
                <td>'.$address.'</td>
                <td>'.$city.'</td>
                <td>'.$state.'</td>
                <td>'.$country.'</td>
                <td>'.$indlist.'</td>
                <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"
                    class="text-light">Update</a></button>
                    <button class="btn btn-danger">
                    <a href="delete.php?deleteid='.$id.'"
                    class="text-light">Delete</a></button>
                </td>
              </tr>';
            }
        }

        ?>
        </tbody>
</table>
    </div>
</body>
</html>