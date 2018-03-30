<!DOCTYPE html>
<html>
<head>
    <?php $title = 'Welcome'; include 'inc/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php include 'inc/header.php'; ?>

        <main>
            <h2>Pull up a barstool.</h2>
            
            <p>Have a beer and some food, unwind, and meet your neighbors. <a href="/about.php">Learn more about our bar</a>.</p>

            <h3>What We Have</h3>

            <div class="cards">
                <div class="card">
                    <a href="/drinks"><img src="/images/beer.600.png" alt="Beer."></a>
                    <h4><a href="/drinks">Drinks</a></h4>
                    <p>Cold, cheap domestics and a few local craft beers.<br><span class="link"><a href="/drinks">See the list</a> <i class="fas fa-arrow-alt-circle-right fa-sm"></i></span></p>
                </div>

                <div class="card">
                    <a href="/drinks"><img src="/images/burger.600.png" alt="Food."></a>
                    <h4><a href="/food">Food</a></h4>
                    <p>A small selection of uncomplicated bar food.<br><span class="link"><a href="/food">View the menu</a>  <i class="fas fa-arrow-alt-circle-right fa-sm"></i></span></p>
                </div>

                <div class="card">
                    <a href="/about"><img src="/images/neighborhood.600.png" alt="Neighborhood."></a>
                    <h4><a href="/about">Neighborhood</a></h4>
                    <p>Unpretentious and diverse.<br><span class="link"><a href="/about">Learn more about us</a> <i class="fas fa-arrow-alt-circle-right fa-sm"></i></span></p>
                </div>
            </div>
            
            <h3>When We Have It</h3>
            
            <ul class="hours">
                <li><span>Sunday</span> 12:00pm–12:00am</li>
                <li><span>Monday</span> 4:00pm–1:30am</li>
                <li><span>Tuesday</span> 11:00am–12:00am</li>
                <li><span>Wednesday</span> 11:00am–12:00am</li>
                <li><span>Thursday</span> 11:00am–12:00am</li>
                <li><span>Friday</span> 11:00am–1:30am</li>
                <li><span>Saturday</span> 12:00pm–1:30am</li>
            </ul>

            <h3>Where It Is</h3>

            <div id="map"></div>
            
            <h3>Happy Hour</h3>
            
            <p>Happy Hour is seven days a week, <span class="sc">4:00pm–7:00pm</span>. Drafts are discounted, buckets are <span class="sc">$10</span>, and appetizers are <span class="sc">$1</span> off.</p>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</body>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4WBfXP09GNMLy2gxF2l_AtcYm6n4p5Oc"></script>
        
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(38.574337, -90.242855), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(38.574337, -90.242855),
            map: map,
            title: 'Stringtown Tavern'
        });
    }
</script>
</html>