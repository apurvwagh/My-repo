<html>
<body>
<h1>Hello Everyone, This is task1</h1>
   
<h3>This is my picture which is come from s3 bucket and cloudfront.</h3>
<h2> Thank You </h2>
<?php
   $cloudant_url=`head -n1 path.txt`;
   $img_path="https://".$cloudant_url."/terraform.png";
   echo "<br>";
   echo "<img src='${img_path}' width=100 height=100>";
?>
</body> 
</html> 
