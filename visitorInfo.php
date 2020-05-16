<?php
include 'header.php';
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] != 'admin')
    {
        header('Location: user.php');
    }
}
else{
    header('Location: index.php');
}
?>
<div class = "article-container">
<h1>Visitor Info</h1>
    <?php
    $title = mysqli_real_escape_string($conn, $_GET['title']);
    
    $sql = "SELECT * FROM tab_organizers WHERE GroupName='$title'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if($queryResult > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='article-box'>
            <h3>".$row['GroupName']."</h3>
            <p>".$row['Datetimestamp']."</p>
            <p>".$row['ContactName']."</p>
            <p>".$row['Address1']."</p>
            <p>".$row['Address2']."</p>
            <p>".$row['City']."</p>
            <p>".$row['Province']."</p>
            <p>".$row['PostalCode']."</p>
            <p>".$row['Country']."</p>
            <p>".$row['Title']."</p>
            <p>".$row['Telephone1']."</p>
            <p>".$row['Telephone2']."</p>
            <p>".$row['FaxNumber']."</p>
            <p>".$row['School Genereal Email']."</p>
            <p>".$row['Email']."</p>
            <p>".$row['HowDidYouHear']."</p>
            <p>".$row['Comments']."</p>
            </div>";
        }
    }
    ?>
</div>
</body>
</html>