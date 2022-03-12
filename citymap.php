<?php
$restaurantName = "Restaurant Name";
$dietType = "Place holeder";
$menuType = "Place holeder";
$contact = "+886-123-456-789";
$address = "Place holeder";
$transport = "Place holeder";
$hours = "Place holeder";
$avgCost = "500";
$website = "Place holeder";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taiwan Vegetarian Map</title>
</head>
<link rel="stylesheet" href="style.css">

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
    <?php

    ?>
    <main>
        <button class="tab" id="mode">Mode</button>
        <button class="tab" id="filter">Filter</button>

        <div id="filterbox" class="hidden">
            <fieldset>
                <legend>Diet</legend>
                <label for="vegetarian">Vegetarian</label>
                <input type="checkbox" name="diet" id="vegetarian">
                <label for="ovoLacto">Ovo-lacto</label>
                <input type="checkbox" name="diet" id="ovoLacto">
                <label for="vegan">Vegan</label>
                <input type="checkbox" name="diet" id="vegan">
                <label for="buddhistVegan">Buddhist Vegan</label>
                <input type="checkbox" name="diet" id="buddhistVegan">
            </fieldset>
            <fieldset id="toggleFilter">
                <legend>Filter</legend>
                <p>Five star only</p>
                <div class="toggle">
                    <input type="checkbox" name="filter" id="fiveStarToggle">
                    <label for="fiveStarToggle"></label>
                </div>
                <p>Open today</p>
                <div class="toggle">
                    <input type="checkbox" name="filter" id="openToggle">
                    <label for="openToggle"></label>
                </div>
            </fieldset>
            <input type="submit">
        </div>
        <div id="mapContainer"></div>
        <div id="restaurantList">
            <ul>
                <li>
                    <img src="" alt="">
                    <div class="restaurantElem">
                        <h4><?php echo $restaurantName; ?></h4>
                        <div class="restaurantInfo">
                            <h5>Diet Type</h5>
                            <p><?php echo $dietType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Menu Type</h5>
                            <p><?php echo $menuType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Contact</h5>
                            <p><?php echo $contact; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Address</h5>
                            <p>
                            <address><?php echo $address; ?></address>
                            </p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Transportation</h5>
                            <p><?php echo $transport; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Business Hours</h5>
                            <p><?php echo $hours; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Average Cost</h5>
                            <p><?php echo $avgCost . "NTD"; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Website</h5>
                            <p><?php echo $website; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="restaurantElem">
                        <h4><?php echo $restaurantName; ?></h4>
                        <div class="restaurantInfo">
                            <h5>Diet Type</h5>
                            <p><?php echo $dietType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Menu Type</h5>
                            <p><?php echo $menuType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Contact</h5>
                            <p><?php echo $contact; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Address</h5>
                            <p>
                            <address><?php echo $address; ?></address>
                            </p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Transportation</h5>
                            <p><?php echo $transport; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Business Hours</h5>
                            <p><?php echo $hours; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Average Cost</h5>
                            <p><?php echo $avgCost . "NTD"; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Website</h5>
                            <p><?php echo $website; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="restaurantElem">
                        <h4><?php echo $restaurantName; ?></h4>
                        <div class="restaurantInfo">
                            <h5>Diet Type</h5>
                            <p><?php echo $dietType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Menu Type</h5>
                            <p><?php echo $menuType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Contact</h5>
                            <p><?php echo $contact; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Address</h5>
                            <p>
                            <address><?php echo $address; ?></address>
                            </p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Transportation</h5>
                            <p><?php echo $transport; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Business Hours</h5>
                            <p><?php echo $hours; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Average Cost</h5>
                            <p><?php echo $avgCost . "NTD"; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Website</h5>
                            <p><?php echo $website; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="restaurantElem">
                        <h4><?php echo $restaurantName; ?></h4>
                        <div class="restaurantInfo">
                            <h5>Diet Type</h5>
                            <p><?php echo $dietType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Menu Type</h5>
                            <p><?php echo $menuType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Contact</h5>
                            <p><?php echo $contact; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Address</h5>
                            <p>
                            <address><?php echo $address; ?></address>
                            </p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Transportation</h5>
                            <p><?php echo $transport; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Business Hours</h5>
                            <p><?php echo $hours; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Average Cost</h5>
                            <p><?php echo $avgCost . "NTD"; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Website</h5>
                            <p><?php echo $website; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="restaurantElem">
                        <h4><?php echo $restaurantName; ?></h4>
                        <div class="restaurantInfo">
                            <h5>Diet Type</h5>
                            <p><?php echo $dietType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Menu Type</h5>
                            <p><?php echo $menuType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Contact</h5>
                            <p><?php echo $contact; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Address</h5>
                            <p>
                            <address><?php echo $address; ?></address>
                            </p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Transportation</h5>
                            <p><?php echo $transport; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Business Hours</h5>
                            <p><?php echo $hours; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Average Cost</h5>
                            <p><?php echo $avgCost . "NTD"; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Website</h5>
                            <p><?php echo $website; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="restaurantElem">
                        <h4><?php echo $restaurantName; ?></h4>
                        <div class="restaurantInfo">
                            <h5>Diet Type</h5>
                            <p><?php echo $dietType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Menu Type</h5>
                            <p><?php echo $menuType; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Contact</h5>
                            <p><?php echo $contact; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Address</h5>
                            <p>
                            <address><?php echo $address; ?></address>
                            </p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Transportation</h5>
                            <p><?php echo $transport; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Business Hours</h5>
                            <p><?php echo $hours; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Average Cost</h5>
                            <p><?php echo $avgCost . "NTD"; ?></p>
                        </div>
                        <div class="restaurantInfo">
                            <h5>Website</h5>
                            <p><?php echo $website; ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <p>Tina & Ting Copyrights information</p>
    </footer>
</body>
<script src="javascript.js"></script>

</html>