<template>
<div>
  <Navbar/>
        <!-- page header start -->

            <div class="container_title_img">
                <h3 class="title">Our Gallery</h3>
            </div>
        <!-- page header end -->

        <!--image card layout start-->
        <div class="container">
            <!--image row start-->
            <div class="roww">
                <!--image card start-->
                <div class="imagee" v-for="car in cars_obj" :key="car.vehicle_id">
                    <img :src="car.img_path" alt="mercedes">
                    <div class="details">
                        <h2><span>{{car.brand}}</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <button class="rent-button" @click="rent(car.vehicle_id)">Rent Now</button>
                        </div>
                    </div>
                </div>
                <!--image card end-->

                <!--image card end-->
            </div>
            <!--image row end-->
        </div>
        <!--image card layout end-->
        
    <Footer/>
    </div>
</template>

<script>
// @ is an alias to /src

import axios from "axios";
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'Gallery',
  components: {
    Navbar,
    Footer
  },
  data() {
    return {
      cars_obj: "",
      user_id : window.sessionStorage.getItem("user_id"),
    };
  },
  methods: {
      async getAllCars() {
      const response = await axios.get(
        "http://localhost/rcars/ApiBooking/showAllCars"
      );

      if (response.data.status == true) {
          this.cars_obj = response.data.cars;
      } else {
        this.app = false;
      }
    },
    async rent(id) {
        console.log(id);
        const response = await axios.post(
        "http://localhost/rcars/ApiBooking/rentCar",
        {
          user_id : window.sessionStorage.getItem("user_id"),
          vehicle_id : id
        },
        this.$router.push("/dashboard"),
      );

      if (response.data.status == true) {
          this.cars_obj = response.data.cars;
      }
    }
  },
  beforeMount() {
    this.getAllCars();
  }
}
</script>


<style lang="scss">
  /* ---------- about us --------- */

@import "../assets/style/includes/gallery";
@import "../assets/style/includes/base";

.rent-button {
    text-transform: uppercase;
    font-weight: bold;
    color: #ffff;
    background-color: #E61722;
    border: 0px;
    border-radius: 20px;
    padding: 10px 30px;
    transition: ease-in-out 0.3s
}
</style>
