<template>
  <div class="home">
    <Navbar/>
    <!-- header -->
    <header>
        <div class="mVideo">
            <video autoplay muted loop>
                    <source src="media/background_video.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
            </video>
        </div>
        <div class="header-content">
            <span class="pha1">Europe’s finest car hire <span class="pha2">experience</span></span>
            <p>Select from hundreds of luxury cars. Book online within minutes</p>
            <button onclick="location.href='pages/booking.html'">Book Now</button>
        </div>
    </header>
    <!-- end header -->
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
    HelloWorld,
    Navbar,
    Footer
  }
}
</script>

<style scoped lang="scss">

@import "../assets/style/includes/base";

  .header-content {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    text-align: center;
}

.header-content .pha1 {
    font-size: 5vw;
    font-weight: 600;
    padding-bottom: 10px;
}

.header-content .pha2 {
    color: #fddb3a;
    margin-bottom: 10px;
}

.header-content p {
    padding: 20px 0;
    font-size: 1.5vw;
    margin-bottom: 10px;
}

.header-content button {
    width: 200px;
    height: 60px;
    font-size: 25px;
    background-color: #fddb3a;
    font-weight: bold;
    border-radius: 40px;
    margin-bottom: 10px;
}

nav {
    background-color: rgba(0, 0, 0, 0.712);
    padding: 5px 60px;
    z-index: 1;
}

nav ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    align-items: center;
    justify-content: center;
}

nav ul li {
    padding: 15px 0;
    cursor: pointer;
    align-items: center;
}

nav ul li.nav_links {
    width: auto;
    margin: 0 16px;
    text-align: center;
    position: relative;
    order: 3;
}

nav ul li.nav_links:after {
    position: absolute;
    content: '';
    height: 2px;
    width: 100%;
    background: #fddb3a;
    left: 0;
    bottom: 9px;
    opacity: 0;
    transition: all 0.2s linear;
}

nav ul li.nav_links:hover:after {
    opacity: 1;
    bottom: 8px;
}

nav ul li.logo {
    flex: 1;
    font-size: 25px;
    font-weight: 700;
    cursor: default;
    user-select: none;
    color: #fddb3a;
}

nav ul li.logo span {
    color: white;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    transition: .4s;
}

nav ul li:hover a {
    color: #fddb3a;
}

nav ul li i {
    font-size: 23px;
}

nav ul li.btn {
    display: none;
}

nav ul li.btn.hide i:before {
    content: '\f00d';
}

@media all and (max-width:900px) {
    nav {
        padding: 5px 30px;
    }
    nav ul li.nav_links {
        width: 100%;
        display: none;
    }
    nav ul li.nav_links.show {
        display: block;
    }
    .header-content p {
        font-size: 15px;
    }
    .header-content .pha1 {
        font-size: 40px;
    }
    .header-content button {
        width: 130px;
        height: 40px;
        font-size: 15px;
    }
    /* nav ul li.nav_links a:hover {
box-shadow: 0 0 5px #fddb3a, 0 0 10px #1f1a05;
border-radius: 5px;
} */
    nav ul li.nav_links:after {
        opacity: 0;
    }
    nav ul li.btn {
        display: block;
    }
}

.mVideo video {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    z-index: -1;
    max-width: 100%;
    max-height: 100%;
}

.footer {
    background: #000;
    padding: 30px 0px;
    font-family: 'Play', sans-serif;
    text-align: center;
}

.footer .row {
    width: 100%;
    margin: 1% 0%;
    padding: 0.4% 0%;
    color: gray;
    font-size: 0.8em;
}

.footer .row a {
    text-decoration: none;
    color: gray;
    transition: 0.5s;
}

.footer .row a:hover {
    color: #fff;
}

.footer .row ul {
    width: 100%;
}

.footer .row ul li {
    display: inline-block;
    margin: 0px 30px;
}

.footer .row a i {
    font-size: 2em;
    margin: 0% 1%;
}

@media all and (max-width:720px) {
    .footer {
        text-align: left;
        padding: 4%;
    }
    .footer .row ul li {
        display: block;
        margin: 10px 0px;
        text-align: left;
    }
    .footer .row a i {
        margin: 0% 3%;
    }
}

main h2 {
    text-align: center;
    color: #fddb3a;
    padding: 25px 0;
}

.WHY-CHOOSE {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 90%;
    height: 100%;
    text-align: center;
    margin: 0 auto;
    flex-wrap: wrap;
}

.WHY-CHOOSE .Answer {
    /* width: 25vw; */
    flex: 25%;
    padding: 10px 25px;
}

.WHY-CHOOSE .Answer img {
    width: 6vw;
    height: 6wh;
}

