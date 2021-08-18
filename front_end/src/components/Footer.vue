<template>
    <!------------ beginning of footer --------->
    <footer class="footer-distributed">

        <div class="footer-left">
            <span>R<span style="color:#E61722">CAR</span></span>

            <p class="footer-links">
                <router-link to="/">Home</router-link>|
                <router-link to="/gallery">Gallery</router-link>|
                <router-link to="/contact">Contact</router-link>|
                <router-link to="/about">About</router-link>|
                <router-link to="/register">Register</router-link>
            </p>

            <p class="footer-company-name">Lorem ipsum dolor sit amet consectetur.</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>309 - Rupa Solitaire,
                     Bldg. No. A - 1, Sector - 1</span> Mahape, Navi Mumbai - 400710</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 22-27782183</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:hichamelkamouni.dev@gmail.com">hichamelkamouni.dev@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo explicabo facilis minima laboriosam necessitatibus.</p>
        </div>
    </footer>
    <!------------ end of the footer --------->
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">

@import "../assets/style/includes/Footer";
@import "../assets/style/includes/base";


</style>
