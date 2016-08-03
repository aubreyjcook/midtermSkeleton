<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Hours (Advanced CSS with Skeleton Redo)</title>
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

        <main>
            <div class="row">
                <div class="twelve columns">
                    <table id="hours">
                        <tr>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        <tr>
                            <td>6:00 AM - 10:00 PM</td>
                            <td>6:00 AM - 10:00 PM</td>
                            <td>6:00 AM - 10:00 PM</td>
                            <td>6:00 AM - 10:00 PM</td>
                            <td>6:00 AM - 10:00 PM</td>
                            <td>7:00 AM - 10:00 PM</td>
                            <td>7:00 AM - 1:00 PM</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:500px;width:600px; margin-top: 10px;">
                        <div id="gmap_canvas" style="height:500px;width:600px;">
                            <style>
                                #gmap_canvas img {
                                    max-width: none!important;
                                    background: none!important
                                }
                            </style><a class="google-map-code" href="http://premium-wordpress-themes.org" id="get-map-data">premium-wordpress-themes.org</a></div>
                    </div>
                    <script type="text/javascript">
                        function init_map() {
                            var myOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(35.2199403, -80.75022139999999),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(35.2199403, -80.75022139999999)
                            });
                            infowindow = new google.maps.InfoWindow({
                                content: "<b>The Restaurant</b><br/>2984 Hannah St.<br/>28202 Charlotte"
                            });
                            google.maps.event.addListener(marker, "click", function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                </div>
            </div>

            <div class="row">
                <div class="six columns">
                    <address>
                    2984 Hannah St, <br>
                    Charlotte, <br>
                    North Carolina, 28202
                </address>
                </div>
                <div class="six columns">
                    <p style="padding-left: 40px; font-size: 32px;">
                        (828)-386-0668
                        <br> (337)-735-3481 (Toll Free)
                    </p>
                </div>
                <div style="clear: both;"></div>
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