<?php
    include('components/header.php');
    include("config/config.php");
    ob_start();
    $errors = array();
    $message = array();
?>
    <div class="heroic-header">
        <h1 class="heroic-title">Teachers</h1>
    </div>
<?php
 if($_SERVER["REQUEST_METHOD"] == "GET"){
    $sql = "SELECT * FROM teacher";
    $result = mysqli_query($db,$sql);
    echo '<div class="grid-container">
            ';
    while($row = mysqli_fetch_array($result)){
        echo '<div class ="grid-item">
                <div class="teachersCard">
                    <img style="width:250px; height:auto;" src="'.(($row['profile_img'])?($mainPage.'uploads/users/profile-picture/'.$row['profile_img']):($mainPage.'res/avatar.png')).'" alt="Avatar Image">  
                    <h1 class="cardTitle">'.$row['first_name']." ". $row['last_name'].'</h1>
                    <h4 class="cardUsername">'."@".$row['username'].'</h4>
                    <h4 class="cardEmail">'.$row['email'].'</h4>
                    <a href="'.$mainPage.'view_teacher.php?teacherID='.$row['username'].'">
                        <button class="button buttonGreen">View Profile</button>
                    </a>
                </div>
            </div>
        ';
    }
        echo '</div>';
}
?>
<?php 
include('components/footer.php');
?>