<template>
     <div class="container mt-4">
        <div class="row">
            <!-- Job List Column -->
            <div class="col-md-4">
                <div class="list-group" id="jobList">
                    <a href="#" class="list-group-item list-group-item-action active" onclick="showJobDetails('fullStack', event)">Full Stack Web Engineer</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showJobDetails('seniorEngineer', event)">Senior Software Engineer / Lead Engineer</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showJobDetails('qaTester', event)">Senior Game QA Tester</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showJobDetails('cloudQa', event)">Cloud-Native QA Engineer</a>

                </div>
            </div>

            <!-- Job Description Column -->
            <div class="col-md-8">
                <div id="jobDescription">
                    <h3>Full Stack Web Engineer</h3>
                    <p>Design and develop front-end applications using TypeScript and React, ensuring a smooth user experience.</p>
                    <ul>
                        <li>Implement and maintain backend services (RESTful API) using TypeScript and ExpressJS, with AWS DynamoDB as the database.</li>
                        <li>Write clean, maintainable, and efficient code in a collaborative team environment.</li>
                        <li>Conduct thorough testing of applications through both manual and automated tools to ensure resilience and reliability.</li>
                        <li>Collaborate with cross-functional teams to define, design, and release new features.</li>
                        <li>Monitor performance and optimize both front-end and back-end.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// Job descriptions for different jobs
const jobDetails = {
    fullStack: `
        <h3>Full Stack Web Engineer</h3>
        <p>Design and develop front-end applications using TypeScript and React, ensuring a smooth user experience.</p>
        <ul>
            <li>Implement and maintain backend services (RESTful API) using TypeScript and ExpressJS, with AWS DynamoDB as the database.</li>
            <li>Write clean, maintainable, and efficient code in a collaborative team environment.</li>
            <li>Conduct thorough testing of applications through both manual and automated tools to ensure resilience and reliability.</li>
            <li>Collaborate with cross-functional teams to define, design, and release new features.</li>
            <li>Monitor performance and optimize both front-end and back-end.</li>
        </ul>`,
    seniorEngineer: `
        <h3>Senior Software Engineer / Lead Engineer</h3>
        <p>Lead the design and development of high-performance software solutions, managing cross-functional teams.</p>
        <ul>
            <li>Mentor junior developers and ensure code quality.</li>
            <li>Implement scalable architectures using modern technologies.</li>
            <li>Optimize performance for existing applications.</li>
        </ul>`,
    qaTester: `
        <h3>Senior Game QA Tester</h3>
        <p>Ensure the quality and performance of gaming applications through rigorous testing.</p>
        <ul>
            <li>Create detailed, comprehensive, and well-structured test plans and test cases.</li>
            <li>Identify, document, and track software defects.</li>
            <li>Collaborate with the development team to resolve issues.</li>
        </ul>`,
    cloudQa: `
        <h3>Cloud-Native QA Engineer</h3>
        <p>Test cloud-native applications and infrastructure.</p>
        <ul>
            <li>Develop and execute automated test scripts.</li>
            <li>Ensure cloud deployments meet performance benchmarks.</li>
            <li>Collaborate with DevOps teams for continuous integration testing.</li>
        </ul>`
};

// Function to display job details
function showJobDetails(jobKey, event) {
    document.getElementById('jobDescription').innerHTML = jobDetails[jobKey];
    const items = document.querySelectorAll('.list-group-item');
    items.forEach(item => item.classList.remove('active'));
    event.currentTarget.classList.add('active');
}
</script>