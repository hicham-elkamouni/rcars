<template>
    <div>
    <Navbar/>
    <div class="container">
      <!---------------- sign_up / sign_in --------------->
      <div class="sign-container">
      <img src="..\assets\img\Mobile-login.jpg" alt="">
      <div class="sign-form">
      <!---------------- sign_up--------------->
        <form class="sign-up" @submit.prevent="register" v-if="signUp">
          <span class="inline">Register</span>
          <input type="text" v-model="firstName" placeholder="Enter your first name">
          <input type="text" v-model="lastName" placeholder="Enter your last name">
          <!-- <select name=""  v-model="gender">
            <option value="" style="color: #929292" selected hidden>Enter your gender</option>
            <option value="">Male</option>
            <option value="">Female</option>
          </select> -->
          <input type="text" v-model="gender" placeholder="Enter your gender">
          <input type="text" v-model="cin" placeholder="Enter your CIN">
          <input type="text" v-model="phoneNumber" placeholder="Enter your phoneNumber number">
          <input type="text" v-model="address" placeholder="Enter your address">
          <input type="text" v-model="job" placeholder="Enter your job">
          <input type="text" v-model="email" placeholder="Enter your email">
          <input type="password" v-model="password" placeholder="Enter your password">
          <input type="password" v-model="passwordRepeat" placeholder="Repeat your password">
          <div class="inline checkbox">
            <input type="checkbox">
            <label for="">I have read and agreed to the terms of service.</label>
          </div>
          <button class="confirmation_button inline">Register</button>
          <p class="inline">Already have an account? <small class="link" @click="change">Log in.</small></p>
        </form>

        <!---------------- sign_in ----------------->
        <form class="sign-in" @submit.prevent="login" v-else>
          <span>Log In</span>
          <input class="input_width" type="text" v-model="email" placeholder="Enter your email">
          <input class="input_width" type="password" v-model="password" placeholder="Enter your password">
          <button class="confirmation_button">Log In</button>
          <p>Don't have an account? <small class="link" @click="change">Register.</small></p>
        </form>
      </div>
    </div>
    </div>
    <Footer/>
</div>
</template>

<script>
import axios from "axios";
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: "Register",
  components: {
    Navbar,
    Footer
  },
  data() {
    return {
      signUp: true,
      firstName : "",
      lastName : "",
      gender : "",
      cin : "",
      phoneNumber : "",
      address : "",
      job : "",
      email : "",
      password : "",
      passwordRepeat : "",
    };
  },
  methods: {
    change(){
      this.signUp = !this.signUp;
      this.firstName = "";
      this.lastName = "";
      this.gender = "";
      this.cin = "";
      this.phoneNumber = "";
      this.address = "";
      this.job = "";
      this.email = "";
      this.password = "";
      this.passwordRepeat = "";
    },
    async register(){
      const res = await axios.post(
        "http://localhost/rcars/apiUser/sign_up",
        {
          firstName: this.firstName,
          lastName: this.lastName,
          gender: this.gender,
          cin: this.cin,
          phoneNumber: this.phoneNumber,
          address: this.address,
          job: this.job,
          email: this.email,
          password: this.password
        }
      );
    },
    async login(){
      console.log("u're innnnnnn")
      const res = await axios.post(
        "http://localhost/rcars/apiUser/sign_in",
        {
          email: this.email,
          password: this.password
        }
      );

      if (res.data.status == true) {
        console.log(res.data);
        console.log("you're logged in");
        sessionStorage.setItem("id", res.data.id);
        sessionStorage.setItem("firstName", res.data.firstName);
        sessionStorage.setItem("lastName", res.data.lastName);
        localStorage.setItem("ifTrue", true);

        this.$router.push("/gallery");
      }
  }
}
};
</script>

<style scoped lang="scss">

.container{
  display: grid;
  justify-items: center;
  align-items: center;
  height: 90vh;
}

.sign-container {
  display: grid;
  grid-template-columns: 1fr 2fr;
  justify-items: center;
  align-items: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 0px 1px rgba(0, 0, 0, 0.1);
  border-radius: 30px;
  padding: 40px;
  width: 70%;
  height: 70vh;

  img{
    height: 350px;
  }

  input, select {
    height: 1.4rem;
    padding: 20px 10px;
    border: 1px solid #372E2E;
    outline: none;
    &::placeholder{
        color: #929292;
    }
  }

  span{
    font-size: 22px;
    font-weight: 600;
    color: #E61722;
  }

  .inline {
    grid-column-start: 1;
    grid-column-end: 3;
    justify-self: center;
  }

  .checkbox {
    display: flex;
    gap: 10px;
  }

  .link{
    color: #E61722;
    cursor: pointer;
    &:hover{
      text-decoration: underline;
    }
  }
}

.sign-up {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 25px 30px;
  }

.sign-in {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 25px 30px;
    justify-items: center;
}

.confirmation_button {
    padding :10px 25px;
    text-transform: uppercase;
    color: #FFFFFF;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    background-color: #E61722;
    border: none;
    cursor: pointer;
    width: 140px;
    height: 45px;
    font-weight: bold;
    transition: box-shadow 0.3s ease-in-out;
    &:hover {
        box-shadow: 0 0 11px rgba(33,33,33,.5); 
      }
}

.input_width {
  width: 100%;
}
</style>