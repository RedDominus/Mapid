// Submit.js - Handles report submission
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("username").value;
        const evidence = document.getElementById("evidence").value;
        const details = document.getElementById("details").value;

        if (username && evidence && details) {
            // Create a new report object
            const newReport = { username, evidence, details };

            // Retrieve existing reports from localStorage or initialize an empty array
            let reports = JSON.parse(localStorage.getItem("reports")) || [];
            reports.push(newReport);

            // Save the updated reports back to localStorage
            localStorage.setItem("reports", JSON.stringify(reports));

            alert("Report successfully submitted!");
            form.reset();
        } else {
            alert("All fields are required!");
        }
    });
});
