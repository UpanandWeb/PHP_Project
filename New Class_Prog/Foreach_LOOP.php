

<?php    
/* First method to create an associate array. */
$student_one = array("Maths"=>95, "Physics"=>90,   
                  "Chemistry"=>96, "English"=>93,   
                  "Computer"=>98);  
    
/* Second method to create an associate array. */
$student_two["Maths"] = 95;  
$student_two["Physics"] = 90;  
$student_two["Chemistry"] = 96;  
$student_two["English"] = 93;  
$student_two["Computer"] = 98;  
    
/* Accessing the elements directly */
echo "Marks for student one is:\n";  
echo "<br>";
echo "Maths:" . $student_two["Maths"], "\n";  
echo "<br>";
echo "Physics:" . $student_two["Physics"], "\n"; 
echo "<br>"; 
echo "Chemistry:" . $student_two["Chemistry"], "\n";  
echo "<br>";
echo "English:" . $student_one["English"], "\n";  
echo "<br>";
echo "Computer:" . $student_one["Computer"], "\n";  


echo "<br><br>";

/* Creating an associative array */
$student_one = array("Maths"=>95, "Physics"=>90,   
                  "Chemistry"=>96, "English"=>93,   
                  "Computer"=>98);  
    
    
/* Looping through an array using foreach */
echo "Looping using foreach: \n";  
echo "<br>";
foreach ($student_one as $subject => $marks){  
    echo "Student one got ".$marks." in ".$subject."\n";  
	echo "<br>";
}  
 
echo "<br>"; 
/* Looping through an array using for */
echo "\nLooping using for: \n";  
echo "<br>";
$subject = array_keys($student_one);  
$marks = count($student_one);   
    
for($i=0; $i < $marks; ++$i) {  
    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n";  
	echo "<br>";
} 

?> 