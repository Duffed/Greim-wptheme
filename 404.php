<!doctype html>
<html>
    <head>
        <title>Amshove.it</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <style>
            body {
                height: 100%;
                background: #111;
            }

            a {
                font-size: 8em;
                font-family: "Open Sans";
                text-align: center;
                color: yellow;
                text-shadow:1px 1px 1px black;
                text-decoration: none;
                font-weight: bold;
                position: absolute;
                top:50%;
                outline: 1;
                left: 50%;
                height: 200px;
                width: 300px;
                margin:-100px 0 0 -150px;
            }

            a:hover  {
                color: white;
                text-shadow:1px 1px 1px black;

            }​

        </style>
    </head>
    <body>
        <a href="<?php echo home_url('/')?>">
            404
        </a>
    </body>
</html>
