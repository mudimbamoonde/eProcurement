<!DOCTYPE html>
<html>

<head>
    <title>Zambeef WebService</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body class='container-fluid'>
  <div class='row'>
  <div class='col-md-5'>
    <?php

    echo "<h1 style='text-alignment:center;'>Welcome to Zambeef Webservice</h1>";
    $dir = "/var/www/html/";
    //open a directory, and read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            echo "<table class='table table-hover'>";
            while (($file = readdir($dh)) !== false) {
                $filename = str_replace(".", "", $file);
                echo "<tr>
          <td><a href='$filename'>" . $filename . "</a></td>
        </tr>";
            }
            echo "</table>";
            closedir($dh);
        }
    }
?>
</div>
</div>
    </body >
    </html > 