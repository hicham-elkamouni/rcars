<template>
  <div>
    <Navbar/>
    <!-- hero section start -->

        <!----------- begin of hero image ------------->
    <div class="hero-image">
        <div class="container">
            <h2><span>LOOKING FOR A RIDE !</span></h2>
            <span class="des">this the right place</span>
            <p class="para_update">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nihil ea nemo atque odio animi magnam sint incidunt, placeat consequatur. Impedit beatae consequatur est, maxime quisquam dicta repellat quis sequi!</p>
            <!------------ div for space between elements ------->
            <div class="div-for-space"></div>
            <!---------------- end of space between ---------->
            <a class="btn1" href="reservation.html">rent a car</a>
        </div>
    </div>
    <!----------- end of hero image  ------------------>

    <!-- hero section end -->
    <!-- main -->
    <main>
        <!--div  WHY-CHOOSE -->
        <h2>WHY CHOOSE luxury Cars</h2>
        <div class=" WHY-CHOOSE ">
            <!-- <div class="thow-answer ">
            </div>
            <div class="thow-answer ">
            </div> -->
            <div class="Answer ">
                <img src="images\icons\key.svg " alt="key ">
                <h3>Amazing Car Collection</h3>
                <p>La Rental offers a Huge selection of the best luxury and exotic cars from around the world. We carry popular models from Audi, Aston Martin, Bentley, BMW, Cadillac, Ferrari, Porsche, Tesla, Lamborghini, Land Rover, Maserati, Mercedes Benz
                    and more.</p>
            </div>
            <div class="Answer ">
                <img src="images\icons\phone-call.svg " alt="key ">
                <h3>24/7 Concierge Service</h3>
                <p>We offer more than just luxury and exotic car rentals. We offer a unique concierge service. Our clients enjoy full walkthroughs of our cars, and any help they may need during their rental. In the event of any incidents we are there to
                    assist.
                </p>
            </div>
            <div class="Answer ">
                <img src="images\icons\globe.svg " alt="key ">
                <h3>Flexible Bookings</h3>
                <p>LA Luxury Car Rental offers our clients the flexibility of booking Luxury and Exotic cars OneWay making driving a Lamborghini down highway 1 a possibility. Simply input ANY pickup location and ANY dropoff location in the Rate quote box
                    to get a quote</p>
            </div>
            <div class="Answer ">
                <img src="images\icons\tools.svg " alt="key ">
                <h3>Safety, and Quality First</h3>
                <p>La Luxury Car Rental offers cars that are Dealer maintained and in great condition. We clean and fuel every car before every Rental and we make sure they look, feel, and smell great. There are many luxury cars available to rent in California
                    but none like an LA Luxury Car Rental</p>
            </div>

        </div>
        <!--end  WHY-CHOOSE -->

        <!--div  FEATURED CARS -->

        <h2>FEATURED CARS</h2>
        <div class="featured-cars ">
            <div class="cars ">
                <img src="images/Lamborghini-Huracan.jpg " alt="Lamborghini Huracan ">
                <h3>Lamborghini Huracan LP-610</h3>
                <p>5.2 Liter V10, 610HP, Auto Navigation, iPod Connect, Lift+, Sports Exhaust, Bluetooth Connection, All Wheel Drive</p>
            </div>
            <div class="cars ">
                <img src="images/Porsche-911-Turbo.jpg " alt="Lamborghini Huracan ">
                <h3>Porsche 911 Turbo Convertible</h3>
                <p>3.8 Liter TwinTurbo V6, 500HP, Auto Navigation, BOSE Sound, iPod Connect, Rear Wind Deflector</p>
            </div>
            <div class="cars ">
                <img src="images/Tesla-Model-X.jpg ">
                <h3>Tesla Model X P90D</h3>
                <p>90Kw Battery, 762HP, Auto Ludicrous Speed Upgrade, Complimentary Supercharging</p>
            </div>
        </div>
        <!--end FEATURED CARS -->

        <!-- about cars -->
        <h2>
            ABOUT Luxury Cars
        </h2>
        <div class="about-cars ">
            <p><span class="phara1 ">We Specialize in Customer Service. Our clients enjoy concierge like service from the time they take delivery of their luxury or Exotic car. Our representatives are experienced with features of these unique cars and aquaint each renter with
                the amazing features, and special options offered by the car.</span> <span class="phara2 ">The convenience starts from the time a client visits our website! Our website is designed to simplify the Luxury or Exotic Car Rental process. To recieve an instant rate
                    quote simply input your pick-up and drop-off locations in the “Get Quote” link above. Input your dates and times and select your car choice from our selection of luxury and exotic cars . You will instantly be quoted a rate that includes
                    all taxes and fees. You then have the option to select insurance waivers, additional miles, additional delivery and pickup services etc. Our website makes reserving your luxury or exotic car hassle-free.</span></p>
            <img src="images/Lamborghini-Urus.jpg " alt=" ">
        </div>
        <!-- end about cars-->

    </main>
    <!-- end main -->
    <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'Home',
  components: {
    Navbar,
    Footer
  }
}
</script>

<style scoped lang="scss">

@import "../assets/style/includes/base";

/* ---------- begin reservation page ------------- */

.hero-image {
    position: relative;
    height: 680px;
    overflow: hidden;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(8, 8, 8, 0.5)), url("../assets/img/home.jpeg");
    background-size: cover;
    background-repeat: none;
    background-position: center;
}

.container {
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* overflow: hidden; */
    text-align: center;
    color: white;
    font-weight: 700;
    text-transform: uppercase;
}

.container h2 {
    font-size: 30px;
    letter-spacing: 0.2em;
}

.container h2 span {
    /*         border: 10px solid black;*/
    padding: 6px 14px;
    display: inline-block;
}

.des {
    margin: 6px auto 20px;
    display: block;
    font-size: 26px;
    /* text-shadow: 0 0 10px black; */
}

.btn1 {
    color: #111;
    padding: 10px 24px;
    font-size: 20px;
    text-decoration: none;
    background-color: #e0ac1c;
    border-radius: 30px;
    transition: 0.3s all;
}

.btn1:hover {
    color: #e0ac1c;
    background-color: #111;
}
/* -------------- end reservation page ---------------- */

/* ------ updates ---------- */

.para_update {
    margin-bottom: 40px;
    text-transform: lowercase;
    font-weight: lighter;
}


</style>
