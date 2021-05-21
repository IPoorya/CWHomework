<html>
<body>
<? php

$name = $_post['name'];
$email = $_post['email'];
$comment = $_post['comment'];

$file=fopen("text.txt","w");
echo fwrite($file, "$name");
echo fwrite($file, "$email");
echo fwrite($file, "$comment");
fclose($file);

echo "hi! This is a test from 'test' branch";
echo "the test branch is diffrent from the main, it has two echo commands at the end of the code!";
echo "now it`s three. bye"

?>

</body>
</html> 
