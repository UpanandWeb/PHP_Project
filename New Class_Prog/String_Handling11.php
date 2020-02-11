<?php



echo"<br>============= String Handling str_word_count() ===================<br>";

$name="HeLLo UpaNANd !";
echo "present ". str_word_count($name)." Word in Sentences";
echo"<br><br>";

$name1="Hi how are you upanand !";
echo "present ". str_word_count($name1)." Word in Sentences";
echo"<br><br>";

$name2="can i meet  you upanand , tomarrow !";
echo "present ". str_word_count($name2)." Word in Sentences";
echo"<br><br>";



echo"<br>============= String Handling strip_tags() ===================<br>";

$name="<h1>HeLLo UpaNANd !</h1>";
echo strip_tags($name,'<h1>');  //<h1>tag is present & Remaing are Removing
echo"<br><br>";

$name1="<h2><i>how are you upanand </i></h2>";
echo strip_tags($name1,'<i>');   //<i>tag is present & Remaing are Removing
echo"<br><br>";

$name2="<h3><i><Strong>can i meet  you upanand , tomarrow </Strong></i></h3>";
echo strip_tags($name2,'<strong>');  //<strong>tag is present & Remaing are Removing
echo"<br><br>";


$name3="<h3><i><Strong>HeLLo UpaNANd ! </Strong></i></h3>!";
echo strip_tags($name3);       //No tag is present & all tag are Removing
echo"<br><br>";


echo"<br>============= String Handling() ===================<br>";


?>