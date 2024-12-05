<template>
    <div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="/home">
            <strong>JobSeeker</strong>
          </a>
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

      <!-- Main Content Slot -->
      <div class="container mt-5 mb-5">
        <slot></slot> <!-- This will render SignIn or SignUp content -->
      </div>

      <!-- Footer -->
      <footer class="footer bg-light text-dark text-center py-4 mt-auto">
    <div class="container">
      <p class="mb-0">&copy; 2024 JobSeeker. All rights reserved.</p>
      <div class="social-icons mt-3">
        <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </footer>
    </div>
  </template>

  <script>
  import { Link } from '@inertiajs/inertia-vue3';

  export default {
    name: 'AuthLayout',
    components: {
      Link,
    },
  };
  </script>

  <style scoped>
  html, body {
    height: 100%;
    margin: 0;
  }

  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'Arial', sans-serif; /* Custom font */
  }

  .container {
    flex: 1;
  }

  .navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for navbar */
  }

  .navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333; /* Dark text for the brand */
  }

  .navbar-nav .nav-link {
    font-size: 1rem;
    color: #555;
    transition: color 0.3s ease;
  }

  .navbar-nav .nav-link:hover {
    color: #007bff; /* Hover color */
  }

  footer {
    background-color: transparent; /* Make the footer background transparent */
    color: #ffffff; /* White text for visibility */
    text-align: center;
    padding: 20px 0; /* Adjust padding for better spacing */
    width: 100%;
    margin-top: auto; /* Push the footer to the bottom */
    border-top: 1px solid rgba(255, 255, 255, 0.2); /* Light border for visual separation */
  }

  .social-icons a {
    font-size: 1.5rem;
    color: #000000; /* White icons */
    margin: 0 10px; /* Space out social icons */
    text-decoration: none;
    transition: color 0.3s ease;
  }



  footer .social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
  }

  footer p {
    font-size: 1rem;
    color: #13100e ; /* White text */
    margin-bottom: 0;
  }

  footer .container {
    max-width: 1200px;
    padding: 0 15px;
  }
  </style>
