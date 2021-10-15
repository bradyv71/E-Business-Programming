<?php
if (isset($_POST['submit'])){
    $first =$_POST['first'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $split=$_POST['split'];
    $shuffle =$_POST['shuffle'];
    $tolower = $_POST['tolower'];
    $compare1=$_POST['compare1'];
    $compare2 = $_POST['compare2'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $currency=$_POST['currency'];
    $year=$_POST['year'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $hour=$_POST['hour'];
    $minute=$_POST['minute'];
    
    echo "1. Combining the first, last, and middle name to display as: [first name] [middle initial]. [last name] <br/>$first $middle[0]. $last<br/><br/>";
    $arr_ph = explode("-",$split);

    //foreach loop to display the returned array
    echo"2. Spliting the following string on each dash - character<br/>";
    foreach($arr_ph as $i){
        echo "$i ";
    }
    echo "<br/><br/>3.Randomly shuffle and output the value for the following string.<br/>";
 
    echo str_shuffle($shuffle);
    echo"<br/><br/>4. Converting the following to all lowercase and output the value.<br/>";
    echo strtolower($tolower);
    echo "<br/><br/>";
    echo"5.strcmp() and strcasecmp() to compare the following values.<br/>";
    echo "Using strcmp() : ".strcmp($compare1,$compare2);
    echo"<br>";
    echo "Using strcasecmp() : ".strcasecmp($compare1,$compare2);
    echo"<br/>";
    echo"<br/>6. finding the minimum, maximum, and average values.<br/>";
    echo "minimum value : ".min($num1,$num2);
    echo"<br/>";
    echo "maximum value : ".max($num1,$num2)."<br/>Average Value : ".($num1+$num2)/2 ."<br/><br/>";
    echo"7. A random integer between 0 and 100 : <br/>".(rand(0,100))."<br/><br/>";
    echo "8. Using of sprintf() :".sprintf("<br/>$%1\$.2f<br/>",$currency)."<br/><br/>";
    echo "9. Two different format of date and Time <br/>$day-$month-$year $hour:$minute <br/>";
    $monthName = date("F", mktime(0, 0, 0, $month, 10));
    echo "$monthName $day, $year, $hour:$minute <br/><br/>";
    $d=mktime($hour,$minute,0,$month,$day,$year);
    
    $date1= date("Y-m-d h:i:sa", $d);
    $date2= date("Y-m-d h:i:sa");
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
    echo "10. Calculating how many hours there are from now until then.<br/>". $hour = abs($timestamp1 - $timestamp2)/(60*60) . " hour(s) left";


}


?>