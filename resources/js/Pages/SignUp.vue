<template>
    <AuthLayout>
      <h2 class="text-center">Register</h2>
      <form @submit.prevent="handleSignUp" class="w-50 mx-auto">
        <div class="mb-3">
          <label for="name" class="form-label">Username</label>
          <input type="text" id="name" v-model="form.name" class="form-control" placeholder="Enter Your Username" required />
          <div v-if="$page.props.errors.name" class="text-danger mt-1">
            {{ $page.props.errors.name }}
          </div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" v-model="form.email" class="form-control" placeholder="example@gmail.com" required />
          <div v-if="$page.props.errors.email" class="text-danger mt-1">
            {{ $page.props.errors.email }} 
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" v-model="form.password" class="form-control" placeholder="Enter Your Password" required />
          <div v-if="$page.props.errors.password" class="text-danger mt-1">
            {{ $page.props.errors.password }}
          </div>
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" id="password_confirmation" v-model="form.password_confirmation" class="form-control" placeholder="Confirm Your Password" required />
          <div v-if="$page.props.errors.password_confirmation" class="text-danger mt-1">
            {{ $page.props.errors.password_confirmation }}
          </div>
        </div>

        <div v-if="form.password !== form.password_confirmation" class="text-danger mb-3">
          Passwords do not match.
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>
    </AuthLayout>
  </template>

  <script>
  import AuthLayout from '@/Layouts/AuthLayout.vue'; // Import the layout

  export default {
    name: 'SignUp',
    components: {
      AuthLayout, // Register the layout as a component
    },
    data() {
      return {
        form: {
          name: '',
          email: '',
          password: '',
          password_confirmation: '',
        },
      };
    },
    methods: {
      handleSignUp() {
        this.$inertia.post('/signup', this.form);  // Send data to backend
      },
    },
  };
  </script>
