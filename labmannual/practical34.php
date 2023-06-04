<!-- <?php
$file_path = 'E:\new.txt';

$file_contents = file_get_contents($file_path);

echo $file_contents;
?> -->


<!-- <?php
$file_path = 'E:\new.txt';
$file_handle = fopen($file_path, 'r');

while (!feof($file_handle)) {
    $line = fgets($file_handle);
    echo $line;
}
fclose($file_handle);
?> -->


<!-- <?php
$file_path = 'E:\new.txt'; 
$content = "This is the new contnet in the file"; 
file_put_contents($file_path, $content);
echo "Written Successfully";
?> -->

<?php
$file_path = 'E:\new.txt'; 
$content = "This is the new contnet in the file"; 
$file_handle = fopen($file_path, 'w');
fwrite($file_handle, $content);
fclose($file_handle);
?>