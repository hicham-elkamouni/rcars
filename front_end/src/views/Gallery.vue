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
                <div class="imagee">
                    <img src="../assets/img/gallery/mercedes.jpg" alt="mercedes">
                    <div class="details">
                        <h2><span>mercedes</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <a href="Reservation.html" class="read-more">RENT <span>NOW</span></a>
                        </div>
                    </div>
                </div>
                <!--image card end-->
                <!--image card start-->
                <div class="imagee">
                    <img src="../assets/img/gallery/volkswagen_tiguan.jpg" alt="volkswagen tiguan">
                    <div class="details">
                        <h2><span>volkswagen</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <a href="Reservation.html" class="read-more">RENT <span>NOW</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--image card end-->
                <!--image card start-->
                <div class="imagee">
                    <img src="../assets/img/gallery/Audi_A8.jpg" alt="Audi A8">
                    <div class="details">
                        <h2><span>Audi A8</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <a href="Reservation.html" class="read-more">RENT <span>NOW</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--image card end-->
            </div>
            <!--image row end-->
            <!--image row start-->
            <div class="roww">
                <!--image card start-->
                <div class="imagee">
                    <img src="../assets/img/gallery/porsche-taycan.jpg" alt="porsche-taycan">
                    <div class="details">
                        <h2><span>porsche-taycan</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <a href="Reservation.html" class="read-more">RENT <span>NOW</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--image card end-->
                <!--image card start-->
                <div class="imagee">
                    <img src="../assets/img/gallery/peugeot.jpg" alt="peugeot">
                    <div class="details">
                        <h2><span>peugeot</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <a href="Reservation.html" class="read-more">RENT <span>NOW</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--image card end-->
                <!--image card start-->
                <div class="imagee">
                    <img src="../assets/img/gallery/bmw.jpg" alt="bmw">
                    <div class="details">
                        <h2><span>bmw</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="more">
                            <a href="Reservation.html" class="read-more">Rent <span>NOW</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
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

import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'Gallery',
  components: {
    Navbar,
    Footer
  }
}
</script>


<style lang="scss">
  /* ---------- about us --------- */

@import "../assets/style/includes/gallery";
@import "../assets/style/includes/base";
</style>
