<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Taiwan Vegetarian Map</title>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
</head>

<body>
    <header>
        <h1><a href="index.html"><img src="twn_vege_map.svg" alt="Taiwan Vegetarian Map" id="logo"></a></h1>
        <p>Hunt you the best vegetarian restaurants.</p>
        <nav>
            <a href="about.html">About</a>
            <a href="explore.html">Explore</a>
            <a href="contact.html">Contact</a>
        </nav>
    </header>
    <main>
        <div id="map">
            <svg version="1.2" viewbox="0 0 1000 1295" xmlns="http://www.w3.org/2000/svg">
                <a xlink:title="Kaohsiung City" xlink:href="citymap.php" id="KaohsiungCity">
                    <path d="M739.8 857.3l1.9 5.8-3 5-5.6 2.4-1.4 3.2 1 4 5.6 3.6 6.3 5.2 2.8 7.6 0.3 2.5-15.6 3.8-6.4 4.1-4 3.9-7.8 5.1-0.9 5.7 2.3 6-2.7 4.9-7.4 4-0.8 6.9 2.1 9.9-3 13.2-0.1 11.2-4.3 5.9-8.5 7.2-2.3 9.8 1.3 8.1 3 4.6 6.2 6.4 1.2 4.9-3.9 0.5-5.2-0.9-4.3 0.2-8.5 6.7-5.9-5.5-7.6-8.9-7.2 1.8-6.6 5.9-13.1-6.6-9.4 4.5-6.4 7.1-8 2.8-17.8-1.1-1.7 4.9-1.3 7.2-2.6 7.9 0.5 7-0.1 9.5-5.7 21.2-0.1 7.1 2.7 7.5 0.4 8.2-8.1 20.5-2.6-1.1-1.6 0.1-1.8 0.7-2.2 0-13-10.2-12.1-17.1 12.7 15.4-1.5-7.4-3.8-7.2-5.3-6-9-8.4-3.5-4.2-1.6-4.8 2.2-4.6 1.1-4.1-1.5-5.8-2.7-5.6-4.9-7.7-4.6-10.2-1-4.5 0.1-3 1.5-3.6 0.3-2.4-0.5-1.2-2.7-2.3-0.5-2.3-2.9-4.9-0.7-2-2.1-13.6 6.1-3.7 0.2 0.5 3.9 8.6 4.8 2.5 15.7 2.2 8.2-0.9 8.4 1 4.2-1.5 3.5-2.6 6.5-2.6 6.3-4.4 2.4-5.5 3-5.2 5.3-7.1 6.1-6.4 6.5-5.4 7.4-7.2 6.5-8.4 10-17 10.4-15.1 2.3-6.6-1-6.7-1.4-4.5 0.1-5 3.6-3.5 6.9 0.7 5.8-0.6 12.3-7.3 4.5-5.4 7.9-6.1 7.7-4.3 4.2-5 3.6-6.8 8.5-6.8 18.5-9.4 4.3 1 5.8 2.2 4.2 5.9 0.7 2z" id="TWN1156" name="Kaohsiung City">
                    </path>
                </a>
                <a xlink:title="Pingtung" xlink:href="citymap.php" id="Pingtung">
                    <path d="M569.4 1166l2 2.9-0.3 1-2.7 1.8-5 4.3-0.9-3.3 1.4-2.7 2.8-3.6 2 0 0.7-0.4z m126.7-143.3l3.5 6.6 0.7 4.9 5.4 1.3 5.5 3.6-2.8 13.8-0.1 5.2-2 5-9.8 4.1-4.8 2.7-7.6 1.6-5.4 4.5-2.4 6.6-3.7 6.6-3 7.5-0.8 14.7 1.2 6.5 2 6.1 1.1 7.1 0 5.4 2.6 5 4.6 5.6-2.5 3.8-5.3 3.2-2.1 3.9-0.5 4.5 2.7 3.9 3.4 1.7 3.1 4.4-0.1 5.7 0.6 6.1 3.2 5.9 4.6 4.9 10.2 4.7 4.5-0.3 0.9 51.6-1.6 7.3-2.5 6-3.4 2.5-4 3.7 0.1 8.3 1.5 9.2-0.4 5.9-4.5-6.8-6.8-5.2-7.8-3.5-8-1.9-0.3 6.6-2.3 2.3-3.4-0.8-3.7-3.1-0.2-2.4 1.3-7-5.5-9.2-0.5-2.4 0.1-2.1 0.4-3.2 0-10.8 0.5-3.1 2.5-3.6 0.5-3-19.9-51.6-1.6-2.9-5.5-6.8-4.4-9.9-2-2.8-8.2-6.5-5.4-3-0.9-3.7-0.7-1.3-4.4-2.9-10-4.8-4.5-3.1-4.8-4.2-2.6-1.6 8.1-20.5-0.4-8.2-2.7-7.5 0.1-7.1 5.7-21.2 0.1-9.5-0.5-7 2.6-7.9 1.3-7.2 1.7-4.9 17.8 1.1 8-2.8 6.4-7.1 9.4-4.5 13.1 6.6 6.6-5.9 7.2-1.8 7.6 8.9 5.9 5.5 8.5-6.7 4.3-0.2 5.2 0.9z" id="TWN1158" name="Pingtung">
                    </path>
                </a>
                <a xlink:title="Tainan City" xlink:href="citymap.php" id="TainanCity">
                    <path d="M483.8 968.3l-0.6 1.2-2.3-2-1.7-4.2 0.3-1.3 0.7 0 0.9 1.2 0.7 1.9 2.1 2.2-0.1 1z m0.5-27.6l-2.9 6.8 3.9-13.3 0.6 0.1-1.6 6.4z m3.5-12.8l3.5-9.9 0.5-0.1 0.2 1.9-4.2 8.1z m6.3-22.5l-0.4 2.4 0.6-10.6 0.5 0.2-0.7 8z m149.5 11.5l-2.3 6.6-10.4 15.1-10 17-6.5 8.4-7.4 7.2-6.5 5.4-6.1 6.4-5.3 7.1-3 5.2-2.4 5.5-6.3 4.4-6.5 2.6-3.5 2.6-4.2 1.5-8.4-1-8.2 0.9-15.7-2.2-4.8-2.5-3.9-8.6-0.2-0.5-6.1 3.7-1-6.3-1.8-3.6-3.9-3.9 4.7-3.4 2.7-6.1-1.1-5.2-6.3-0.9-1.2 1.8-1.1 3.4-1.8 2.7-3.3-0.1-1.3-2.3 0.5-7-0.8-2.4-4.1-1.8-2.3 2.1-1.8 2.9-2.8 0.7-2.9-2.5-0.7-3.5 0.7-3.4 1.1-2.3 3-1.6 3.7-0.5 3.1-1 1-3-1.4-1.5-9.4-2.4 0-1.9 7.9-0.1-0.8-2.6-4.3-3.7-2.8-3.2 0.7-4 2.5-1.5 2.7-0.9 1.4-2.5-0.8-3.9-1.4-3.2 0.9-3 1.4-3.7 2.3-2.6-0.5-2.3 0.5-2.3 3.3-9 1.6-1.7 2.6-0.6-3.7-2.5 1.6-4.1 5.2 2 8.9 1.3 7.2 1.8 6.2-2.8 2.5-4.9 5.8-3.6 6.6-5.1 4.7-4.8 6.1-4.6 7.8-3.5 15.2-2.8 8.5-0.5 7.2 2.4 4 2.4 2.1 4.2 1.7 5.1 9.9 10.1 1 7.5-1.8 14.2 1.6 4.6 4.5 3.5 3.8 0 5.3-2.4 5-0.6 3.7 1.1 8.4 1z" id="TWN1160" name="Tainan City">
                    </path>
                </a>
                <a xlink:title="HsinchuCity" xlink:href="citymap.php" id="HsinchuCity">
                    <path d="M724.3 489l-0.2 0.2-4.6 1.1-4.4-1.7-2.7-3.8-4.3-2.6-6.9-2.7 1.2-4.1 5.5-11.4 2.2-3 0.7-1.5 0-1.7-0.7-1.9-1.1-2.2 1.5-3 1.8-1.8 8.3 3.6 15.1 4.8 5.4 2.8 3.8 3.9 1.9 3.7-1 3.6-2.4 1.4-5.1 0.9-5.9 2.4-3.4 4.3-2.3 5.6-2.4 3.1z" id="TWN1161" name="Hsinchu City">
                    </path>
                </a>
                <a xlink:title="Hsinchu" xlink:href="citymap.php" id="Hsinchu">
                    <path d="M843.1 523.6l-2.3 6.5-1.4 4.7 0.6 4.4-3.8 5.8-14 14.2-4.3 10.5-2.8-0.8-10.6 1-0.8 0.6-0.6-4.9-4.6-7.8-3.3-3.3-1.3-4.4-5-4-12.5 3.2-4.8-0.5-6.8 0.5-7.7 2.1-4.1-1 0.9-5.1 1.3-4.6-1-4-1-2.9 1-3.1 0.8-3.5 0.3-3.9-0.7-5.2-3.9-3.4-12.1-5.7-6-4.5-3.9-4.4-4.4-11.1 2.4-3.1 2.3-5.6 3.4-4.3 5.9-2.4 5.1-0.9 2.4-1.4 1-3.6-1.9-3.7-3.8-3.9-5.4-2.8-15.1-4.8-8.3-3.6 1.5-2.3 0.6-3.9 0.9-2.9 2-2.9 2.7-2.1 2.5-0.9-0.2-1.2 0.7-2.9 2.2-6.1 2.1-3.3 3.1 1.1 13.7-1 4.6 3.1 4 8.7 5 2 4.3 1.2 4.1 2 6.8 2.2 3.6 4.2-1.1 5.8 3.5 3.7 6.5 2.1 4.2 3.1 3.1 3.1 3.8 0.7 3.9-0.3 3.4 3.5 2.6 4.5 4.3 2.2 3.4 2.6 0.4 5 1.6 7.3-1.9 7.8-4.6 6.5 0.5 4.3 5.2 3.9 6.2 3.8 5.5 0.9 4 2.9 7.3 4.1 4.8 2.2z" id="TWN1162" name="Hsinchu">
                    </path>
                </a>
                <a xlink:title="Yilan" xlink:href="citymap.php" id="Yilan">

                    <path d="M982.4 448.9l2.1 0.5 1.6 2.2-0.7 2.3-3.8-0.1-1.4-0.8-1.7-2.7 0.9 0.3 3-1.7z m-47 152.6l-1.1 0-11.1-1.7-18.5-11.1-3.8 0.9-2.4 6-4.9 4.5-6.5 0-8.3-3.2-15-3.8-6.5-3.1-2.5-2.1-5.9-4.7-4.9 0-4.7 2.3-4 0.6-3.7-2.5-4.4-2.6-4.9-1-1.4-3.8 0.6-5.5-3.6-1 4.3-10.5 14-14.2 3.8-5.8-0.6-4.4 1.4-4.7 2.3-6.5 0.5-1.5 3.9-1.6 3.3 0.6 3.4-1.3 2.2-3.8-3.1-12.4 5.4-3.9 3.1-0.9 5.7-1.6 4.9-1.8 3.8-3.3 5-3.5 6.6-3.2 3.9-2.8-0.4-2-1-3.2-0.2-4.2 2-4.9 4.7-4 3.8-2.3 13-5.3 13.5-8.1 6.2-1.9 5-3.6 3.1-5 3.3-4.1 3.7-2 3.5-1.2 4.6-2.9 1.6-3.8-2.5-3.6 1.4-2.9 11.2-2.3 3.7-2.5 8.4-4.4 5.9-1.3 3.3 1.9 0.8 1.1-12 6-5.5 4.7-18.7 22.8-2.9 4.8-2.3 6.8-1.6 7.7-0.5 7.6 0.3 7.4 3.3 15.5-0.2 4-1.5 3.9 0.2 8.1 3.5 6.3 6.5 4 7.6 1.4 0 1.8-3.2-0.3-3.1 0.3-2.6 0.8-1.9 1.4 2.7 5 1.3 6.5-0.8 5.6-6 3.4-0.4 2.5 0.7 3 1.7 2.7 0.6 2.8-2.5 2.4-6.2 3.6-7 8-0.3 3.2 0.5 7-1.2 2.6-1.3 2.3-0.8 3.2-0.5 6.4-0.6 1.6-1 1.3-0.5 1.4 1.3 1.9z" id="TWN1163" name="Yilan">
                    </path>
                </a>
                <a xlink:title="KeelungCity" xlink:href="citymap.php" id="Keelung City">

                    <path d="M934.8 365l-0.3 11.9 0.2 3 3.7 3.9-0.4 2.5-2.5 1.8-4 1.5-5.1-0.6-10.6-4.4-3-2.2-3.7-3.4-2.8-3.5-1.7-3.5-2.9-3.7-0.6-2.9 3.2-2.2 7.2-3.1 4.4-2.9 1.4 0.9 2.4 2.7 3.9 1.4 11.2 2.8z" id="TWN1164" name="Keelung City">
                    </path>
                </a>
                <a xlink:title="Miaoli" xlink:href="citymap.php" id="Miaoli">

                    <path d="M724.3 489l4.4 11.1 3.9 4.4 6 4.5 12.1 5.7 3.9 3.4 0.7 5.2-0.3 3.9-0.8 3.5-1 3.1 1 2.9 1 4-1.3 4.6-0.9 5.1 4.1 1 7.7-2.1 6.8-0.5 4.8 0.5 12.5-3.2 5 4 1.3 4.4 3.3 3.3 4.6 7.8 0.6 4.9-3.7 2.6-1.8 5.6-4.9 2-5.3-0.1-4.2 3-4.6 4.4-5.9 3.2-11.6 9.2-6.8 2.9-8.9 4.7-5.4-2.1-5-5.6-6-2.4-9.9-0.8-5.5 3.3-0.9 7.4-5.2 2.8-12.1 0.7-11.6-6.7-6.6-1.2-7.3-3.6-15.1-11.1-6.3-5.5-4.7-5-9.2-14.3 7.2-8.1 1.9-4 0.9-6.6 2.2-5.6 5.9-10.4 1.6-6.3 1.5-2.7 6.8-2 1.9-2.1 1.1-2.6 1.4-2.5 4.2-4.3 4.6-3.4 5.6-1.5 7.1 1.3-0.9-5.4 2.7-3.7 3.7-3.8 1.9-5.7 0.8-1.9 3.6-1.8 0.3-1.3 6.9 2.7 4.3 2.6 2.7 3.8 4.4 1.7 4.6-1.1 0.2-0.2z" id="TWN1165" name="Miaoli">
                    </path>
                </a>
                <a xlink:title="Taipei City" xlink:href="citymap.php" id="Taipei City">

                    <path d="M897.4 413.2l-4.2 1.7-5.8-0.1-4.8-1-3.7-3.3-3.8-4.3-5.8-4.6-3.9-6.7 1.5-7.4-1.2-6.3-5.7-5.5-3.8-4.2 1.6-3 1.8-2.4 2.1-4.6 3.6-4 10.9-6.4 2.9-2.5 4-2 3.8 1.2 2.1 2.2-0.5 3.6 0.4 3.5 3.2 6.8 2.5 10 3.9 3.5 1.6 4.4-1.6 6.6 0.1 5.1 4.6 2.6 3.8 3.2-2 4.3-7.6 9.6z" id="TWN1166" name="Taipei City">
                    </path>
                </a>
                <a xlink:title="NewTaipeiCity" xlink:href="citymap.php" id="New Taipei City">

                    <path d="M915.9 357.2l-4.4 2.9-7.2 3.1-3.2 2.2 0.6 2.9 2.9 3.7 1.7 3.5 2.8 3.5 3.7 3.4 3 2.2 10.6 4.4 5.1 0.6 4-1.5 2.5-1.8 0.4-2.5-3.7-3.9-0.2-3 0.3-11.9 34.6 8.4 3.2 2-1.6 3.7-0.4 2.9 0.7 5.2 2.4 8.7 2.6 4.1 2.2 0.9 7-1 3.6 0.4 4.2 1.1 3.7 1.9 2 2.5-8.7 4.3-0.8-1.1-3.3-1.9-5.9 1.3-8.4 4.4-3.7 2.5-11.2 2.3-1.4 2.9 2.5 3.6-1.6 3.8-4.6 2.9-3.5 1.2-3.7 2-3.3 4.1-3.1 5-5 3.6-6.2 1.9-13.5 8.1-13 5.3-3.8 2.3-4.7 4-2 4.9 0.2 4.2 1 3.2 0.4 2-3.9 2.8-6.6 3.2-5 3.5-3.8 3.3-4.9 1.8-5.7 1.6-2.5-5.4-8.9-8.5-1.4-5.6-0.8-5.2 3.1-3.7 1.5-5.3-8.5-12.3-5-2-7.4 0.4-5.1-2.9 1.3-6.7-1-5.1-5.4-5.1-1-5.1 1-5.8-0.2-6.2 3.7-4 13.1-3.9 3.3-3.4 1-4.2-0.5-4.1-5.1-7.5-4.2-2.2-4.1-1-3.2-2.8-4.7-3.1-6.3-3-4.2-4.6 11.2-2.1 4.8-1.8 6.1-5.2 1.9-0.9 2.2-0.4 3.1 0 3.5 1.1 1.9 2.7 1.2 2.7 1.5 1.6 3.5-1.4-3.6-5.7-5.8-5.9-3.1-1.9 0.9-2.7 1.8-1.5 1.9-0.9 0.8-1 2.1-5.1 3.2-5.9 6.6-5.9 9.6-4.9 11-2.5 10.8 1.2 4.5 3.4 10 14.2 3.6 7.4 1.2-0.5 2.7-0.7 3-0.4 2.2 0.6-0.1 0.9-1.1 1.3-1 1.8 0.1 2.2 1.1 1.2 2.3 1.7z m-18.5 56l7.6-9.6 2-4.3-3.8-3.2-4.6-2.6-0.1-5.1 1.6-6.6-1.6-4.4-3.9-3.5-2.5-10-3.2-6.8-0.4-3.5 0.5-3.6-2.1-2.2-3.8-1.2-4 2-2.9 2.5-10.9 6.4-3.6 4-2.1 4.6-1.8 2.4-1.6 3 3.8 4.2 5.7 5.5 1.2 6.3-1.5 7.4 3.9 6.7 5.8 4.6 3.8 4.3 3.7 3.3 4.8 1 5.8 0.1 4.2-1.7z" id="TWN1167" name="New Taipei City">
                    </path>
                </a>
                <a xlink:title="Taoyuan" xlink:href="citymap.php" id="Taoyuan">

                    <path d="M861.8 498.8l-3.1 0.9-5.4 3.9 3.1 12.4-2.2 3.8-3.4 1.3-3.3-0.6-3.9 1.6-0.5 1.5-4.8-2.2-7.3-4.1-4-2.9-5.5-0.9-6.2-3.8-5.2-3.9-0.5-4.3 4.6-6.5 1.9-7.8-1.6-7.3-0.4-5-3.4-2.6-4.3-2.2-2.6-4.5-3.4-3.5-3.9 0.3-3.8-0.7-3.1-3.1-4.2-3.1-6.5-2.1-3.5-3.7 1.1-5.8-3.6-4.2-6.8-2.2-4.1-2-4.3-1.2-5-2-4-8.7-4.6-3.1-13.7 1-3.1-1.1 8.9-14.2 6.9-8.3 7.2-6.1 18.4-6.1 4.3-2.7 3.7-3.2 4.5-2.5 9-3.2 20.1-3.6 4.2 4.6 6.3 3 4.7 3.1 3.2 2.8 4.1 1 4.2 2.2 5.1 7.5 0.5 4.1-1 4.2-3.3 3.4-13.1 3.9-3.7 4 0.2 6.2-1 5.8 1 5.1 5.4 5.1 1 5.1-1.3 6.7 5.1 2.9 7.4-0.4 5 2 8.5 12.3-1.5 5.3-3.1 3.7 0.8 5.2 1.4 5.6 8.9 8.5 2.5 5.4z" id="TWN1168" name="Taoyuan">
                    </path>
                </a>
                <a xlink:title="Changhua" xlink:href="citymap.php" id="Changhua">

                    <path d="M647.2 689.6l0.1 3.6-4.3 1.6-1.2 2.9 0.5 4-2 4.6-1.6 5.4-0.1 5.7-1.2 6.6-0.9 13.4 2.1 6.3 3.6 3.3 3.9 1.4 5.6 2.9-1 3.5-3.8 1.5-2.5 2.3-2.4 1.6-1 0.7-12-2.4-5.8 0.1-12.2-6-19.7-2.3-11.6-4.4-6.6-1.8-7.6-0.4-22 2.6-7.6-4.4 0.8-1.4 1.6-7.1 1.2-3 7.1-6.8 2-2.8 2.7-7.8 4.2-7.7 5.7-16.1 2.7-4.7 3-3 2.5-1.7 2.2-1.1 1.6-1.4 0.6-3 1.2-2.8 5.1-4 1.2-3 0.6-10.1 0.9-2.8 2.7-2.6 11.3-13.2 5.8 1.9 4 3.5 2.7 6.3 1 7.6 4.5 5.4 11.9 3.5 4.3 3.6 3.2 5 2 4 0.1 4 1.2 3.3 4.3 0.8 5.4 3.5 0 1.4z" id="TWN1169" name="Changhua">
                    </path>
                </a>
                <a xlink:title="Chiayi" xlink:href="citymap.php" id="Chiayi">

                    <path d="M499.6 893.2l-1.8 1.4-0.4-1.1 2.4-3.1 0.9-2.4 1.1-1.5 0.6 0.5 0.1 1.1-1.4 2-1.5 3.1z m2.2-12.6l-0.7-0.7 2-3.8 0.9-0.4-0.5 1.9-1.7 3z m4.9-9l-0.1-4.4 0.5 0.4 0.1 2.9-0.5 1.1z m1.4-9.7l-0.8 1.6-0.5-2 1.3 0.4z m-1.3-6.1l-0.5 1.3-1.3-2.1 1.8 0.8z m-29.8 1l-3.2 1.6 3.8-5.4 13.9-14.1 10.6-13.5 2.5-0.8-9 14.7-4.5 4.5-2.9 3.5-3.8 3.8-3 2.1-4.4 3.6z m189.5-51.1l6.1 0.7 6.8 2.6 4.1 1.2 5.1 2.8-0.3 5.3-3 5.1 1.2 4.8 2.7 6.5 0.4 5.9 1.1 3.8 7.6 1.4 25.6 0.2 0.9 0.2-18.5 9.4-8.5 6.8-3.6 6.8-4.2 5-7.7 4.3-7.9 6.1-4.5 5.4-12.3 7.3-5.8 0.6-6.9-0.7-3.6 3.5-0.1 5 1.4 4.5 1 6.7-8.4-1-3.7-1.1-5 0.6-5.3 2.4-3.8 0-4.5-3.5-1.6-4.6 1.8-14.2-1-7.5-9.9-10.1-1.7-5.1-2.1-4.2-4-2.4-7.2-2.4-8.5 0.5-15.2 2.8-7.8 3.5-6.1 4.6-4.7 4.8-6.6 5.1-5.8 3.6-2.5 4.9-6.2 2.8-7.2-1.8-8.9-1.3-5.2-2 3.8-0.3 3.3-1.4 1.4 0.5-0.9-3.2-2.2 1.6-1.8-0.5-2.5-0.1 0-3.3 2.4-5.6 3.7-0.3 5.4 0.1-3.7-10.5-4.1-8 1.9-3.7 0-1.9-3.1-1.5 0.4-1.8 1.8-2 0.9-2.6 4-5.2-8.5 0.5-0.2-8.7 11.6-1.4 8.3 4.7 6.1 0.1 3.9-3.2 1.7-4.9 2.1-3 5.3-0.8 7-5.7 4.4-2.4 3.8-3.8 16.3-9.4 7.2-2 12.6-2.3 6.9-0.4 5.3 4.6 5 5.9 12.6 4.6 3.7-0.5 8.3-2.4 4.7 3.4 2.4 3.9 6.3-0.6 11.7-2.4 4-1.3 0-3.4 0.3-5 0.5 0z m-92.7 30.8l-3.8 4.1 0.9 5.6 6.1 2.4 7 4.5 7.3 1.7 6.8-2.7 4.5-0.6 3-2.2-2.5-6.8-2.5-4-4.1-2.2-5.6-2.1-7.8 0.7-9.3 1.6z" id="TWN1170" name="Chiayi">
                    </path>
                </a>
                <a xlink:title="ChiayiCity" xlink:href="citymap.php" id="Chiayi City">

                    <path d="M573.8 836.5l9.3-1.6 7.8-0.7 5.6 2.1 4.1 2.2 2.5 4 2.5 6.8-3 2.2-4.5 0.6-6.8 2.7-7.3-1.7-7-4.5-6.1-2.4-0.9-5.6 3.8-4.1z" id="TWN1171" name="Chiayi City">
                    </path>
                </a>
                <a xlink:title="Hualien" xlink:href="citymap.php" id="Hualien">

                    <path d="M935.4 601.5l0.6 0.8 1.6 2.9 0.2 1.1-1.4 2.4-5.8 5.7-6.2 8.6-4.7 3.7-1.4 2 0.7 2.1-0.9 1.5-6.6 5.1-2.5 2.4-2.8 6-2.9 12.2-7.4 10.9-1.5 4.4 0.2 4.7 1.8 5.2 1.5 2.3 1.3 1 0.8 1.4 0.1 3.2-1.1 3.6-3.7 5.8-0.7 3.5-0.4 6.4-3.2 16.3-6.4 17-8 40.1-4.8 9.8-11 64.1-3.5-1-10.8 5.2-3.9 5.4 1.7 6.9 0.6 6.9-3.6 6.9-3.4 5.2-2.7 6.6-2.4 8.4-3.7 7.7-4.8 13.2-3.1 6.1 0.1 6.7-0.9 6.2-6.5 3.7-8.2-1.1-11.7-9.7-9.2-16-5.7-1.5-6.3-0.9-5-4.8-6.1-2.9-7.8-2.8-5-8.1-1.2-7.4-0.3-2.5-2.8-7.6-6.3-5.2-5.6-3.6-1-4 1.4-3.2 5.6-2.4 3-5-1.9-5.8 6-3.5 3.1-2.8-1.7-6.2 1.5-2.7 1.5-4 5.2-3.9 7.4-1.6 7.4-0.3 5.3-4.7 1.3-8.5 4-5.2 7.6-2.8 4.5-3.1 1.6-5.1 3.2-12.6 1.2-8.4-0.9-7.2-1.2-5.4-3.2-4.1-2.1-4 5.7-9.4 0.2-3.7 2.5-7 3.9-8.5 3-8.8 1.6-9.9 0.6-7.6-1.8-4.5-2-3.3 2.3-7.6 5.1-10.7 8-10.4 0.3-3.9-1.5-4.5-5.2-3.4-2.9-3.1-0.2-9.9 3.7-2.9 6.6-2.2 5.2-2.4-0.2-3.7-1.4-6.2 2.8-2 1.2-2.1 3.4-1.7 3.1-3.8 1.3-5.1 3-5 7.5-4.7 2.4-6.2 0.4-4.2 4.7-4.9 2.5 2.1 6.5 3.1 15 3.8 8.3 3.2 6.5 0 4.9-4.5 2.4-6 3.8-0.9 18.5 11.1 11.1 1.7 1.1 0z" id="TWN1172" name="Hualien">
                    </path>
                </a>
                <a xlink:title="Nantou" xlink:href="citymap.php" id="Nantou">

                    <path d="M825 627.6l1.4 6.2 0.2 3.7-5.2 2.4-6.6 2.2-3.7 2.9 0.2 9.9 2.9 3.1 5.2 3.4 1.5 4.5-0.3 3.9-8 10.4-5.1 10.7-2.3 7.6 2 3.3 1.8 4.5-0.6 7.6-1.6 9.9-3 8.8-3.9 8.5-2.5 7-0.2 3.7-5.7 9.4 2.1 4 3.2 4.1 1.2 5.4 0.9 7.2-1.2 8.4-3.2 12.6-1.6 5.1-4.5 3.1-7.6 2.8-4 5.2-1.3 8.5-5.3 4.7-7.4 0.3-7.4 1.6-5.2 3.9-1.5 4-1.5 2.7 1.7 6.2-3.1 2.8-6 3.5-0.7-2-4.2-5.9-5.8-2.2-4.3-1-0.9-0.2-25.6-0.2-7.6-1.4-1.1-3.8-0.4-5.9-2.7-6.5-1.2-4.8 3-5.1 0.3-5.3-5.1-2.8-4.1-1.2-6.8-2.6-6.1-0.7-2.6-3.5-8.2 0.9-6.8 2-5.8-2.5-4-4.7 0.9-5.7 1.9-5.2-1-7.7 1-7.2 2-4.7-1.9-7.2 2.4-1.6 2.5-2.3 3.8-1.5 1-3.5-5.6-2.9-3.9-1.4-3.6-3.3-2.1-6.3 0.9-13.4 1.2-6.6 0.1-5.7 1.6-5.4 2-4.6-0.5-4 1.2-2.9 4.3-1.6-0.1-3.6 4.3 0.2 17.9 2.5 4.2-0.6 5-4.8 7.6-14.4 3.7-8.5 6.4-3 10.1 1.4 6-0.2 5.8-7.7 3-1.9 8.9 6.7 3.5-0.9 2.6-5.5 4.7-3.9 6.6 0.1 5-1.9 7.9-7.6 5.1-2.9 4.4-0.8 8.8-4.7 6.2-0.2 6.3-1 11.1-4.4 4.6-0.3 4.7 1 13.4 1.3z" id="TWN1173" name="Nantou">
                    </path>
                </a>
                <a xlink:title="Taichung City" xlink:href="citymap.php" id="TaichungCity">

                    <path d="M803.7 570.5l0.8-0.6 10.6-1 2.8 0.8 3.6 1-0.6 5.5 1.4 3.8 4.9 1 4.4 2.6 3.7 2.5 4-0.6 4.7-2.3 4.9 0 5.9 4.7-4.7 4.9-0.4 4.2-2.4 6.2-7.5 4.7-3 5-1.3 5.1-3.1 3.8-3.4 1.7-1.2 2.1-2.8 2-13.4-1.3-4.7-1-4.6 0.3-11.1 4.4-6.3 1-6.2 0.2-8.8 4.7-4.4 0.8-5.1 2.9-7.9 7.6-5 1.9-6.6-0.1-4.7 3.9-2.6 5.5-3.5 0.9-8.9-6.7-3 1.9-5.8 7.7-6 0.2-10.1-1.4-6.4 3-3.7 8.5-7.6 14.4-5 4.8-4.2 0.6-17.9-2.5-4.3-0.2 0-1.4-5.4-3.5-4.3-0.8-1.2-3.3-0.1-4-2-4-3.2-5-4.3-3.6-11.9-3.5-4.5-5.4-1-7.6-2.7-6.3-4-3.5-5.8-1.9 0.6-0.8 0.8-3.3 3.3-2.7 2.2-6.5 2.7-12.3 9.3-16.1 2.8-9.9 3.4-5.5 13.3-14.8 9.2 14.3 4.7 5 6.3 5.5 15.1 11.1 7.3 3.6 6.6 1.2 11.6 6.7 12.1-0.7 5.2-2.8 0.9-7.4 5.5-3.3 9.9 0.8 6 2.4 5 5.6 5.4 2.1 8.9-4.7 6.8-2.9 11.6-9.2 5.9-3.2 4.6-4.4 4.2-3 5.3 0.1 4.9-2 1.8-5.6 3.7-2.6z" id="TWN1174" name="Taichung City">
                    </path>
                </a>
                <a xlink:title="Yunlin" xlink:href="citymap.php" id="Yunlin">

                    <path d="M642 760.2l1.9 7.2-2 4.7-1 7.2 1 7.7-1.9 5.2-0.9 5.7 4 4.7 5.8 2.5 6.8-2 8.2-0.9 2.6 3.5-0.5 0-0.3 5 0 3.4-4 1.3-11.7 2.4-6.3 0.6-2.4-3.9-4.7-3.4-8.3 2.4-3.7 0.5-12.6-4.6-5-5.9-5.3-4.6-6.9 0.4-12.6 2.3-7.2 2-16.3 9.4-3.8 3.8-4.4 2.4-7 5.7-5.3 0.8-2.1 3-1.7 4.9-3.9 3.2-6.1-0.1-8.3-4.7-11.6 1.4 4.6-5.2-0.2-16.4 0.7-12.3 2.8-9.8 4.3-7.7 1.3-10 2.3-8.8 1.3-3 6.1-8.1 1.1-2.8 0.7-1.5 5.6-4.3 0.8-1.6 7.6 4.4 22-2.6 7.6 0.4 6.6 1.8 11.6 4.4 19.7 2.3 12.2 6 5.8-0.1 12 2.4 1-0.7z" id="TWN1176" name="Yunlin">
                    </path>
                </a>
                <a xlink:title="Taitung" xlink:href="citymap.php" id="Taitung">

                    <path d="M889.2 1263l-5.5 1.7-7.3-2.9-6.8-4.8-3.9-3.7 1.2-2.7-0.1-2.5-1-2.4-1.7-2.1 19.5 0 0 1.8-1.3 3.5-0.4 2.9 0.9 2.5 4.7 3.5 2 2.5-0.3 2.7z m-24-177.6l-0.1 1.1-3.4-0.4-0.4-0.6-2.7-1-2.8-4.9-1.4-4.3 0.6-0.6 10-0.7 1.1 0.6 0.8 2-0.8 3.9-0.9 1.6-0.4 1.7 0.4 1.6z m-163.1 114.1l-4.5 0.3-10.2-4.7-4.6-4.9-3.2-5.9-0.6-6.1 0.1-5.7-3.1-4.4-3.4-1.7-2.7-3.9 0.5-4.5 2.1-3.9 5.3-3.2 2.5-3.8-4.6-5.6-2.6-5 0-5.4-1.1-7.1-2-6.1-1.2-6.5 0.8-14.7 3-7.5 3.7-6.6 2.4-6.6 5.4-4.5 7.6-1.6 4.8-2.7 9.8-4.1 2-5 0.1-5.2 2.8-13.8-5.5-3.6-5.4-1.3-0.7-4.9-3.5-6.6 3.9-0.5-1.2-4.9-6.2-6.4-3-4.6-1.3-8.1 2.3-9.8 8.5-7.2 4.3-5.9 0.1-11.2 3-13.2-2.1-9.9 0.8-6.9 7.4-4 2.7-4.9-2.3-6 0.9-5.7 7.8-5.1 4-3.9 6.4-4.1 15.6-3.8 1.2 7.4 5 8.1 7.8 2.8 6.1 2.9 5 4.8 6.3 0.9 5.7 1.5 9.2 16 11.7 9.7 8.2 1.1 6.5-3.7 0.9-6.2-0.1-6.7 3.1-6.1 4.8-13.2 3.7-7.7 2.4-8.4 2.7-6.6 3.4-5.2 3.6-6.9-0.6-6.9-1.7-6.9 3.9-5.4 10.8-5.2 3.5 1-4.6 26.4-2.2 4.9-7.1 9.4-2.6 4.9-2.1 6.1-1.5 11.4 0.2 10.2-1 9.7-4.9 9.9-2.1 2.1-4.7 3.5-2.2 2.2-1 2.3-1.7 5.8-4.8 8.4-2.9 13.1-2.1 5.9-10.3 14.8-1.3 2.7-13.9 11.8-3.3 3.8-0.4 2.7 0.6 6.2-0.2 2.8-1.2 3.2-2.2 3.5-4.7 6.1-4.7 4.5-16.1 10.7-10.8 11.9-2.7 1.4-2.1 2.7-5.2 13.5-2.6 5-8 10-3.3 6-1.9 12.3-4.8 16.8-9.5 16.7-1.4 5.7-1.7 16.1 0.3 14.7z" id="TWN1177" name="Taitung">
                    </path>
                </a>
                <a xlink:title="Penghu" xlink:href="citymap.php" id="Penghu">

                    <path d="M320.7 926.5l-1.8 0.9-1.3-1.5-1.5-4.7 1-1.2 3.8-1.3 2.7 0.7 0.1 2.1-0.2 1.6-1.2 1.2-1.6 2.2z m-1.2-12l-1.7 3.1-2.2-0.6-2-2.5-0.3-2.5 1.2-1.1 3.2 0.5 1.8 3.1z m48.8-3.2l-0.4 0.1-1.2-1.5 0.3-0.6 2.5-0.2 0.8 2-2 0.2z m14-4.6l0.3 0.2 2.3 0 0 1.3-1.1 1.5-0.7 1.8-1.1-2.8 0.3-2z m-33.5-29.6l-1.7 0.1-3 1.8-0.4-0.4 0.4-1.3 1.1-1.5 0.7-0.6 1.6-0.3 1.5 0.9-0.2 1.3z m-8.4-6.7l0.1 2.3 0.5 1.6 1.4 1.2-0.6 1.6-1.2 1.2 0.6 1.9-1.5 0.6-3.1-0.3-1.6-0.7 1.4-3.1-0.2-4.2-0.9 0.6-2 0.6-0.6-2.3 2.1-5.1 1.6-0.3 2.7 3.6 1.3 0.8z m-49.5-5.7l2.4 0.6 0 1.6-0.6 0.9-2.1 0.6-1.1-1.1 1.4-2.6z m58.5-24.8l-3.2 2.1-2.1 0.6-2.2 1.1-1.3-0.5-0.3-1.8 0.7-0.6 1.8 0.5 4-2 2.6 0.6z m19.5-28l-0.6 1.3 4-1.3 3.1 0.4 2.3-0.2 1.6-2.7 4.7 8.7 1.2 4-0.5 3-2-2-2.5-1.7-2.8-0.5-4 2.2-2.8 0.3-1.4 0.8-0.7 1.5-1.1 4.1-0.7 1.2-4.7 2.7-4.8 0.7-4.8-1.9-4.9-4.9 1.3-2.5 2.7 3.2 4 0.9 4.3-1.2 3.5-2.9-2.4-0.9-2-1.2-1.5-1.6-1.4-2.2-0.8 1.4-1 0.6-0.3-4 0.3-4 1.8 0 2.1 0.5 7.4-4.6 4.6-1.6-1.2 4.4z m-39.9 9.3l-3.8 0 0.7-2.1 1.2-1.3 1.9-0.5 2.5-0.2 2.2-0.9 0.6-2 0.1-4.8 3.2-10.4 3.1-3 4.2 3.6-2.5 1.5-1.7 3.6-2.8 8.5-0.1 2.2 0.7 2-0.3 1.3-3 0.5-2.2 0.1-1.5 0.3-1.3 0.6-1.2 1z m33.8-17.9l-2.2 0.7-1.1-1.5-0.9-3.5-2-2.9-4.3-4.3 5.5-4.1 3.3 1.7 3.2 2.8 1.4 2.9-2.5 2.4 1 3.5-1.4 2.3z m2.6-30.4l-0.3 0.9-1.3-3-0.2-1.4 1.8-1.5 1.6-3 0.5 1.1 2.5 1.4-0.4 1.8-2.2 1.3-2 2.4z" id="TWN3414" name="Penghu">
                    </path>
                </a>
                <a xlink:title="Kinmen" xlink:href="citymap.php" id="Kinmen">

                    <path d="M9.2 576.4l-5.2 1.5-3-1.2 5-9.9 1.3-1.4 2.1-0.5 2.1-0.1 2 1.4 1.6 1.8 0 3.1-1.4 2.1-1.6 0.1-1.1 1.2-0.6 1.2-1.2 0.7z m55-26.8l4.7 12.6-1 8.8-3.9 4.6-6.8-4.3-5-1.6-8.1 0.8-7.1 4.5-3.9 6.1-3.4 1.7-3.9-1.9-2.7-0.1-2.4-1.1-1.2-2.1 0.5-0.7 2.1-2.8 0.7-1.2 0.2-2.1-0.1-2.5-0.7-4.3-1.8-4.2-0.2-2.1 1.5-0.9 7.6-3.7 10 6.6 7-0.9 1.1-8.7 2.3-5.5 7.5-1.5 7 6.5z m269.3-137.7l-2.9 1.5-1.3-1.2 0.7-3.2 2.4-1.4 1.7 0.3 0.2 1.9-0.8 2.1z" id="TWN3415" name="Kinmen">
                    </path>
                </a>
                <a xlink:title="Lienchiang" xlink:href="citymap.php" id="Lienchiang">

                    <path d="M469.2 123.9l-0.2 2.3-1.9 2.1-4.1 2 2.5-5.6 2.5 0.5 0.1-0.9 1.1-0.4z m-11.8-0.8l-2 2.1-2.4-3.4 3.6-1.3 2.7 1.5-1.9 1.1z m-3.2-54.9l1 0.5 4.4-2.6 2.8 0 0 1.8-2.8 3.2-5.5 2.9-1.7 0.3-2.5-1.7-0.8-2.4 0.5-2.8 1.1-2 1-0.2 0.3 2.2 2.2 0.8z m21.3-17.8l-0.6 2.2 0.6 1.2-1.4-0.2-1.5-2.2-1.1-0.7-2.3 1.3-1-0.4-1.3 0.3-1.5 1.7-1.2 5-1.1-0.7-0.5-1.5 0.5-4.3 0.5-1.6 1.1-0.7 2.7-0.9 0.7-0.9 2.2-1.3 2.5 0.4 1.3 1.9 1.4 1.4z m129.8-45.6l-1.2 0.4-1.1-0.4-1.4 1.3-1.1 2.1-0.3-0.5-1.2-0.2-1.8-1 1.1-1.7-0.5-1.4 0.9-0.6 2.2-1.8 2.6 1.5 0.6 1.3 1.2 1z" id="TWN5128" name="Lienchiang">
                    </path>
                </a>
                <circle cx="894" cy="358" id="0">
                </circle>
                <circle cx="669.9" cy="526.1" id="1">
                </circle>
                <circle cx="569.7" cy="1021.4" id="2">
                </circle>
            </svg>
        </div>
        <div id="info">
            <h3>Info Box</h3>
            <li>Amount</li>
            <li>Average Price</li>
            <li>Feature</li>
        </div>

    </main>
    <footer>
        <p>Tina & Ting Copyrights information</p>
    </footer>
    <script src="javascript.js"></script>
</body>

</html>