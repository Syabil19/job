<template>
    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/home">JobSeeker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="nav-item" v-if="user">
                            <span class="nav-link">Hello, {{ user.name }}</span>
                        </li>
                        <li v-if="!user" class="nav-item">
                            <Link class="nav-link" href="/signin">Sign In</Link>
                        </li>
                        <li v-if="!user" class="nav-item">
                            <Link class="nav-link" href="/signup">Register</Link>
                        </li>
                        <li v-if="user" class="nav-item">
                            <button @click="$inertia.post('/logout')" class="btn btn-link nav-link">Logout</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Featured Jobs -->
        <div class="container py-5">
            <h2 class="text-center">Featured Jobs</h2>
            <div class="row">
                <div class="col-md-4" v-for="job in featuredJobs" :key="job.id">
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
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
        user: Object,
        featuredJobs: Array,
    },
    components: {
        Link,
    },
};
</script>
