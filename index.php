<?php
  include 'conn.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <h1 class="center">PHP QUSTION</h1>
    <form action="" method="POST" class="form">
            <?php 
                  $i=1;
                  $option="option";
                   $sql='SELECT * from  php_qstion;';
                   $result=$conn->query($sql);
                 while ( $row =$result->fetch_assoc()){
                    echo  "<div class='pading'>";
                    echo $i.")".$row['QUSTION'];
                    echo"<br>";
                    echo "<input type='radio' name=$option$i value='OPTION1' id='' class='inline'>";      
                    echo $row['OPTION1'].'<br>';
                    echo "<input type='radio' name=$option$i value='OPTION2' id='' class='inline'>";      
                    echo $row['OPTION2'].'<br>';
                    echo "<input type='radio' name=$option$i value='OPTION3' id='' class='inline'>";      
                    echo $row['OPTION3'].'<br>';
                    echo "<input type='radio' name=$option$i value='OPTION4' id='' class='inline'>";      
                    echo $row['OPTION4']."<br>"; 
                    echo "</div>";
                    $i+=1;
                 } 
            ?>
            <div class="submit-class">
              <input type="submit" value="SUBMIT" class="submit-button">
            </div>
    </form>

</body>
</html>
