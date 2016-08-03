<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Menu (Advanced CSS with Skeleton Redo)</title>
    <meta name="description" content="Advanced CSS by Aubrey J Cook">
    <meta name="author" content="Aubrey J Cook">

    <!-- Meta Data
  -------------------------------------------------- -->
    <meta property="og:title" content="Advanced CSS by Aubrey J cook" />
    <meta property="og:description" content="Advanced CSS by Aubrey J Cook">

    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Oxygen' rel='stylesheet' type='text/css'>

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="javascript/javascript.js"></script>

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <div class="row">
            <header class="twelve columns">
                <?php include 'header.php';?>
            </header>
        </div>

        <div class="row">
            <div class="eight columns">
                <p></p>
            </div>
            <div class="four columns">
                <nav>
                    <?php include 'nav.php';?>
                </nav>
            </div>
        </div>
        <div class="row">
            <main class="twelve columns">
                <img src="images/cheeseburger.jpg" style="width: 40%; float: left; margin-top: 48px; margin-bottom: 20px; margin-left: 5px;" alt="cheeseburger" id="menuImage">
                <table id="menu">
                    <tr>
                        <th>Menu Item</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td onmouseover="change01()">Cheeseburger</td>
                        <td>$6.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change02()">Salmon Dinner</td>
                        <td>$11.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change03()">Egg Breakfast</td>
                        <td>$7.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change04()">Pork and Fish</td>
                        <td>$8.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change05()">Fried Shrimp Special</td>
                        <td>$10.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change06()">Vegetarian Noodles</td>
                        <td>$6.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change07()">Asian Stew</td>
                        <td>$6.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change08()">Roast Pork</td>
                        <td>$12.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change09()">Salmon Basil Lunch</td>
                        <td>$9.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change10()">Shrimp Salad</td>
                        <td>$8.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change11()">Vegetarian Pizza</td>
                        <td>$8.99</td>
                    </tr>
                    <tr>
                        <td onmouseover="change12()">Vegetarian Sandwich</td>
                        <td>$6.99</td>
                    </tr>
                </table>
                <p style="width: 40%;" id="menuDescription">
                    Delicious Cheeseburger
                </p>
            </main>
        </div>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </div>

    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>