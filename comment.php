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

?>

</body>
</html> 


hi