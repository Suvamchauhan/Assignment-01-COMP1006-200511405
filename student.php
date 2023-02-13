<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Css/style.css">
        <link rel= "stylesheet" href= "./Css/normalize.css">
        <title>Student Information</title>
    </head>
    <body>
        <header>
            
            <nav>
                <ul>
                    <li><a href="Student_info.php">Student List</a></li>
                    
                </ul>
            </nav>
           
        </header>

        <div id="container">
        <h1>Welcome to Student Profile Creator</h1>
            <table border="1" >
                            <!-- Name and Personal data Input through form.-->
                <form action="savestudent.php" method="post">
                         <tr>   

                                <td> <label for="student_name">Full Name:</label></td>
                                <td>    <input type="text" id="student_name" name="student_name" required maxlength= "50"></td>
                                
                        </tr>       
                         <tr>
                            
                               <td> <label for="email">Email:</label></td>
                               <td><input type="email" id= "email" name="email" required placeholder="suvamchauhan@gmail.com"></td>
                                
                         <tr>
                                <td><label for="team_id">Student Id:</label></td>
                                <td> <input type="number" id= "student_id" name= "student_id" required placeholder="123455"></td>
                        </tr>   
                        
                        <tr>
                                
                                <td> <label for="country">Country:</label></td>
                                <td> <select name="country" id="country" required>
                                    <option value="" disabled selected hidden>Select a country</option>
                                    <option value="Canada">Canada</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Others">Others</option>
                                </select></td>
                        </tr>
                            
                                <!-- button -->
                        <tr><td>    <button type="submit">Submit</button> </td></tr>
                    
               </form>
            </table>   
         </div>

    </body>
</html>