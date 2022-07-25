<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume/CV Design</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<?php
include 'connection.php';
    $q="SELECT * FROM cv_maker ORDER BY id DESC LIMIT 1";
    $query=mysqli_query($con,$q);
    while($res=mysqli_fetch_array($query)){
?>
<div class="resume">
<div class="resume_left">
    <div class="resume_profile">
    <img src="<?php echo $res['image'];?>" height="100px" width="100px">
    </div>
    <div class="resume_content">
    <div class="resume_item resume_info">
        <div class="title">
        <p class="bold"><?php echo $res['Full_Name'];?></p>
        </div>
        <ul>
        <li>
            <div class="icon">
            <i class="fas fa-map-signs"></i>
            </div>
            <div class="data">
            <?php echo $res['Address'];?> <br /> 
            </div>
        </li>
        <li>
            <div class="icon">
            <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="data">
            <?php echo $res['Phone_No']?>
            </div>
        </li>
        <li>
            <div class="icon">
            <i class="fas fa-envelope"></i>
            </div>
            <div class="data">
            <?php echo $res['Email_Address'];?>
            </div>
        </li>
        <li>
            <div class="icon">
            <i class="fab fa-weebly"></i>
            </div>
            <div class="data">
            <p>www.<?php echo $res['Full_Name'];?>.com </p>
            </div>
        </li>
        </ul>
    </div>
    <div class="resume_item resume_skills">
        <div class="title">
        <p class="bold">skill's</p>
        </div>
        <ul>
        <li>
            <div class="skill_name">
            HTML
            </div>
            <div class="skill_progress">
            <span style="width: 80%;"></span>
            </div>
            <div class="skill_per">80%</div>
        </li>
        <li>
            <div class="skill_name">
            CSS
            </div>
            <div class="skill_progress">
            <span style="width: 70%;"></span>
            </div>
            <div class="skill_per">70%</div>
        </li>
        <li>
            <div class="skill_name">
            SASS
            </div>
            <div class="skill_progress">
            <span style="width: 90%;"></span>
            </div>
            <div class="skill_per">90%</div>
        </li>
        <li>
            <div class="skill_name">
            JS
            </div>
            <div class="skill_progress">
            <span style="width: 60%;"></span>
            </div>
            <div class="skill_per">60%</div>
        </li>
        <li>
            <div class="skill_name">
            JQUERY
            </div>
            <div class="skill_progress">
            <span style="width: 88%;"></span>
            </div>
            <div class="skill_per">88%</div>
        </li>
        </ul>
    </div>
    <div class="resume_item resume_social">
        <div class="title">
        <p class="bold">Social</p>
        </div>
        <ul>
        <li>
            <div class="icon">
            <i class="fab fa-facebook-square"></i>
            </div>
            <div class="data">
            <p class="semi-bold">Facebook</p>
            <p><?php echo $res['Full_Name'];?>@facebook</p>
            </div>
        </li>
        <li>
            <div class="icon">
            <i class="fab fa-twitter-square"></i>
            </div>
            <div class="data">
            <p class="semi-bold">Twitter</p>
            <p><?php echo $res['Full_Name'];?>@twitter</p>
            </div>
        </li>
        <li>
            <div class="icon">
            <i class="fab fa-youtube"></i>
            </div>
            <div class="data">
            <p class="semi-bold">Youtube</p>
            <p><?php echo $res['Full_Name'];?>@youtube</p>
            </div>
        </li>
        <li>
            <div class="icon">
            <i class="fab fa-linkedin"></i>
            </div>
            <div class="data">
            <p class="semi-bold">Linkedin</p>
            <p><?php echo $res['Full_Name'];?>@linkedin</p>
            </div>
        </li>
        </ul>
    </div>
    </div>
</div>
<div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
        <p class="bold">About me</p>
        </div>
        <p>I am student always eager to learn new skills by implementation of competitive and real world projects. I have good leadership and communication skills to work in a team to enhance my skills.</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
        <p class="bold">Work Experience</p>
        </div>
        <ul>
            <li>
                <div class="date"><?php echo $res['Total_Year_Of_Experience'];?></div> 
                <div class="info">
                    <p class="semi-bold">It was great Experience working here.</p> 
                <p><?php echo $res['Detail_Of_Work_Experience'];?></p>
                </div>
        </ul>
    </div>
    <div class="resume_item resume_education">
    <div class="title">
        <p class="bold">Education</p>
        </div>
    <ul>
            <li>
                <div class="date"></div> 
                <div class="info">
                    <p class="semi-bold">Degree Program</p> 
                <p><?php echo $res['Degree_Program']?></p>
                </div>

            
            <div class="date"></div>
            <div class="info">
                    <p class="semi-bold">Degree Year</p> 
                <p><?php echo $res['Degree_Year'];?></p>
                </div>
            </li>
        </ul>
    </div>
    <?php
    }
?>
    <div class="resume_item resume_hobby">
    <div class="title">
        <p class="bold">Hobby</p>
        </div>
    <ul>
        <li><i class="fas fa-book"></i></li>
        <li><i class="fas fa-gamepad"></i></li>
        <li><i class="fas fa-music"></i></li>
        <li><i class="fab fa-pagelines"></i></li>
    </ul>
    </div>
</div>
</div>

</body>
</html>




