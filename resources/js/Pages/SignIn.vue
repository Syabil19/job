<template>
    <AuthLayout>
      <h2 class="text-center">Sign In</h2>
      <form @submit.prevent="handleLogin" class="w-50 mx-auto">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            id="email"
            v-model="email"
            class="form-control"
            placeholder="Enter Your Email"
            required
          />
          <div v-if="errors.email" class="text-danger mt-1">
            {{ errors.email }}
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            id="password"
            v-model="password"
            class="form-control"
            placeholder="Enter Your Password"
            required
          />
          <div v-if="errors.password" class="text-danger mt-1">
            {{ errors.password }}
          </div>
        </div>
        <div v-if="errors.global" class="alert alert-danger">
          {{ errors.global }}
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign In</button>
      </form>
    </AuthLayout>
  </template>

  <script>
  import AuthLayout from "@/Layouts/AuthLayout.vue";

  export default {
    name: "SignIn",
    components: {
      AuthLayout,
    },
    data() {
      return {
        email: "",
        password: "",
        errors: {},
      };
    },
    methods: {
      handleLogin() {
        this.$inertia
          .post("/signin", { email: this.email, password: this.password })
          .catch((error) => {
            if (error.response?.data?.errors) {
              this.errors = error.response.data.errors;
            } else {
              console.error("An unexpected error occurred:", error);
            }
          });
      },
    },
  };
  </script>

  <style scoped>
  .text-center {
    text-align: center;
  }
  .w-50 {
    width: 50%;
  }
  .mx-auto {
    margin: 0 auto;
  }
  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }
  .text-danger {
    color: #dc3545;
  }
  .alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
  }
  </style>
