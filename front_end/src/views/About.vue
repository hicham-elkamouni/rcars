<template>
<div>
  <Navbar/>
    <div class="container_title_img">
        <h3 class="title">About Us</h3>
    </div>
    <div class="container">
        <div class="img_txt_container">
            <div class="img_container">
                    <img class="img_test" src="../assets/img/about_us.jpg" alt="company image">
            </div>
            <div class="txt_container">
                <h2 class="about_us_title">About <span class="red_title">Us</span></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit eius reiciendis eligendi non, sunt quisquam esse nesciunt nam placeat autem nobis neque, voluptates est! Distinctio, doloribus. Voluptatibus, molestiae itaque unde nam sit et cupiditate aperiam incidunt quis amet consequatur porro doloremque officiis veniam. Quam, aliquam iusto vel vitae in accusamus dicta ex placeat cum sapiente ab similique obcaecati porro optio ipsam repellendus? Iure, accusantium! Dignissimos .
                </p>
            </div>
        </div>
    </div>

    <div class="partners_container">
        <h2 class="partners_title">
            OUR <span class="red_title">PARTNERS</span>
        </h2>
        <div class="partners_icons">
            <div class="partner_icon">
                <img class="partner_img" src="../assets/img/partners/mercedes_logo.png" alt="">
            </div>
            <div class="partner_icon">
                <img class="partner_img" src="../assets/img/partners/bmw_logo.png" alt="">
            </div>
            <div class="partner_icon">
                <img class="partner_img" src="../assets/img/partners/porshe_logo.png" alt="">
            </div>
            <div class="partner_icon">
                <img class="partner_img" src="../assets/img/partners/Volkswagen_logo.png" alt="">
            </div>
        </div>
    </div>

    <div>
        <h2 class="partners_title">
            <span class="black_title">OUR</span> <span class="red_title">TEAM</span>
        </h2>
    </div>
    <div class="team-container">
        <div class="teammate">
        <img class="teammate-img" src="..\assets\img\pics\pic_1.png" alt="" />
        <span class="name">John Smith</span>
        <span class="post">Sales Manager</span>
        <div class="team-socials">
            <a target="blank" href="">
            <img src="..\assets\img\icons\instagram-symbol.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\facebook-logo.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\twitter-sign.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\linkedin-sign.png" alt="" />
            </a>
        </div>
        </div>
        <div class="teammate">
        <img class="teammate-img" src="..\assets\img\pics\pic_2.png" alt="" />
        <span class="name">Jordan Belson</span>
        <span class="post">CEO-Founder</span>
        <div class="team-socials">
            <a target="blank" href="">
            <img src="..\assets\img\icons\instagram-symbol.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\facebook-logo.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\twitter-sign.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\linkedin-sign.png" alt="" />
            </a>
        </div>
        </div>
        <div class="teammate">
        <img class="teammate-img" src="..\assets\img\pics\pic_3.png" alt="" />
        <span class="name">Jordi Smith</span>
        <span class="post">UI/UX Designer</span>
        <div class="team-socials">
            <a target="blank" href="">
            <img src="..\assets\img\icons\instagram-symbol.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\facebook-logo.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\twitter-sign.png" alt="" />
            </a>
            <a target="blank" href="">
            <img src="..\assets\img\icons\linkedin-sign.png" alt="" />
            </a>
        </div>
        </div>
    </div>

    <Footer/>
    </div>
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
  /* ---------- about us --------- */

@import "../assets/style/includes/about";
@import "../assets/style/includes/base";
</style>
