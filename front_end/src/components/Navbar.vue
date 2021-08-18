<template>
  <!------------ beginning of the header --------->
  
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <span class="bolder">R<span class="bolder" style="color:#E61722">CAR</span></span>
            
        </div>
        <ul class="links">
            <router-link to="/">Home</router-link>
            <!-- <router-link to="/" style="color: #e0ac1c;">Home</router-link> -->
            <!-- <li><a href="index.html" >HOME</a></li> -->
            <router-link to="/gallery">Gallery</router-link>
            <router-link to="/contact">Contact</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/register">Register</router-link>
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
