<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Save</title>
</head>

<body>
    <?php
    error_reporting(0);
    for ($i = 1; $i <= 5; $i++) {
        $nameFile = 'FILE-' . $i . '.txt';
        $file = fopen($nameFile, "w") or die("Unable to open file!");
        if (file_exists($nameFile)) {
            unlink($nameFile);
            $txt = "COLOUMN 1 || COLOUMN 2\n";
            fwrite($file, $txt);
            $txt = "https://url-number" . $i . " || VALUE " . $i;
            fwrite($file, $txt);
            fclose($file);
        }
    }
    echo 'Done !!';
    ?>
</body>

</html>