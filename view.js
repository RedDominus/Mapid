// View.js - Fetches and displays the reports from localStorage
document.addEventListener("DOMContentLoaded", function () {
    const reportsContainer = document.getElementById("reports-container");

    // Retrieve reports from localStorage
    let reports = JSON.parse(localStorage.getItem("reports")) || [];

    if (reports.length > 0) {
        reports.forEach((report) => {
            const reportElement = document.createElement("div");
            reportElement.classList.add("report");

            reportElement.innerHTML = `
                <strong>Reported Username:</strong> ${report.username}<br>
                <strong>Evidence:</strong> ${report.evidence}<br>
                <strong>Details:</strong> ${report.details}<br>
            `;

            reportsContainer.appendChild(reportElement);
        });
    } else {
        reportsContainer.innerHTML = "<p>No reports available.</p>";
    }
});
