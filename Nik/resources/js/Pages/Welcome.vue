<template>
    <div class="welcome-container">
        <h1 class="text-2xl font-bold">Welcome aboard!</h1>
        <p class="mt-4">{{ message }}</p>

        <!-- Optionally, display user details -->
        <div class="mt-4">
            <p><strong>Name:</strong> {{ user.name }}</p>
            <p><strong>Email:</strong> {{ user.email }}</p>
        </div>

        <!-- You can add a redirect or button to navigate to another page -->
        <button @click="goToDashboard" class="mt-6 px-4 py-2 bg-blue-500 text-white rounded">
            Go to Dashboard
        </button>
    </div>
</template>

<script>
export default {
    props: {
        status: String,
        message: String,
        user: Object,
    },
    methods: {
        goToDashboard() {
            this.$inertia.visit('/home');
        }
    }
}
</script>

<style scoped>
.welcome-container {
    padding: 20px;
    background-color: #f7fafc;
    border-radius: 8px;
    text-align: center;
}
</style>
