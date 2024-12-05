<template>
    <Head title="Home" />
    <div class="d-flex flex-column min-vh-100">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <Link class="navbar-brand" :href="route('pages.home')">JobSeeker</Link>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><Link class="btn btn-outline-primary btn-sm me-3" :href="route('pages.signin')">Register</Link></li>

                <li class="nav-item"><Link class="text-primary text-decoration-none fw-bold" href="">Employee Site</Link></li>
            </ul>
          </div>
        </div>
      </nav>
  
      <div class="bg-light py-4">
        <div class="container text-center">
          <h1>Find Your Dream Job</h1>
          <p class="lead">Thousands of jobs are waiting for you. Start your search today!</p>
          <form class="row g-2 justify-content-center">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Job Title or Keywords">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Location">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary">Search Jobs</button>
            </div>
          </form>
        </div>
      </div>
  
      <!-- Featured Jobs Section -->
      <div class="container py-5">
        <h2 class="text-center">Featured Jobs</h2>
        <div class="row">
          <div class="col-md-4" v-for="(job, index) in featuredJobs" :key="index">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">{{ job.title }}</h5>
                <p class="card-text">Company: {{ job.company }}</p>
                <a href="#" class="btn btn-primary">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Testimonials Section -->
      <div class="bg-light py-5">
        <div class="container">
          <h2 class="text-center">What Our Users Say</h2>
          <div class="row">
            <div class="col-md-4" v-for="(testimonial, index) in testimonials" :key="index">
              <blockquote class="blockquote text-center">
                <p>"{{ testimonial.message }}"</p>
                <footer class="blockquote-footer">{{ testimonial.author }}</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Footer Section -->
      <footer class="py-3 bg-dark text-light text-center">
        <div class="container">
          <p>&copy; 2024 FitWeb. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';  // Import ref for reactive variables
  import { Head } from '@inertiajs/inertia-vue3';

  
  // Define reactive variables
  const featuredJobs = ref([
    { title: "Software Developer", company: "TechCorp" },
    { title: "Graphic Designer", company: "Creative Studio" },
    { title: "Marketing Specialist", company: "MarketPro" },
  ]);
  
  const testimonials = ref([
    { message: "I found my dream job in just a week!", author: "Sarah" },
    { message: "The job listings are always up-to-date and accurate.", author: "Mick" },
    { message: "A great platform to connect with top companies.", author: "Amalia" },
  ]);
  
  </script>
  
  <style scoped>
  /* Add any custom styles here if needed */
  </style>
  