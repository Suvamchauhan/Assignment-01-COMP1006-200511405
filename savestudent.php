<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Css/style.css">
        <link rel= "stylesheet" href= "./Css/normalize.css">
        <title>Saving Information</title>
    </head>
    <body>
        <?php

        //variable assigned for each input in a form
            $student_name= $_POST['student_name'];
            $student_email=$_POST['email'];
            $student_id=$_POST['student_id'];
            $student_country=$_POST['country'];
        //validating using PHP too
            $ok= true;

            if(empty($student_name)){
                echo '<p class = "error">Full Name required.</p>';
                $ok= false;
            }
            if(empty($student_email)){
                echo '<p class = "error">Email required.</p>';
                $ok=false;
            }
            //validation check for email
            if (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {
                echo '<p class="error">Email format is invalid.</p>';
                $ok = false;   
            }
            
            if(empty($student_id)){
                echo '<p class = "error">Student Number required.</p>';
                $ok=false;
            }
            if(empty($student_country)){
                echo '<p class = "error">Country Name requried.</p>';
                $ok=false;
            }
            

            //connects to db if all the condtions were never false.
            if($ok== true){
                $db = new PDO ('mysql:host=172.31.22.43;dbname=Suvam200511405', 'Suvam200511405', 'j3zMOqIim6');
                //      if ($db) {
                //     echo 'Connected';
                //  }
                // else {
                //     echo 'Connection Failed';
                // }

                    //inserting data into dB with a table name student_info

                $s_sql = 'INSERT INTO student_info(student_id, student_name, student_email) 
                    VALUES( :student_id, :student_name, :student_email)';

                    $s_cmd = $db->prepare($s_sql);
                    $s_cmd->bindParam(':student_id',$student_id, PDO::PARAM_INT);
                    $s_cmd->bindParam(':student_name',$student_name, PDO::PARAM_STR, 100);
                    $s_cmd->bindParam(':student_email',$student_email, PDO::PARAM_STR, 100);

                //inserting country name data  to db with table student_countryname .
                
                $c_sql = 'INSERT INTO student_countryname(student_id, student_country) 
                    VALUES( :student_id, :student_country)';

                    $c_cmd = $db->prepare($c_sql);
                    $c_cmd->bindParam(':student_id',$student_id, PDO::PARAM_INT);
                    $c_cmd->bindParam(':student_country', $student_country, PDO::PARAM_STR, 50);
  
                // execute the insert
                 $s_cmd->execute();
                 $c_cmd->execute();

                // disconnect
                $db = null;

                // form completion msg
                echo '<p id= "mainp"> Thank you for registering your data.</p>';
            }

        ?>
    </body>
</html>