.WHY-CHOOSE .Answer h3 {
    color: #fddb3a;
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

main h2 {
    text-align: center;
    color: #fddb3a;
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
    width: 32%;
    padding: 10px 20px;
}

.featured-cars .cars img {
    width: 100%;
    height: 100%;
}

.featured-cars .cars h3 {
    text-align: center;
    color: #fddb3a;
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


/* contact style */

header .mbackground img {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: fill;
    z-index: -1;
}

header .header-content h1 {
    font-size: 100px;
}

header .header-content {
    width: 50%;
    height: 50%;
}


/* end contact style */

main .contact-us {
    display: flex;
    padding: 20px 20px;
    justify-content: center;
    background-color: rgb(20, 20, 20);
    flex-wrap: wrap;
}

main .contact-us .cForm {
    margin: 0 40px 20px 0;
    width: 40vw;
}

main .contact-us .cForm input {
    width: 100%;
    height: 40px;
    margin-bottom: 15px;
    border-radius: 5px;
    padding: 0 10px;
}

main .contact-us .cMaps iframe {
    width: 500px;
    display: block;
}

main .contact-us .cForm .cNamePhone {
    width: 100%;
}

textarea {
    width: 100%;
    height: 80px;
    border-radius: 5px;
    padding: 10px 10px;
}

main .contact-us .cForm button {
    margin-top: 20px;
    width: 150px;
    height: 50px;
    font-size: 15px;
    background-color: #fddb3a;
    font-weight: bold;
    /* border-radius: 40px; */
    margin-bottom: 10px;
    color: white;
}


/* main .cMaps {}s */

main .cMaps p {
    font-size: 13px;
    padding: 10px;
    color: white;
}

main .cMaps p .title {
    color: #fddb3a;
    font-weight: bold;
}


/* The Modal (background) */

@media all and (max-width:900px) {
    main .contact-us {
        flex-direction: column;
        flex-wrap: wrap;
        width: 100%;
    }
    main .contact-us .cForm {
        width: 400px;
    }
    main .contact-us .cMaps iframe {
        width: 400px;
    }
}

.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}


/* Modal Content */

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}


/* The Close Button */

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

main .Gallery {
    display: flex;
    justify-content: center;
}

main .Gallery .gallery-cars {
    position: relative;
    width: 25%;
    height: 300px;
    margin: 20px;
    overflow: hidden;
}

main .Gallery .gallery-cars:hover .gallery-img {
    filter: none;
    transform: scale(1.25);
}

main .Gallery .gallery-cars:hover .gallery-title {
    /* top: 50%; */
    /* transform: translateX(-50%); */
    top: unset;
    bottom: 0%;
    opacity: 1;
}

main .Gallery .gallery-cars .gallery-img {
    position: absolute;
    filter: grayscale(100%);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all .25s ease-in-out;
}

main .Gallery .gallery-cars .gallery-title {
    color: white;
    opacity: 0;
    /* z-index: 10; */
    position: absolute;
    top: 100%;
    /* left: 50%; */
    text-align: center;
    background-color: rgba(0, 0, 0, 0.514);
    transition: transform .25s ease-in-out, top .25s ease-in-out, opacity .8s ease-in-out;
    width: 100%;
    justify-content: center;
    align-content: center;
    /* height: 100%; */
}

@media all and (max-width:1250px) {
    main .Gallery {
        /* flex-direction: column; */
        flex-wrap: wrap;
    }
}


/* test */

@media all and (max-width:1000px) {
    main .Gallery {
        /* flex-direction: column; */
        /* flex-wrap: wrap; */
    }
    main .Gallery .gallery-cars {
        width: 45%;
    }
}

@media all and (max-width:723px) {
    main .Gallery {
        flex-direction: column;
        /* flex-wrap: wrap; */
        height: 100%;
        /* width: 50%; */
        justify-content: center;
        align-content: center;
        flex-direction: column;
    }
}


/* booking */


/* booking Form */

.booking {
    display: flex;
    justify-content: center;
    margin: 20px auto;
}

.booking .row-b {
    /* justify-content: flex-end; */
    padding: 15px 10px;
    display: flex;
    justify-content: space-between;
}

.booking .row-b label {
    display: inline-block;
    margin-right: 18px;
    font-weight: bold;
    font-size: 20px;
}

.row-b input,
.row-b select {
    width: 300px;
    padding-left: 15px;
    height: 50px;
    border: px solid #00000080;
    outline: none;
    transition: 0.5s;
    font-size: 16px;
    border-radius: 10px;
}

.row-b input:focus,
.row-b select:focus {
    border-color: #fddb3a;
}

.booking a {
    text-decoration: none;
}

button {
    align-self: center;
    border: none;
    border-radius: 20px;
    margin-top: 15px;
    padding: 10px 25px;
    color: #ffffff;
    background-color: #000000;
    text-align: center;
    cursor: pointer;
    outline: none;
    transition: all 0.5s ease-in-out;
    position: relative;
    left: 50%;
    /* transform: translateX(-50%); */
    width: 140px;
    height: 50px;
    font-size: 18px;
}

button:hover {
    background-color: #fddb3a;
}

.row-b .energy {
    display: none;
}

.row-b .transmission {
    display: none;
}


/* End Resrvation Form */

@media all and (max-width: 1200px) {
    .header-title h1 {
        font-size: 40px !important;
        /* text-align: center; */
    }
}

@media all and (max-width: 769px) {
    .header-title h1 {
        font-size: 35px !important;
        /* text-align: center; */
    }
    /* Resrvation Form */
    .booking.booking .row-b {
        display: flex;
        flex-direction: column;
        padding: 20px 10px;
    }
    .row-b {
        padding: 10px !important;
    }
    .row-b input,
    .row-b select {
        padding: 0 10px !important;
        height: 30px !important;
    }
    .booking .booking .row-b label {
        margin: 0 0 10px 0 !important;
    }
    /* End Resrvation Form */
}

.pricedisplay {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 20px 0;
    background-color: #eeeff1;
    padding: 30px 0 60px 0;
    visibility: hidden;
    opacity: 0;
}

#checkprice:checked~.pricedisplay {
    visibility: visible;
    opacity: 1;
}

.pricedisplay h3 {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 1.2rem;
    color: #000000;
}

.pricedisplay p {
    font-weight: bolder;
    font-size: 2rem;
    color: #fddb3a;
}

.header-title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%);
    color: white;
}

.header-title h1 {
    font-size: 60px;
    text-align: center;
}

</style>
