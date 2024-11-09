/* Student Dashboard */

function showProfile() {
    const mainContent = document.getElementById('main-content');
    mainContent.innerHTML = `
        <div class="container-fluid profile">
            <h1>Profile Information</h1>
            <div class="profile-info">
                <h4>Name: John Doe</h4>
                <p>Email: john.doe@example.com</p>
                <p>Class: 10th Grade</p>
                <p>Batch: A</p>
            </div>
            <button class="btn btn-secondary" onclick="showDashboard()">Back to Dashboard</button>
        </div>
    `;
}

function showDashboard() {
    const mainContent = document.getElementById('main-content');
    mainContent.innerHTML = `
        <div class="container-fluid dashboard">
            <h1>Dashboard</h1>
            <div class="row">
                <div class="col-4 text-wrap mt-2">
                    <p>Info: This is some really long text that should wrap inside the column and not overflow into the next one.</p>
                </div>
                <div class="col-4 text-wrap mt-2">
                    <p>Info: This is some really long text that should wrap inside the column and not overflow into the next one.</p>
                </div>
                <div class="col-4 text-wrap mt-2">
                    <p>Info: This is some really long text that should wrap inside the column and not overflow into the next one.</p>
                </div>
            </div>
        </div>

        <!-- Timetable-->
        <div class="container-fluid timetable">
            <h1>Timetable</h1>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">08:00 AM - 09:00 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">09:15 AM - 10:15 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">10:30 AM - 11:30 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">10:30 AM - 11:30 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">10:30 AM - 11:30 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">10:30 AM - 11:30 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">10:30 AM - 11:30 AM</h5>
                        <p class="card-text">Japanese Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>

        </div>
    `;
}

function showTimetable() {
    const mainContent = document.getElementById('main-content');
    mainContent.innerHTML = `
        <div class="container-fluid timetable">
            <h1>Timetable</h1>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">08:00 AM - 09:00 AM</h5>
                        <p class="card-text">Math Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">09:15 AM - 10:15 AM</h5>
                        <p class="card-text">Science Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">10:30 AM - 11:30 AM</h5>
                        <p class="card-text">English Class</p>
                        <a href="#" class="btn btn-primary">Join Class</a>
                    </div>                
                </div>
            </div>
            <button class="btn btn-secondary" onclick="showDashboard()">Back to Dashboard</button>
        </div>
    `;
}

// Hamburger Button Toggle
function hamburgerToggle() {
    const navbar = document.getElementById("navbar");
    navbar.classList.toggle("active"); // Toggle active class
}

/* Student Dashboard */
