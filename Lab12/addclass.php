<?php 

session_start();
include'server.php';

if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Add Course</title>

        <script>
               // function addClass(crn,semester){
                       // window.open('addclass.php?crn=' + crn + '&semester=' + semester);

                }
        </script>
        
</head>
<body>
<center>
        <div>
                <h1>Add Course</h1>
                
                <form action="" method="POST">
                        <table>
                                <tr>
                                        <td>Crn: </td><td><input type="text" name="crn" required=""></td>

                                </tr>
                                <tr>
                                        <td>Course ID: </td><td><input type="text" name="course_id" required=""></td>
                                        
                                </tr>
                                <tr>
                                        <td>Title: </td><td><input type="text" name="title" required=""></td>
                                        
                                </tr>
                                
                                <tr>
                                        <td>Room: </td><td><input type="text" name="room" required=""></td>
                                        
                                </tr>
                                <tr>
                                        <td>Days: </td><td><input type="text" name="days" required=""></td>
                                        
                                </tr>
                                <tr>
                                        <td>Times: </td><td><input type="number" name="times" required=""></td>
                                        
                                </tr>
                        </table>
        
                <input type="submit" name="Add" value="Add">
        </form>
        </div>
        <a href="index.php">Courses</a>
</center>
</body>
</html>
<?php
  if(isset($_POST['Add']))
  {
        $crn=$_POST['crn'];
        $course_id=$_POST['course id'];
        $title = $_POST['title'];
        $room = $_POST['room'];
        $days= $_POST['days'];
        $times = $_POST['times'];
        if(!empty($crn)||!empty($course_id)||!empty($title)||empty($room)||empty($days)||empty($times)){

                if (mysqli_connect_error())
                {
                        die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
                }
                else
                {
                        
                        $SELECT="SELECT crn From sections where crn=? Limit 1";
                        $INSERT="INSERT Into sections(crn,course_id,title,room,days,times) values (?,?,?,?,?,?)";
                        $stmt=$conn->prepare($SELECT);
                        $stmt->bind_param("s",$crn);
                        $stmt->execute();
                        $stmt->bind_result($crn);
                        $stmt->store_result();
                        $rnum=$stmt->num_rows;

                        if($rnum==0)
                        {
                                $stmt->close();
                                $stmt=$conn->prepare($INSERT);
                                $stmt->bind_param("ssss",$crn,$course_id,$title,$room,$days,$times);
                                $stmt->execute();
                                echo "New recored added successfully";
                        
                                $stmt->close();
                        $conn->close(); 
                                
                         exit;
                                }
                        else
                        {
                                echo "Alredy in database";      
                        $stmt->close();
                        $conn->close(); 
                                
                        exit;
                        }
                }
        }
        else
        {
                echo "All field are required";
                die();
        }
  }
 ?>