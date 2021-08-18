<template>
  <div>
    <Navbar/>
    <div class="container_title_img">
    <!-- <div :style="{backgroundImage: 'url('+require('@/assets/'+'img/cars-transportation-races.jpg')+')'}" class="container_title_img"> -->
        <h3 class="title">Contact Us</h3>
    </div>
    <div class="container">
        <div class="container_contact_form_us">
            <!-- first section -->
            <div class="contact_form_container">
                <div class="container_line_title">
                    <h3 class="section_title">Contact Form</h3>
                    <!-- <hr class="line_after_section_title" data-content="contact"> -->
                </div>

                <div class="contact-form">
                    <input class="input_field" type="text" placeholder="Name">
                    <input class="input_field" type="text" placeholder="Email">
                    <input class="input_field" type="text" placeholder="Subject">
                    <input class="input_field" type="text" placeholder="Phone No">
                    <textarea class="contact-msg" cols="100" rows="10" placeholder="Message"></textarea>
                </div>
                <button class="confirmation_button">
                    submit
                </button>
                
            </div>
            
            <!--  second section -->
            <div class="contact_us_container">
                <h3 class="section_title">
                    Contact Us
                </h3>
                <div class="icons_container">
                    <div class="icon_container">
                        <img class="icon" src="..\assets\img\icons\telephone-handle-silhouette.png" alt="time">Bethpage New York 11714
                    </div>

                    <div class="icon_container">
                        <img class="icon" src="..\assets\img\icons\localisation.png" alt="telephone">+2126-34-777855
                    </div>

                    <div class="icon_container">
                        <img class="icon" src="..\assets\img\icons\email_icon.png" alt="email">contact@rcars.com
                    </div>

                    <div class="icon_container">
                        <img class="icon" src="../assets/img/icons/clock_icon.png" alt="clock">8:00AM - 9:00PM
                    </div>
                </div>
            </div>
        </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d640.9983072455299!2d-9.239082894364985!3d32.30019800088503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac2126025ff121%3A0x5fdad8a273729525!2sRestaurant%20Chez%20Hosni!5e0!3m2!1sfr!2sma!4v1629030969856!5m2!1sfr!2sma" height="600" width="99.5%" style="border: 1px solid #707070;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <Footer/>
</template>

<script>
// @ is an alias to /src

import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'Contact',
  components: {
    Navbar,
    Footer
  }
}
</script>

<style lang="scss">

@import "../assets/style/includes/contact";
@import "../assets/style/includes/base";

</style>
