<template>
<Head title="Job" />
  <AppLayout>
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
    </AppLayout>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import AppLayout from "../Layouts/AppLayout.vue";
  import { Head } from '@inertiajs/inertia-vue3';

    const featuredJobs = ref([
        { title: 'Software Developer', company: 'TechCorp' },
        { title: 'Graphic Designer', company: 'Creative Studio' },
        { title: 'Marketing Specialist', company: 'MarketPro' }
    ]);

    </script>

  <style>
  /* Add any custom CSS here if needed */
  </style>
  