<template>
    <Head title="SignUp" />
   <appLayout>
        <div class="container mt-5">
            <h2 class="text-center">Sign Up</h2>
            <form action="/register" method="POST" class="w-50 mx-auto">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter Your Username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Your Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
        </div>
    </appLayout>

</template>

<script setup>
import { route } from 'ziggy-js';
import AppLayout from "../Layouts/AppLayout.vue" 
import { Head } from '@inertiajs/inertia-vue3'
</script>
