<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Usage Example</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
//var_dump(filesize("file.txt"));
//$myfile = fopen("file.txt", "r") or die("Unable to open file!");
//while(!feof($myfile)) {
//    echo fgets($myfile) . "<br>";
//}
//fclose($myfile);

//$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
//$txt = "John Doe\n";
//fwrite($myfile, $txt);
//$txt = "Jane Doe\n";
//fwrite($myfile, $txt);
//fclose($myfile);

?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

</body>
</html>