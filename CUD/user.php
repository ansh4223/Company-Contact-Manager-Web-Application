<?php
 include 'connect.php';
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $website=$_POST['website'];
     $phno=$_POST['phno'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $country=$_POST['country'];
     $indlist=$_POST['indlist'];
    $sql="insert into company(name,website,phno,address,city,state,country,indlist)
    values('$name','$website','$phno','$address','$city','$state','$country','$indlist')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CUD Operation</title>
  </head>
  <body style="background-image: url('Index_page.jpg');">
        <div class="container my-5">
            <form method="post">
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control"placeholder="Enter Company name" name="name"autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Company Website</label>
                    <input type="url" class="form-control"placeholder="Enter Company Website" name="website"autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Company Phone Number</label>
                    <input type="tel" class="form-control"placeholder="Enter Company Phone Number" name="phno"autocomplete="off" required>
                    </div>
                <div class="form-group">
                    <label>Company Address</label>
                    <input type="text" class="form-control"placeholder="Enter Company Address" name="address"autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Company City</label>
                    <input type="text" class="form-control"placeholder="Enter Company City" name="city"autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Company State</label>
                    <input type="text" class="form-control"placeholder="Enter Company State" name="state"autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Company Country</label>
                    <input type="text" class="form-control"placeholder="Enter Company Country" name="country"autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Industry List</label>
                    <select name="indlist" required>
                        <option value="Account">Account</option>
                        <option value="IT">IT</option>
                        <option value="Sales">Sales</option>
                        <option value="Health Care">Health Care</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>