<?php

$templateFiles = array();

/**
 * List e-mail templates in a directory. Templates begin with "confirmation_" and end with ".txt".
 */
function listTemplates() {
    $dir = ".";
    $directoryContents = scandir($dir);
    foreach($directoryContents as $file) {
        if(0 === strpos($file, "confirmation_", 0)) {
            echo "<li>$file</li>";
            $templateFiles[] = $file;
            $contents = file_get_contents($file);
            echo "<div class=\"file-contents\"><span>$contents</span></div>";
        }
    }
}
?>
<html>
<head><title>phpIPN Template Administration</title></head>
<style type="text/css">
body {
    background-color: #682189;
    font-family: arial;
    color: white;
}
</style>
<body>
<h1>phpIPN Template Administration</h1>
<span>Files:</span>
<ul>
<?php listTemplates(); ?>
</ul>
</body>
</html>
