<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="home">JobSeeker</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <Link class="nav-link" href="/home">Home</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" href="/job">Job</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" href="/contact">Contact</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" href="/resume">Resume</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" href="/signin">Sign In</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" href="/signup">Register</Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <h2 class="text-center">Submit Your Resume</h2>
        <form @submit.prevent="submitResume" class="w-50 mx-auto">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" v-model="formData.name" class="form-control" placeholder="Your Name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" v-model="formData.email" class="form-control" placeholder="example@gmail.com" required />
          </div>
          <div class="mb-3">
            <label for="resume" class="form-label">Upload Resume (PDF)</label>
            <input type="file" id="resume" @change="handleFileChange" class="form-control" accept=".pdf" required />
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>

      <footer class="py-3 bg-dark text-light text-center">
        <div class="container">
          <p>&copy; 2024 FitWeb. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </template>

  <script>
import { Link } from "@inertiajs/inertia-vue3";



  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          resume: null
        }
      };
    },
    methods: {
      handleFileChange(event) {
        this.formData.resume = event.target.files[0];
      },
      submitResume() {
        // Create FormData object to handle file upload
        const formData = new FormData();
        formData.append('name', this.formData.name);
        formData.append('email', this.formData.email);
        formData.append('resume', this.formData.resume);

        // Example of how to send the data to an API
        this.$axios.post('/submit_resume', formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        })
        .then(response => {
          console.log('Resume submitted successfully', response);
        })
        .catch(error => {
          console.error('Error submitting resume', error);
        });
      }
    },
    components: {
      Link,
    },
  };


  </script>

  <style scoped>
  html, body {
    height: 100%;
  }
  body {
    display: flex;
    flex-direction: column;
  }
  .container {
    flex: 1;
  }
  </style>
