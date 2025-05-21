
<style> /* Sidebar */
        .sidebar {
            background-color: var(--light);
            color: white;
            height: 100vh;
            position: fixed;
            width: 280px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1050;
            left: -280px;
            top: 0;
        }
        
        .sidebar.active {
            left: 0;
            box-shadow: 5px 0 25px rgba(0,0,0,0.15);
        }
        
        .sidebar-header {
            padding: 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }
        .sidebar-header img {
            height: 80px;
            width: 200px;
        }
        
        .sidebar-close {
            color: var(--dark);
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            transition: opacity 0.2s;
        }
        
        .sidebar-close:hover {
            opacity: 1;
        }
        
        .sidebar-menu {
            height: calc(100vh - 70px);
            overflow-y: auto;
            padding: 0.5rem 0;
        }
        
        .sidebar-link {
            color: rgba(0, 0, 0, 0.85);
            padding: 0.85rem 1.5rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s;
            margin: 0.25rem 0.5rem;
            border-radius: 8px;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            color: white;
            background-color: var(--dark);
            transform: translateX(5px);
        }
        
        .sidebar-link i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }
        
        /* Overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 1040;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        /* Navbar */
        .top-navbar {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1030;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s;
        }
        
        .navbar-scrolled {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--light);
        }
        
        .navbar-logo {
            height: 40px;
            margin-right: 15px;
            transition: all 0.3s;
        }
        
        .navbar-content {
            display: flex;
            align-items: center;
            width: 100%;
        }
        
        .sidebar-toggle {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark);
            padding: 0.25rem;
            margin-right: 1rem;
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
<!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
                <!-- Logo in navbar -->
                <img src="./image/WebxkeyAcademy Logo.png" alt="WebxKey Academy" class="navbar-logo">
            <!-- <h5 class="mb-0 text-white">WebxKey Academy</h5> -->
            <button class="sidebar-close" id="sidebarClose">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <a href="#" class="sidebar-link active">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-journal-bookmark"></i> My Courses
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-file-earmark-text"></i> Assignments
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-journal-text"></i> Study Tools
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-credit-card"></i> Payment
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-person-circle"></i> Profile
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-gear"></i> Settings
            </a>
        </div>
    </div>
     <!-- Top Navbar -->
    <nav class="navbar top-navbar navbar-expand-lg" id="mainNavbar">
        <div class="container-fluid">
            <div class="navbar-content">
                <button class="sidebar-toggle d-md-none" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>
                
                <!-- Logo in navbar -->
                <img src="./image/WebxkeyAcademy Logo.png" alt="WebxKey Academy" class="navbar-logo">
                
                <!-- Profile moved to Right -->
                <div class="profile-Right">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar me-2">
                            <span>John Doe</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Sidebar functionality
        const sidebar = document.querySelector('.sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarClose = document.getElementById('sidebarClose');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const mainContent = document.querySelector('.main-content');
        const navbar = document.getElementById('mainNavbar');
        
        // Toggle sidebar
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.add('active');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        // Close sidebar
        function closeSidebar() {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
        
        sidebarClose.addEventListener('click', closeSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);
        
        // Close sidebar when window is resized to desktop size
        function handleResize() {
            if (window.innerWidth >= 768) {
                closeSidebar();
            }
        }
        
        window.addEventListener('resize', handleResize);
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
        
        // Smooth transitions
        document.addEventListener('DOMContentLoaded', function() {
            // Add a slight delay to allow for CSS transitions
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 50);
        });
    </script>