<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Css/style.css">
        <link rel= "stylesheet" href= "./Css/normalize.css">
        <title>Student Details</title>
    </head>
    <body>
        <header>
             
        </header>
        <?php

        // connecting
        $db = new PDO ('mysql:host=172.31.22.43;dbname=Suvam200511405', 'Suvam200511405', 'j3zMOqIim6');
        // selecting the data by joining the two table to display input in the studentinfo.php
        $sql = 'SELECT student_info.student_id, student_info.student_name, student_info.student_email,student_countryname.student_country
        FROM student_info
         JOIN student_countryname
        ON student_info.student_id = student_countryname.student_id';

        // executing the query
       
        $cmd = $db-> prepare($sql);
        $cmd->execute();

        // fetching all the data stored
        $results = $cmd->fetchAll();

        // creting table
        echo '<table>
              <thead>
              <th> Student ID </th> 
              <th> Name </th>
              <th> Email </th> 
              <th> Country </th>
              </thead>';
        // using the loop to iterate and display the data
        foreach ($results as $result) {    
          echo '<tr>
          <td>'.$result['student_id']. '</td>
          <td>'.$result['student_name']. '</td>
          <td>' .$result['student_email'] .'</td>
          <td>' .$result['student_country'] .'</td>
          </tr>';       
        }
        echo'</table>';
        //disconnect
        $db = null;
        ?>
        
    </body>
</html>