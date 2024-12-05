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

      <div class="bg-light py-4">
        <div class="container">
          <h1 class="text-center mb-4">Find Your Next Job</h1>
          <form class="row g-2 justify-content-center" @submit.prevent="searchJobs">
            <div class="col-md-5">
              <input type="text" class="form-control" v-model="jobTitle" placeholder="Job Title or Keywords" />
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" v-model="location" placeholder="Location" />
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
        </div>
      </div>

      <div class="container py-5">
        <h2 class="text-center mb-4">Available Jobs</h2>
        <div class="row">
          <div class="col-md-4" v-for="job in jobs" :key="job.id">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">{{ job.title }}</h5>
                <p class="card-text">Location: {{ job.location }}</p>
                <p class="card-text">Salary: {{ job.salary }}</p>
                <a href="#" class="btn btn-primary">View Job</a>
              </div>
            </div>
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
        jobTitle: '',
        location: '',
        jobs: [
          { id: 1, title: 'Software Engineer', location: 'Seremban', salary: 'RM 7000 - RM 8500/Month' },
          { id: 2, title: 'Marketing Specialist', location: 'Nilai', salary: 'RM 3500 - RM 4000/Month' },
          { id: 3, title: 'UI/UX Designer', location: 'Senawang', salary: 'RM 4000 - RM 4500/Month' },
        ]
      };
    },
    methods: {
      searchJobs() {
        // Simulate a job search with current criteria (could be replaced with an API call)
        console.log('Searching jobs for:', this.jobTitle, this.location);
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
