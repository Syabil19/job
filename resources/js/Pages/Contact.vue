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

      <div class="container py-5">
        <h1 class="text-center mb-4">Contact Us</h1>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form @submit.prevent="submitForm">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" v-model="name" placeholder="Your Name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" v-model="email" placeholder="example@gmail.com" required />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" v-model="message" rows="4" placeholder="Your message" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
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
        name: '',
        email: '',
        message: ''
      };
    },
    methods: {
      submitForm() {
        // Handle form submission logic here
        console.log("Form submitted:", {
          name: this.name,
          email: this.email,
          message: this.message
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
