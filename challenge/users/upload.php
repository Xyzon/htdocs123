<?php

$db = mysqli_connect("localhost", "root", "", "yt");

if(isset($_POST['yt'])){
    $video_title = ($_POST['title']);
    $yt = $_POST['yt'];
    $secureYt = htmlentities($yt);
    if(!$video_title || !$yt) {
        echo "Please make fill in all inputs";
        exit();
    }else {
        $sql =mysql_query("INSERT INTO cursist(video, video_title, posted_date) VALUES ('$secureYT', '$video_title', now()")or die (mysql_error());
        echo "uploaded... YAY!";
        exit();

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload vid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <h2>Upload a Video</h2>
    <form action="" method="post">
        <strong>Video Title:</strong>
        <br />
        <input type="text" name="title"/>
        <br />
        <strong>Paste your embed code here</strong>
        <br />
        <input type="text" name="yt"/>
        <br />
        <input type="submit" value="Upload Video" />
    </form>
</div>

</body>
</html>
