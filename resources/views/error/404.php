<!doctype html>
<html lang="en">
<head>
    <title>Such 404 - wow</title>
    <style>
    body {
        background-image: url("<?= URL::to("img/doge.jpg") ?>");
        background-size: cover;
    }
    div {
        font-family: "Comic Sans MS";
        position: absolute;
        font-size:4em;
    }
    .tilt-left {
        transform:rotate(7deg);
        -ms-transform:rotate(7deg); /* IE 9 */
        -webkit-transform:rotate(7deg); /* Safari and Chrome */
    }
    .tilt-right {
        transform:rotate(-7deg);
        -ms-transform:rotate(-7deg); /* IE 9 */
        -webkit-transform:rotate(-7deg); /* Safari and Chrome */
    }


    #a { top: 5%; left: 20%; color: rgb(255,0,0); }
    #b { bottom: 30%; left: 5%; color: rgb(255,0,0); }
    #c { bottom: 15%; left: 10%; color: rgb(0,0,255); }
    #d { top: 40%; right: 30%; color: rgb(255,255,0); }
    #e { top: 20%; right: 20%; color: rgb(0,255,0); }
    #f { top: 30%; left: 10%; color: rgb(0,255,0); }
    </style>
</head>
<body>
<div id="a" class="tilt-right">Very 404</div>
<div id="b" class="tilt-left">wow</div>
<div id="c">email webmin.head@cserevue.org.au</div>
<div id="d">Page Not fuond</div>
<div id="e" class="tilt-left">Wow</div>
<div id="f" class="tilt-right">such error</div>
<div>
</body>
</html>
