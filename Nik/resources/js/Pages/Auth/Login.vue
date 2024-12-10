<template>
    <div>
      <h1>Login</h1>
      <form @submit.prevent="submit">
        <input v-model="form.email" type="email" placeholder="Email" required />
        <input v-model="form.password" type="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
      <div v-if="errors">
        <p v-for="(error, index) in errors" :key="index">{{ error }}</p>
      </div>
    </div>
  </template>

  <script>
import { useForm } from '@inertiajs/inertia-vue3';


  export default {
    setup() {
      const form = useForm({
        email: '',
        password: '',
      });

      function submit() {
        form.post('/signin');
      }

      return { form, errors: form.errors };
    },
  };
  </script>
