<?php
function head($title, $activepage)
{
    ob_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <style>
            * {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }


            .nav {
                display: flex;
                width: max-content;
            }

            .item {
                flex: 1;
                margin-right: 10px;
                background: #f6f6f6;
                font-size: 18px;
                padding: 7px 18px;
                border-radius: 4px;
                text-decoration: none;
                color: #504f4f;
            }

            .item:hover {
                background: #e7e7e7;
            }

            .item.active {
                background: #d9e8ff;
                color: #1f57dd;
            }

            .item.active:hover {
                background: #c7ddff;
            }
        </style>
    </head>

    <body>

        <?php
        require_once 'header.php';

        $pages = array("index", "about");

        echo "<div class='nav'>";

        foreach ($pages as $page) {
            if ($page == $activepage) {
                echo "<a href='$page.php' class='item active'>$page</a>";
            } else {
                echo "<a href='$page.php' class='item'>$page</a>";
            }
        }

        echo "</div>";

        return ob_get_clean();
    }

    function footer()
    {
        ob_start(); ?>
        <script src="instantclick.min.js"></script>
        <script data-no-instant>
            InstantClick.init();
        </script>
    </body>

    </html>
<?php
        return ob_get_clean();
    }
