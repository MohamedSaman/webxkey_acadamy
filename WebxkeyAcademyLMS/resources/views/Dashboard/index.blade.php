<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebxKey Academy - Student Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #1565C0;
            --secondary: #2196F3;
            --accent: #82B1FF;
            --light: #E3F2FD;
            --dark: #0D47A1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            overflow-x: hidden;
        }
        
       
        
        /* Main Content */
        .main-content {
            margin-left: 0;
            padding: 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 70px;
        }
        
        /* Cards */
        .dashboard-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: all 0.3s;
            background: white;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        /* Enhanced Course Cards */
        .course-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            background: white;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .course-card-img {
            height: 160px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .course-card:hover .course-card-img {
            transform: scale(1.05);
        }
        
        .course-card-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .course-badge {
            padding: 0.4em 0.8em;
            font-size: 0.75em;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 50px;
            text-transform: uppercase;
        }
        
        .course-badge.in-progress {
            background: linear-gradient(135deg, var(--secondary), #64B5F6);
        }
        
        .course-badge.completed {
            background: linear-gradient(135deg, #4CAF50, #81C784);
        }
        
        .course-card-title {
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--dark);
            font-size: 1.1rem;
        }
        
        .course-card-progress {
            margin-bottom: 1.25rem;
        }
        
        .progress-text {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 0.5rem;
        }
        
        .progress {
            height: 8px;
            border-radius: 4px;
            background-color: #f0f0f0;
        }
        
        .progress-bar {
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            border-radius: 4px;
            transition: width 0.6s ease;
        }
        
        .course-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }
        
        .course-lessons {
            font-size: 0.85rem;
            color: #666;
        }
        
        .course-action-btn {
            padding: 0.5rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 500;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .course-card:hover .course-action-btn {
            background-color: var(--secondary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(33, 150, 243, 0.3);
        }
        
        /* Course cards container */
        .courses-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        
        
        /* Profile on Right */
        .profile-Right {
            margin-left: auto;
        }
        
        /* Welcome Banner */
        .welcome-banner {
            background: linear-gradient(135deg, var(--primary), var(--dark));
            color: white;
            border-radius: 12px;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .welcome-banner::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }
        
        /* Stats Cards */
        .stats-card {
            text-align: center;
            padding: 1.5rem;
            border-radius: 12px;
            transition: all 0.3s;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
        }
        
        .card-icon {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }
        
        /* Responsive */
        @media (min-width: 768px) {
            .sidebar {
                left: 0;
            }
            
            .main-content {
                margin-left: 280px;
            }
            
            .sidebar-close, .sidebar-overlay {
                display: none;
            }
            
            .sidebar-toggle {
                display: none;
            }
        }
        
        @media (max-width: 767px) {
            .courses-container {
                grid-template-columns: 1fr;
            }
            
            .navbar-logo {
                height: 35px;
            }
            
            .welcome-banner h4 {
                font-size: 1.25rem;
            }
            
            .stats-card {
                padding: 1.25rem;
            }
        }
    </style>
</head>
<body>
    

    {{-- sidebar Section --}}
    @include('Dashboard.sidebar');
   
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- Welcome Banner -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="dashboard-card welcome-banner">
                        <h4>Welcome back, John!</h4>
                        <p class="mb-0">Continue your learning journey with WebxKey Academy</p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-3 mb-3">
                    <div class="dashboard-card stats-card">
                        <div class="card-icon">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <h5 class="mb-1">5</h5>
                        <p class="text-muted mb-0">Completed Assignments</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="dashboard-card stats-card">
                        <div class="card-icon">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <h5 class="mb-1">12</h5>
                        <p class="text-muted mb-0">Completed Lessons</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="dashboard-card stats-card">
                        <div class="card-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h5 class="mb-1">LKR5000</h5>
                        <p class="text-muted mb-0">Due Payment</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="dashboard-card stats-card">
                        <div class="card-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5 class="mb-1">3</h5>
                        <p class="text-muted mb-0">Completed Courses</p>
                    </div>
                </div>
            </div>

            <!-- Current Courses Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="dashboard-card p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="mb-0">Your Current Courses</h4>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                View All <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                        
                        <div class="courses-container">
                            <!-- Course 1 -->
                            <div class="course-card">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                         class="course-card-img w-100" alt="Web Development">
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <span class="badge course-badge in-progress">In Progress</span>
                                    </div>
                                </div>
                                <div class="course-card-body">
                                    <h5 class="course-card-title">Modern Web Development</h5>
                                    <div class="course-card-progress">
                                        <div class="progress-text">
                                            <span>65% Completed</span>
                                            <span>12/18 lessons</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 65%"></div>
                                        </div>
                                    </div>
                                    <div class="course-card-footer">
                                        <span class="course-lessons">
                                            <i class="bi bi-play-circle me-1"></i> Next: React State
                                        </span>
                                        <a href="#" class="btn btn-sm course-action-btn btn-outline-primary">
                                            Continue <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course 2 -->
                            <div class="course-card">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                         class="course-card-img w-100" alt="Blockchain">
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <span class="badge course-badge in-progress">In Progress</span>
                                    </div>
                                </div>
                                <div class="course-card-body">
                                    <h5 class="course-card-title">Blockchain Fundamentals</h5>
                                    <div class="course-card-progress">
                                        <div class="progress-text">
                                            <span>42% Completed</span>
                                            <span>8/19 lessons</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 42%"></div>
                                        </div>
                                    </div>
                                    <div class="course-card-footer">
                                        <span class="course-lessons">
                                            <i class="bi bi-play-circle me-1"></i> Next: Smart Contracts
                                        </span>
                                        <a href="#" class="btn btn-sm course-action-btn btn-outline-primary">
                                            Continue <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course 3 -->
                            <div class="course-card">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1617791160536-598cf32026fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                         class="course-card-img w-100" alt="Cloud Computing">
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <span class="badge course-badge completed">Completed</span>
                                    </div>
                                </div>
                                <div class="course-card-body">
                                    <h5 class="course-card-title">Cloud Architecture Basics</h5>
                                    <div class="course-card-progress">
                                        <div class="progress-text">
                                            <span>100% Completed</span>
                                            <span>15/15 lessons</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                    </div>
                                    <div class="course-card-footer">
                                        <span class="course-lessons">
                                            <i class="bi bi-check-circle me-1"></i> Course completed
                                        </span>
                                        <a href="#" class="btn btn-sm course-action-btn btn-outline-success">
                                            Review <i class="bi bi-arrow-repeat ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upcoming Tasks & Recent Activity -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="dashboard-card p-4">
                        <h5 class="mb-3">Upcoming Tasks</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Assignment: React Component</h6>
                                    <small class="text-muted">Due tomorrow</small>
                                </div>
                                <p class="mb-1">Modern Web Development</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Quiz: Blockchain Basics</h6>
                                    <small class="text-muted">Due in 3 days</small>
                                </div>
                                <p class="mb-1">Blockchain Fundamentals</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Project Submission</h6>
                                    <small class="text-muted">Due next week</small>
                                </div>
                                <p class="mb-1">Cloud Architecture</p>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="dashboard-card p-4">
                        <h5 class="mb-3">Recent Activity</h5>
                        <div class="activity-timeline">
                            <div class="activity-item mb-3">
                                <div class="d-flex">
                                    <div class="activity-badge bg-primary text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-check-circle"></i>
                                    </div>
                                    <div>
                                        <p class="mb-1">Completed lesson "React Hooks" in Modern Web Development</p>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-item mb-3">
                                <div class="d-flex">
                                    <div class="activity-badge bg-success text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-chat-left-text"></i>
                                    </div>
                                    <div>
                                        <p class="mb-1">Posted in discussion "Smart Contract Security"</p>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-item mb-3">
                                <div class="d-flex">
                                    <div class="activity-badge bg-info text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <div>
                                        <p class="mb-1">Submitted assignment "AWS Setup"</p>
                                        <small class="text-muted">2 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>