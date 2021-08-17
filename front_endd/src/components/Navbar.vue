<template>
  <!------------ beginning of the header --------->
  
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <span>R<span style="color:#e0ac1c">CAR</span></span>
            
        </div>
        <ul class="links">
            <router-link to="/" style="color: #e0ac1c;">Home</router-link>
            <router-link to="/contact">Contact</router-link>
            <!-- <li><a href="index.html" >HOME</a></li> -->
            <li><a href="gallery.html">GALLERY</a></li>
            <li><a href="reservation.html">RESERVATION</a></li>
            <router-link to="/contact">Contact</router-link>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="about.html">CONNEXION</a></li>

        </ul>
        <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>
    <!------------ end of the header ------------->
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

@import "../assets/style/includes/navbar";
@import "../assets/style/includes/base";


</style>
