<?php
$booktarget_dir = "uploads/pdf/";


$booktarget_file = $booktarget_dir . basename($_FILES["pdffileToUpload"]["name"]);

$uploadOk = 1;


$bookFileType = pathinfo($booktarget_file,PATHINFO_EXTENSION);


echo "<html><body><table>\n\n";
$f = fopen(basename( $_FILES["pdffileToUpload"]["name"]), "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
