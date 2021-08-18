<template>
  <div class="container">
    <div class="container-width">
    <div class="logout-container">
    <button @click="logOut" class="action-btn">Log Out</button>
    </div>
    
  
    <!-- User Personal Details -->
    <div class="box pesonal-info">
      <div class="user-name">
        <span class="name">{{ firstName }} {{ lastName }}</span>
        <span class="info-title">{{ profession }}</span>
      </div>
      <div class="user-info">
      <span class="info-title">Age : <span class="info">{{ age }} years old</span></span>
      <span class="info-title">CIN : <span class="info">{{ cin }}</span></span>
    </div>
    </div>
    <!-- User Personal Details -->
    <div class="btn-container">
    <span class="copy-token">
          <input readonly id="copyToken" :value="token">
          <button @click.prevent="copyToken">Copy Token</button>
    </span>
      <button class="action-btn" @click="$refs.Modal.openModal">Book Appointment</button>
    </div>
    <!-- User appointments -->
    <div v-if="appointments" class="box">
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Subject</th>
          <th>Time</th>
          <th>Edit / Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(appointment, index) in appointments" :key="appointment.bookingId">
          <td>{{ appointments[index].bookingDate }}</td>
          <td>{{ appointments[index].bookingSubject }}</td>
          <td>{{ appointments[index].bookingTiming }}</td>
          <td>
          <button class="edit" @click.prevent="editAppointment(appointment.bookingId)">Edit</button>
          <button class="delete" @click="getResponse(response), bookingId = appointment.bookingId">Delete
          </button>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
    <!-- User appointments -->
    <!-- If user has no appointments -->
    <p class="noBookings" v-else>No appointments are found.</p>
    <!-- If user has no appointments -->
    
  </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  components: {
    name: 'Contact',
  components: {
    
  }
  },
  data() {
    return {
      appointments: false,
      firstName: "",
      lastName: "",
      cin: "",
      age: "",
      profession: "",
      appointments: "",
      date: "",
      subject: "",
      time: "",
      bookingId: "",
      token: window.localStorage.getItem("token"),
    };
  },
  methods: {
    // Load loged in user data
    async loadData() {
      const res = await axios.post(
        "http://localhost/lawyer/appointment/readAppointment",
        {
          reference: window.localStorage.getItem("token"),
        }
      );
      // If no error exists
      if (!res.data.error) {
        this.firstName = res.data.user_data.personal_data.firstName;
        this.lastName = res.data.user_data.personal_data.lastName;
        this.cin = res.data.user_data.personal_data.cin;
        this.age = res.data.user_data.personal_data.age;
        this.profession = res.data.user_data.personal_data.profession;
        // get appointments object lenght
        let objectLenght = Object.keys(res.data.user_data.appointments).length;
        // Check if user got any appointments
        if (objectLenght > 0) {
          this.appointments = true;
          this.appointments = res.data.user_data.appointments;
        } else {
          this.appointments = false;
        }
      }
      // If an error exists
      else {
        // Redirect to dashboard
        window.localStorage.removeItem("token");
        this.$router.push("/");
      }
    },
    // Change the button state from booking to editing
    editAppointment(Id) {
      this.$refs.Modal.editState(Id);
    },
    // Get the confirmation before deleting an appointment
    getResponse(response) {
      this.$refs.ConfirmNotif.openConfirmation();
      // If response is true
      if (response) {
        this.deleteAppointment(this.bookingId);
      }
    },
    // Delete an appointment
    async deleteAppointment(Id) {
      const res = await axios.post(
        "http://localhost/lawyer/appointment/deleteAppointment",
        {
          booking_id: Id,
        }
      );
      // If no error exists
      if (!res.data.error) {
        // Fetch data
        this.loadData();
        // Display a notification message
        this.$refs.notification.openNotif(res.data.message);
      }
      // If an error exists
      else {
        // Display a notification message
        this.$refs.notification.openNotif(res.data.message);
      }
    },
    // Copy the token to the clipboard
    copyToken(){
    let copyToken = document.getElementById("copyToken");
    // Select the token
    copyToken.select();
    // For mobile devices
    copyToken.setSelectionRange(0, 99999);
    // Copy the token to the clipboard
    document.execCommand("copy");
    console.log(copyToken.value);
  },
    // Log user out
    logOut() {
      // Redirect to dashboard
      window.localStorage.removeItem("token");
      this.$router.push("/");
    },
  },
  // Load user data just before vue app being rendered
  beforeMount() {
    this.loadData();
  },
};
</script>

<style scoped>
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
  background-color: #363772;
  border: 0px;
  border-radius: 20px;
  padding: 10px 30px;
  transition: ease-in-out 0.3s;
}
.action-btn:hover {
  background-color: #b39162;
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
</style>