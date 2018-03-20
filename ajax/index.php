<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ajax</title>
</head>

    <body onload="loadDoc()">
        <div class="wrapper">
            <div class="form">
            <form action="">
            Fruit name: <input type="text" id="input1" onkeyup="showHint(this.value)">
            </form>
            <br>
            <p><span id="hello"></span> <br><br><span id="fruitHint"></span></p>
            </div>
        </div>
    </body>

<script>
    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("fruitHint").innerHTML = "";

        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fruitHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "gethint.php?q="+str, true);
        xhttp.send();
    }

    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hello").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "elo.txt", true);
        xhttp.send();
    }
</script>
</html>