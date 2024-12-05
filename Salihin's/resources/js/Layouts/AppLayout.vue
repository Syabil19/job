<template>
  <div class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <Link
          class="navbar-brand"
          :href="route('pages.home')"
          :class="{ 'active font-bold': $page.url === '/' }"
        >
          Jobseeker
        </Link>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <Link
                class="nav-link"
                :href="route('pages.home')"
                :class="{ 'fw-bold active': $page.url === '/' }"
              >
                Home
              </Link>
            </li>
            <li class="nav-item">
              <Link
                class="nav-link"
                :href="route('pages.job')"
                :class="{ 'fw-bold active': $page.url === '/job'}"  

              >
                Jobs
              </Link>
            </li>
            <li class="nav-item">
              <Link
                class="nav-link"
                :href="route('pages.contact')"
                :class="{ 'fw-bold active': $page.url === '/contact' }"
              >
                Contact
              </Link>
            </li>
            <li class="nav-item">
              <Link
                class="nav-link"
                :href="route('pages.resume')"
                :class="{ 'fw-bold active': $page.url === '/resume' }"
              >
                Resume
              </Link>
            </li>
            <li class="nav-item">
              <Link
                class="nav-link"
                :href="route('pages.signin')"
                :class="{ 'fw-bold active': $page.url === '/signin' }"
              >
                Sign In
              </Link>
            </li>
            <li class="nav-item">
              <Link
                class="nav-link"
                :href="route('pages.signup')"
                :class="{ 'fw-bold active': $page.url === '/signup' }"
              >
                Sign Up
              </Link>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content Slot -->
    <div class="container py-4">
      <slot></slot>
    </div>

    <!-- Footer -->
    <footer class="py-3 bg-dark text-light text-center mt-auto">
      <div class="container">
        <p>&copy; 2024 FitWeb. All rights reserved.</p>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
