<template>
  <Head title="SignIn" />
  <AppLayout>
    <!-- Main Content -->
    <div class="container mt-5 flex-grow-1">
      <h2 class="text-center">Sign In</h2>
      <form action="/login" method="POST" class="w-50 mx-auto">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            class="form-control"
            placeholder="Enter Your Username"
            required
          />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            class="form-control"
            placeholder="Enter Your Password"
            required
          />
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign In</button>
      </form>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from "../Layouts/AppLayout.vue"
import { Head } from '@inertiajs/vue3';
</script>

<style>
html,
body {
  height: 100%; /* Ensure full height */
  margin: 0;
}

#app {
  height: 100%; /* Applies to the Vue app wrapper */
}
</style>
