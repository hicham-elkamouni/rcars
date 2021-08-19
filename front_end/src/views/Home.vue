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
            <a class="btn1" href="">rent a car</a>
        </div>
    </div>
    <!----------- end of hero image  ------------------>

    <!-- hero section end -->
    <!-- main -->
    <main class="main-cars">
        <!--div  WHY-CHOOSE -->
        <h2>WHY CHOOSE luxury Cars</h2>
        <div class=" WHY-CHOOSE ">
            <!-- <div class="thow-answer ">

            </div>
            <div class="thow-answer ">

            </div> -->
            <div class="Answer ">
                <img src="..\assets\img\icons\key.svg " alt="key ">
                <h3>Amazing Car Collection</h3>
                <p>La Rental offers a Huge selection of the best luxury and exotic cars from around the world. We carry popular models from Audi, Aston Martin, Bentley, BMW, Cadillac, Ferrari, Porsche, Tesla, Lamborghini, Land Rover, Maserati, Mercedes Benz
                    and more.</p>
            </div>
            <div class="Answer ">
                <img src="..\assets\img\icons\phone-call.svg " alt="key ">
                <h3>24/7 Concierge Service</h3>
                <p>We offer more than just luxury and exotic car rentals. We offer a unique concierge service. Our clients enjoy full walkthroughs of our cars, and any help they may need during their rental. In the event of any incidents we are there to
                    assist.
                </p>
            </div>
            <div class="Answer ">
                <img src="..\assets\img\icons\globe.svg " alt="key ">
                <h3>Flexible Bookings</h3>
                <p>LA Luxury Car Rental offers our clients the flexibility of booking Luxury and Exotic cars OneWay making driving a Lamborghini down highway 1 a possibility. Simply input ANY pickup location and ANY dropoff location in the Rate quote box
                    to get a quote</p>
            </div>
            <div class="Answer ">
                <img src="..\assets\img\icons\tools.svg " alt="key ">
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
                <img src="..\assets\img\Lamborghini-Huracan.jpg " alt="Lamborghini Huracan ">
                <h3>Lamborghini Huracan LP-610</h3>
                <p>5.2 Liter V10, 610HP, Auto Navigation, iPod Connect, Lift+, Sports Exhaust, Bluetooth Connection, All Wheel Drive</p>
            </div>
            <div class="cars ">
                <img src="..\assets\img\Porsche-911-Turbo.jpg " alt="Lamborghini Huracan ">
                <h3>Porsche 911 Turbo Convertible</h3>
                <p>3.8 Liter TwinTurbo V6, 500HP, Auto Navigation, BOSE Sound, iPod Connect, Rear Wind Deflector</p>
            </div>
            <div class="cars ">
                <img src="..\assets\img\Tesla-Model-X.jpg ">
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
            <img src="..\assets\img\Lamborghini-Urus.jpg " alt=" ">
        </div>
        <!-- end about cars-->

    </main>
    <!-- end main -->
    <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src

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
    color: #fff;
    padding: 10px 24px;
    font-size: 20px;
    text-decoration: none;
    background-color: #E61722;
    border-radius: 30px;
    transition: 0.3s all;
}

.btn1:hover {
    color: #E61722;
    background-color: #fff;
}
/* -------------- end reservation page ---------------- */

/* ------ updates ---------- */

.para_update {
    margin-bottom: 40px;
    text-transform: lowercase;
    font-weight: lighter;
}


/* ------- after hero section start -------------- */


.main-cars h2 {
    text-align: center;
    color: #E61722;
    padding: 25px 0;
}

.WHY-CHOOSE {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 90vw;
    height: 100%;
    text-align: center;
    margin: 0 auto;
    flex-wrap: wrap;
}

.WHY-CHOOSE .Answer {
    width: 15vw;
    padding: 10px 20px;
}

.WHY-CHOOSE .Answer img {
    width: 6vw;
    height: 6wh;
}

.WHY-CHOOSE .Answer h3 {
    color: #E61722;
    padding: 25px 0;
    font-weight: bold;
}

@media all and (max-width:1000px) {
    .WHY-CHOOSE {
        /* flex-direction: column; */
    }
    .WHY-CHOOSE .Answer {
        flex: 50%;
    }
}

@media all and (max-width:720px) {
    .WHY-CHOOSE {
        /* flex-direction: column; */
    }
    .WHY-CHOOSE .Answer {
        flex: 100%;
    }
}

.main-cars h2 {
    text-align: center;
    padding: 25px 0;
    font-weight: bold;
}

.featured-cars {
    display: flex;
    padding: 10px 20px;
    align-items: center;
    justify-content: space-between;
    width: 90%;
    height: 100%;
    text-align: center;
    margin: 0 auto;
    flex-wrap: wrap;
}

.featured-cars .cars {
    width: 25vw;
    padding: 10px 20px;
}

.featured-cars .cars img {
    width: 100%;
    height: 100%;
}

.featured-cars .cars h3 {
    text-align: center;
    color: #E61722;
    justify-content: center;
    margin: 10px 0;
}

@media all and (max-width:1000px) {
    .featured-cars .cars {
        width: 50%;
        padding: 10px 20px;
    }
}

@media all and (max-width:720px) {
    .featured-cars .cars {
        width: 100%;
        padding: 10px 20px;
    }
}

.about-cars {
    display: flex;
    padding: 40px 30px;
    align-items: center;
    justify-content: center;
    width: 75%;
    height: unset;
    margin-bottom: 20px;
    margin: 0 auto 20px auto;
    background-color: rgb(0, 0, 0);
    border-radius: 50px;
}

.about-cars p {
    width: 85%;
    /* height: 100%; */
    margin-right: 10px;
    /* overflow-y: hidden; */
    color: white;
    text-align: center;
}

.about-cars p span.phara1 {
    display: block;
    padding-bottom: 20px;
}

.about-cars img {
    object-fit: contain;
    width: 323px;
    height: 100%;
    margin-left: 10px;
    border-radius: 50px;
}

@media all and (max-width:1255px) {
    .about-cars {
        flex-direction: column;
        width: 75%;
    }
}



/* ------- after hero section end -------------- */


</style>
