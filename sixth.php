<!-- <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#upload").bind("click", function () {
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xml)$/;
                if (regex.test($("#fileUpload").val().toLowerCase())) {
                    if (typeof (FileReader) != "undefined") {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var xmlDoc = $.parseXML(e.target.result);
                            var customers = $(xmlDoc).find("Customer");

                            //Create a HTML Table element.
                            var table = $("<table />");
                            table[0].border = "1";

                            //Add the header row.
                            var row = $(table[0].insertRow(-1));
                            customers.eq(0).children().each(function () {
                                var headerCell = $("<th />");
                                headerCell.html(this.nodeName);
                                row.append(headerCell);
                            });

                            //Add the data rows.
                            $(customers).each(function () {
                                row = $(table[0].insertRow(-1));
                                $(this).children().each(function () {
                                    var cell = $("<td />");
                                    cell.html($(this).text());
                                    row.append(cell);
                                });
                            });

                            var dvTable = $("#dvTable");
                            dvTable.html("");
                            dvTable.append(table);
                        }
                        reader.readAsText($("#fileUpload")[0].files[0]);
                    } else {
                        alert("This browser does not support HTML5.");
                    }
                } else {
                    alert("Please upload a valid XML file.");
                }
            });
        });
    </script>
    <input type="file" id="fileUpload" />
    <input type="button" id="upload" value="Upload" />
    <hr />
    <div id="dvTable">
    </div>
</body>
</html> -->
<?PHP
$name=$_FILES['file']['name'];
 //  $size=$_FILES['file']['size'];
   //$type=$_FILES['file']['type'];

   $tmp_name=$_FILES['file']['tmp_name'];
   if(isset($name)){
   $location='uploads/';
   if(move_uploaded_file($tmp_name,$location.$name)) echo "Uploaded ";}


$file_handle = fopen($name, "r");

while (!feof($file_handle) ) {

$line_of_text = fgetcsv($file_handle, 1024);


print '<p><div align="center"><table border cellpadding="2" cellspacing="0" width="676" bordercolor="gray" bordercolordark="gray" bordercolorlight="gray"><tr><td>' . $line_of_text[0] . '</td><td>' . $line_of_text[1]. '<tr><td>' . $line_of_text[2] . '</td><td>' . $line_of_text[3]. '<tr><td>' . $line_of_text[4] . '</td></tr></table></div>'


}

fclose($file_handle);

?>
