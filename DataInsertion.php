<?php
include 'connection.php';
session_start();
if(isset($_POST['done']))
{
    $file=$_FILES['file'];
    $Full_Name=$_POST['Full_Name'];
    $Phone_No=$_POST['Phone_No'];
    $Email_Address=$_POST['Email_Address'];
    $Gender=$_POST['Gender'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $Degree_Program=$_POST['Degree_Program'];
    $Degree_Year=$_POST['Degree_Year'];
    $Obtained_Marks=$_POST['Obtained_Marks'];
    $Company_Name=$_POST['Company_Name'];
    $Current_Designation=$_POST['Current_Designation'];
    $Total_Year_Of_Experience=$_POST['Total_Year_Of_Experience'];
    $Detail_Of_Work_Experience=$_POST['Detail_Of_Work_Experience'];
$filename=$file['name'];
$fileerror=$file['error'];
$filetemp=$file['tmp_name'];
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored))
{
        $destinationfile='upload/'.$filename;
        move_uploaded_file($filetemp,$destinationfile);
}
$q="INSERT INTO `cv_maker`(`image`,`Full_Name`, `Phone_No`,`Email_Address`, `Gender`,`DOB`,`Address`,`Company_Name`,`Current_Designation`,`Total_Year_Of_Experience`,`Detail_Of_Work_Experience`,`Degree_Program`,`Degree_Year`,`Obtained_Marks`) 
VALUES ('$destinationfile','$Full_Name','$Phone_No','$Email_Address','$Gender','$DOB','$Address','$Degree_Program','$Degree_Year','$Obtained_Marks','$Company_Name','$Current_Designation','$Total_Year_Of_Experience','$Detail_Of_Work_Experienc')";
    $query=mysqli_query($con,$q);
    header('location:ShowCv.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="col-lg-6 m-auto">
        <form method="post" enctype="multipart/form-data">
        <br><br><div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">PERSONAL INFORMATION</h1>   
            </div> <br>
            <label>PROFILE PICTURE:</label>
            <input type="file" name="file" required class="form-control" ><br>
            <label>NAME:</label>
            <input type="text" name="Full_Name" placeholder="Full Name" required class="form-control" ><br>
            <label>PHONE NO:</label>
            <input type="text" name="Phone_No" placeholder="Phone Number" required class="form-control" ><br>
            <label>EMAIL:</label>
            <input type="text" name="Email_Address" placeholder="Email" required class="form-control"><br>
            <!--label>GENDER:</label>
            <input type="text" name="Gender" placeholder="Email" required class="form-control"><br-->
        
            <label>DATE OF BIRTH:</label>
            <input type="date" name="DOB" placeholder="DOB" required class="form-control"><br>
            <label>ADDRESS:</label>
            <input type="text" name="Address" placeholder="Address" required class="form-control"><br>
            <label>GENDER</label>
            <select type="text" name="Gender">
            <option></option>    
            <option>MALE</option>
                <option>FEMALE</option><br>
                </select><br>
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">EDUCATION INFORMATION</h1>   
            </div> <br>
            <label>DEGREE PROGRAM:</label>
            <input type="text" name="Degree_Program" placeholder="Degree Program" required class="form-control"><br>
            <label>DEGREE YEAR:</label>
            <input type="text" name="Degree_Year" placeholder="Degree Year" required class="form-control"><br>
            <label>OBTAINED MARKS:</label>
            <input type="text" name="Obtained_Marks" placeholder="Obtained Marks" required class="form-control"><br>
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">WORK EXPERIENCE</h1>   
            </div> <br>
            <label>COMPANY NAME:</label>
            <input type="text" name="Company_Name" placeholder="Company Name"required class="form-control"><br>
            <label>CURRENT DESIGNATION:</label>
            <input type="text" name="Current_Designation" placeholder="Current Designation" required class="form-control"><br>
            <label>TOTAL YEAR OF EXPERIENCE:</label>
            <input type="text" name="Total_Year_Of_Experience" placeholder="Total Year Of Experience" required class="form-control"><br>
            <label>DETAIL OF WORK EXPERIENCE:</label>
            <input type="text" name="Detail_Of_Work_Experience" placeholder="Detail Of Work Experience" required class="form-control"><br>
            <button class="btn btn-success" type="submit" name="done"> SUBMIT </button><br> 
            
            <div>

        </form>

    </div>
</body>
</html>