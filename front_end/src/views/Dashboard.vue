<template>
<div>
<Navbar/>
  <div class="container">
    <div class="container-width">
    <div class="logout-container">
    <button @click="logout()" class="action-btn">Log Out</button>
    </div>
    
  
    <!-- User Personal Details -->
    <div class="box pesonal-info">
      <div class="user-name">
        <span class="info-title">WELCOME BACK !{{ profession }}</span>
        <span class="name">{{ firstName }} {{ lastName }}</span>
      </div>
      <div class="user-info">
      <span class="info-title">Age : 21 <span class="info">{{ age }} years old</span></span>
      <span class="info-title">CIN : HH127001 <span class="info">{{ cin }}</span></span>
    </div>
    </div>
    <div class="for-space"></div>
    <!-- User Personal Details -->
    <!-- <div class="btn-container">
      <button class="action-btn" @click="editAppointment">Book Appointment</button>
    </div> -->
    <!-- User appointments -->
    <div class="box">
    <table>
      <thead>
        <tr>
          <th>Number</th>
          <th>type</th>
          <th>brand</th>
          <th>color</th>
          <th>Edit / Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(car, index) in cars" :key="car.vehicle_id">
          <td>{{ index + 1 }}</td>
          <td>{{ car.type }}</td>
          <td>{{ car.brand }}</td>
          <td>{{ car.color }}</td>
          <td>
          <button class="edit" @click.prevent="editAppointment(appointment.bookingId)">Edit</button>
          <button class="delete" @click="deleteBooking(car.booking_id)">Delete</button>
          
          </td>
        </tr>
      </tbody>
    </table>
    </div>
    <!-- User appointments -->
    <!-- If user has no appointments -->
    <!-- <p class="noBookings" >No Bookings are found.</p> -->
    <!-- If user has no appointments -->
    
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
  name: 'Dashboard',
  components: {
    Navbar,
    Footer
  },
  data() {
    return {
      cars: {},
      user_personal_informations: {},
      firstName : sessionStorage.getItem("firstName"),
      lastName : sessionStorage.getItem("lastName"),
      app: false
    };
  },
  methods: {
    logout(){
      window.sessionStorage.removeItem("user_id");
      window.sessionStorage.removeItem("firstName");
      window.sessionStorage.removeItem("lastName");
      // Redirect to home
      this.$router.push("/");
    },
    // delete booking 
    async deleteBooking(id) {
      console.log(id);
      let obj = {
        appointement_id: id
      };
      console.log(obj);
      const response = await axios.delete(
        `http://localhost/rcars/ApiBooking/deleteBooking/${id}`
      );

      if (response.data) {
        console.log(response.data);
      }
      this.getAllAppointements();
    },

    checkuser() {
      let user_id = sessionStorage.getItem("user_id");
      if (user_id != null) {
        this.getAllAppointements();
      } else {
        this.$router.push("/");
      }
    },
    async getAllAppointements() {
      let u_id = sessionStorage.getItem("user_id");
      const response = await axios.get(
        "http://localhost/rcars/ApiBooking/getAllBookings/" +
          u_id,
        
      );
      console.log(response.data.cars);
      
      if (response.data.status == true) {
        
        this.cars = response.data.cars;
        this.user_personal_informations = response.data.personal_infos;
        
      } else {
        this.app = false;
      }
    },
    
  },
  
  beforeMount() {
    this.checkuser();
  }
};
</script>

<style scoped lang="scss">

@import "../assets/style/includes/base";

.container {
  display: flex;
  flex-direction: row;
  justify-content: center;
  padding: 50px 0;
}
.container-width {
 width: 70%;
}
.box {
  padding: 40px 50px;
  border-radius: 30px;
  box-shadow: 0 2px 12px -5px #000000;
}
.action-btn {
  text-transform: uppercase;
  font-weight: bold;
  color: #ffff;
  background-color: #E61722;
  border: 0px;
  border-radius: 20px;
  padding: 10px 30px;
  transition: ease-in-out 0.3s;
}
.action-btn:hover {
  background-color: #ffffff;
  border : 1px solid #E61722;
  color: #E61722;
}
.pesonal-info {
  display: grid;
  text-align: start;
  grid-template-columns: repeat(2, 1fr);
  align-items: baseline;
}
.user-name,
.user-info{
  display: grid;
  padding: 10px 0;
}
.user-name{
grid-row-gap: 10px;
border-right: 1px solid #cacaca;
height: unset;
}
.user-info{
grid-row-gap: 15px;
padding-left: 50px;
}
.name{
  font-size: 30px;
  font-weight: 700;
}
.info{
  font-weight: 500;
}
.info-title{
  font-weight: 600;
}
.copy-token input{
  font-weight: 600;
  color: #363772;
  outline: none;
  border: 2px solid #363772;
  border-radius: 30px 0 0 30px;
  padding: 10px;
}
.copy-token button{
  text-transform: uppercase;
  font-weight: 600;
  color: #fff;
  border-radius: 0 30px 30px 0;
  border: 2px solid #363772;
  background-color: #363772;
  padding: 10px 30px;
}
table {
  width: 100%;
  border-collapse: collapse;
}
thead tr th
{
  font-weight: bold;
  text-transform: uppercase;
  color: #363772;
  padding-bottom: 20px;
}
tbody tr td
{ 
  font-weight: 500;
  text-align: center;
  padding: 10px 0;
}
tbody tr td .edit
{
  font-weight: 500;
  color: #fff;
  border-radius: 30px 0 0 30px;
  border: 0px;
  background-color: #42b983;
  padding: 6px 10px;
  transition: ease-in-out 0.3s;
}
tbody tr td .edit:hover
{
  background-color: #363772;
}
tbody tr td .delete
{
  font-weight: 500;
  color: #fff;
  border-radius: 0 30px 30px 0;
  border: 0px;
  background-color: #a11d06;
  padding: 6px 10px;
  transition: ease-in-out 0.3s;
}
tbody tr td .delete:hover
{
  background-color: #b39162;
}
.btn-container {
  display: flex;
  justify-content: space-between;
  padding: 40px;
}
.logout-container {
  display: flex;
  justify-content: flex-end;
  padding: 10px 40px 30px;
}
.noBookings {
  font-weight: 500;
  padding: 40px 50px;
  border-radius: 30px;
  box-shadow: 0 2px 12px -5px #000000;
}

// updates adding div for space
.for-space{
  padding : 50px 0 0 !important;
}
</style>