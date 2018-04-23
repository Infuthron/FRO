<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="fontawesome-all.js"></script>
    <link rel="stylesheet" href="uploadstyle.css">
    <title>Upload Image</title>
</head>
<body>
<div class="wrapper">
    <div class="topnav">
        <div id="title">
            <a href="feed.php"><img  class="feedlogo" src="siteimg/logo.png" alt="Webstie Logo"></a>
        </div>
        <div class="dropdown">
            <button id="butt1" class="dropbutt"><i class="fas fa-ellipsis-v"></i></button>
            <div id="myDropcontent" class="dropContent show">
                <a class=" topnavLink" href="#">Profile</a>
                <a class=" topnavLink" href="upload.php">Upload</a>
            </div>
        </div>
        <a class="active topnavLink" href="feed.php">Feed</a>
    </div>

    <h1 class="horizontal-center">Upload Foto's</h1>
    <div class=".form__container">
        <div class="form__wrapper" id="upload">
            <form class="form" method="post" action="process_upload.php" enctype="multipart/form-data">
                <!-- <label>
                     <input type="text" id="title" name="title"></label><br><br> -->
                 <div class="fileContainer">
                     <input class="input" type="file" id="file" name="userimage">
                     <input class="upload_button" type="button" value="" name="pic_button" onclick="document.getElementById('file').click()"><br>
                    <strong>Upload File</strong>
                 </div>
                     <input class="input" type="submit" id="confirm" name="submit" value="Confirm"><br>
            </form>
        </div>
    </div>
</div>
</body>
<script src="uploadscript.js"></script>
</html>