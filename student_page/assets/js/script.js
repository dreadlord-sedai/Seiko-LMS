// Function to show the selected section and hide others
function showSection(sectionId) {
    // Hide all sections
    document.getElementById('dashboard').classList.add('d-none');
    document.getElementById('profile').classList.add('d-none');
    document.getElementById('payments').classList.add('d-none');

    // Show the selected section
    document.getElementById(sectionId).classList.remove('d-none');
}

// Toggle sidebar on button click
document.getElementById('sidebarToggle').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
});
