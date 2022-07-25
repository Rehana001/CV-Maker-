



<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
</head>
<body>
<div class="container">
    <div class="col-lg-12">
    <br>
    <h1 class="text-warning text-center">VIEW DATA</h1>
    <br>
    <table class="table table-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>PHONE NO</th>
        <th>EMAIL</th>
        <th>GENDER</th>
        <th>DOB</th>
        <th>ADDRESS</th>
        <th>COMPANY NAME</th>
        <th>CURRENT DESIGNATION</th>
        <th>TOTAL YEAR OF EXPERIENCE</th>
        <th>DETAIL OF WORK EXPERIENCE</th>
        <th>DEGREE PROGRAM</th>
        <th>DEGREE YEAR</th>
        <th>OBTAINED MARKS</th>
        </tr>
        <?php
include 'connection.php';
    $q="SELECT * FROM cv_maker ORDER BY id DESC LIMIT 1";
    $query=mysqli_query($con,$q);
    while($res=mysqli_fetch_array($query)){
?>
        <tr class="text-center">
        <td><?php echo $res['id']?></td>
        <td><img src="<?php echo $res['image'];?>" height="100px" width="100px"></td>
        <td><?php echo $res['Full_Name'];?></td>
        <td><?php echo $res['Phone_No']?></td>
        <td><?php echo $res['Email_Address'];?></td>
        <td><?php echo $res['Gender'];?></td>
        <td><?php echo $res['DOB']?></td>
        <td><?php echo $res['Address'];?></td>
        <td><?php echo $res['Company_Name'];?></td>
        <td><?php echo $res['Current_Designation']?></td>
        <td><?php echo $res['Total_Year_Of_Experience'];?></td>
        <td><?php echo $res['Detail_Of_Work_Experience'];?></td>
        <td><?php echo $res['Degree_Program']?></td>
        <td><?php echo $res['Degree_Year'];?></td>
        <td><?php echo $res['Obtained_Marks'];?></td>
        <!--a href="update.php?id=<-?php echo $res['id'];?>" class="text-white" ></a-->
        </tr>
<?php
    }
?>
    </table>
    </div>
</div>

<!--text><-->
<!--button class="btn btn-success" data-target="#mymodel" data-toggle="modal" >OPEN</button-->

    
</body>
</html>
