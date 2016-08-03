<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Home (Advanced CSS with Skeleton Redo)</title>
    <meta name="description" content="Advanced CSS by Aubrey J Cook">
    <meta name="author" content="Aubrey J Cook">

    <!-- Meta Data
  -------------------------------------------------- -->
    <meta property="og:title" content="Advanced CSS by Aubrey J cook" />
    <meta property="og:description" content="Advanced CSS by Aubrey J Cook" />

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
            <div class="eight columns"><p></p></div>
            <div class="four columns">
            <nav>
                <?php include 'nav.php';?>
            </nav>
            </div>
        </div>
        <main>
            <div class="row ">
                <div class="seven columns " <p style="width: 50%; margin-left: 20px; padding-top: 46px; float: left; font-size: 22px; ">
                    Ready for the dining outing experience of your life? Come visit Origama G's for breakfast, lunch, and dinner. We've been serving in North Carolina for over 45 years with the top chefs of the world. During 1961 two Mark 39 atomic bombs were accidentally dropped in North Carolina when the airship carrying them suffered a failure. While the bombs never detonated because of a failsafe and the bomb's payload was mostly cleaned up, one of the secondary Uranium shell encasings of the bomb was never found and recovered. As a result of this fantastic historic occurence, all our food is enhanced with the delicious taste of 100% enriched Uranium-238!
                    <br>
                    <br> Visiting Origamas you will be greeted by our friendly staff, where our tables are waited by the best. Explore our cuisine, whether famous local dishes from our area or exotic new foods from overseas. Our chefs provide the best quality cooking combined with high quality ingreidients, while our waiters provide excellent service. Enjoy your time at our restaurant.
                    </p>
                </div>
                <div class="five columns ">
                    <img src="images/tableSet.jpg " style="max-width: 500px; float: right; margin-top: 5px; margin-right: 20px; " class="firstpage ">
                </div>
            </div>
            <div class="row ">
                <div class="twelve columns ">
                    <div style="clear: both; padding-top: 10px; text-align: center; ">
                        <img src="images/cookFrying.jpg " style="padding-right: 20px; width: 30%; " class="firstpage ">
                        <img src="images/cookedSalmon.jpg " style="width: 30%; " class="firstpage ">
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="five columns ">
                    <img src="images/diningTable.jpg " style="max-width: 400px; float: left; margin-top: 5px; margin-left: 20px; margin-bottom: 5px; " class="firstpage ">
                </div>
                <div class="seven columns ">
                    <p style="width: 50%; margin-left: 20px; float: right; font-size: 22px; ">
                        Stop by Origama's for our breakfast specials. Bring your family for an extra discount. Veteran discounts are available. In an effort to help the needy first time customers coming alone can receive a free meal with certain options on our menu and a coffee.
                    </p>
                </div>
            </div>
        </main>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </div>

    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>