<template>
  <Head title="Resume" />
        
<AppLayout>

    <div class="container mt-5">
        <h2 class="text-center">Submit Your Resume</h2>
        <form action="/submit_resume" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="resume" class="form-label">Upload Resume (PDF)</label>
                <input type="file" id="resume" name="resume" class="form-control" accept=".pdf" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</AppLayout>

</template>

<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { Head } from '@inertiajs/vue3';
</script>

