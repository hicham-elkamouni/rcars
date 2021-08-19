<template>
  <!------------ beginning of the header --------->
  
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <span class="bolder">R<span class="bolder" style="color: #E61722;" >CAR</span></span>
            
        </div>
        <ul class="links">
            <router-link to="/">Home</router-link>
            <!-- <router-link to="/" style="color: #e0ac1c;">Home</router-link> -->
            <!-- <li><a href="index.html" >HOME</a></li> -->
            <router-link to="/gallery">Gallery</router-link>
            <router-link to="/contact">Contact</router-link>
            <router-link to="/about">About</router-link>
            <router-link v-if="auth" to="/register">Register</router-link>
            <router-link v-else :to="{ name:'Dashboard'}">{{this.firstName + " "+ this.lastName}}</router-link>
            <div> 
            </div>
            
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
  data() {
    return {
      auth: true,
      firstName: "",
      lastName: "",
    };
  },
  beforeMount(){
    let user_id = window.sessionStorage.getItem("user_id");
    if (user_id !== null){
      this.auth = false;
      this.firstName = window.sessionStorage.getItem("firstName");
      this.lastName = window.sessionStorage.getItem("lastName");
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">

@import "../assets/style/includes/navbar";
@import "../assets/style/includes/base";


</style>
