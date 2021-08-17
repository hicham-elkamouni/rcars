<template>
    <div class="container">
                <form class="form_container" @submit.prevent="signup" v-if="display">
                <div class="form_input_container">
                    <label class="form_label" for="userFirstName">First Name</label>
                    <input class="form_input" type="text" v-model="userFirstName" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userLastName">Last Name</label>
                    <input class="form_input" type="text" v-model="userLastName" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userGender">Gender</label>
                    <input class="form_input" type="text" v-model="userGender" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userCIN">CIN</label>
                    <input class="form_input" type="date" v-model="userCIN" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userPhoneNumber">Phone Number</label>
                    <input class="form_input" type="tel" v-model="userPhoneNumber" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userAddress">Address</label>
                    <input class="form_input" type="text" v-model="userAddress" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userJob">Job</label>
                    <input class="form_input" type="text" v-model="userJob" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userEmail">Email</label>
                    <input class="form_input" type="text" v-model="userEmail" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userPassword">Password</label>
                    <input class="form_input" type="text" v-model="userPassword" />
                </div>
                <div class="form_input_container">
                    <label class="form_label" for="userPasswordConfimration">Password Confirmation</label>
                    <input class="form_input" type="text" v-model="userPasswordConfirmation"/>
                </div>
                <button type="submit" class="form_button">
                    Sign Up
                </button>
                <small v-if="incomplete">{{ msg }}</small>
                <span
                    >Already got an account.
                    <span class="swap" @click="showSign">
                    Sign In.
                    </span></span>
                </form>

                <form class="form_container" @submit.prevent="signin" v-else>
                    <div class="form_input_container">
                        <label class="form_label" for="Reference">Email</label>
                        <input class="form_input" type="text" placeholder="Enter Your Email" v-model="Email" />
                    </div>
                    <div class="form_input_container">
                        <label class="form_label" for="Reference">Password</label>
                        <input class="form_input" type="text" placeholder="Enter Your Password" v-model="Password" />
                    </div>
                    <button type="submit" class="form_button">
                        check
                    </button>
                    <small v-if="incomplete">{{ msg }}</small>
                    <span>Register now from
                        <span class="swap" @click="showSign">here
                        </span></span>
                </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      /* sign up propreties  */
      userFirstName: "",
      userLastName: "",
      userGender: "",
      userCIN: "",
      userPhoneNumber: "",
      userAddress: "",
      userJob: "",
      userEmail: "",
      userPassword: "",
      userPasswordConfirmation: "",
      /* sign in propreties */
      Email: "",
      Password: "",

      display: true,
      incomplete: false,
      msg: ""
    };
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>