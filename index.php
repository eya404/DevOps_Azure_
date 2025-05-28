<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration System - Homepage</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;






            
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
            min-height: 100vh;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .titlebar {
            background: linear-gradient(90deg, rgba(0,0,0,0.8), rgba(0,0,0,0.6));
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #3b82f6, #1d4ed8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
        }

        .title {
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            background: linear-gradient(45deg, #ffffff, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Main Content */
        .main-content {
            padding: 80px 0;
            text-align: center;
        }

        .welcome-section {
            margin-bottom: 60px;
        }

        .welcome-title {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #ffffff, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-subtitle {
            font-size: 20px;
            color: #93c5fd;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Login Cards */
        .login-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 800px;
            margin: 0 auto;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px 30px;
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .login-card:hover::before {
            transform: translateX(100%);
        }

        .login-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.3);
            border-color: rgba(59, 130, 246, 0.5);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .admin-card .card-icon {
            background: linear-gradient(45deg, #ef4444, #dc2626);
        }

        .student-card .card-icon {
            background: linear-gradient(45deg, #3b82f6, #1d4ed8);
        }

        .login-card:hover .card-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .card-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .card-description {
            font-size: 16px;
            color: #93c5fd;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .card-button {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .admin-card .card-button {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .student-card .card-button {
            background: rgba(59, 130, 246, 0.2);
            color: #93c5fd;
            border: 1px solid rgba(59, 130, 246, 0.3);
        }

        .login-card:hover .card-button {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateY(-2px);
        }

        /* Features Section */
        .features-section {
            margin-top: 100px;
            padding: 60px 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        .feature-1 .feature-icon { background: linear-gradient(45deg, #10b981, #059669); }
        .feature-2 .feature-icon { background: linear-gradient(45deg, #8b5cf6, #7c3aed); }
        .feature-3 .feature-icon { background: linear-gradient(45deg, #f59e0b, #d97706); }

        .feature-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .feature-description {
            font-size: 14px;
            color: #93c5fd;
            line-height: 1.5;
        }

        /* Footer */
        .footer {
            margin-top: 80px;
            padding: 30px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .footer-text {
            color: #93c5fd;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .title {
                font-size: 20px;
            }

            .welcome-title {
                font-size: 32px;
            }

            .welcome-subtitle {
                font-size: 16px;
            }

            .login-options {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .login-card {
                padding: 30px 20px;
            }

            .card-title {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .main-content {
                padding: 40px 0;
            }

            .welcome-title {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="titlebar">
        <div class="container">
            <div class="header-content">
                <div class="logo-icon">🎓</div>
                <h1 class="title">Student Registration System</h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="main-content">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h2 class="welcome-title">Welcome to Our Platform</h2>
                <p class="welcome-subtitle">Access your account or manage the system through our secure portal</p>
            </div>

            <!-- Login Options -->
            <div class="login-options">
                <!-- Admin Login -->
                <a href="admin/index1.php" class="login-card admin-card">
                    <div class="card-icon">🛡️</div>
                    <h3 class="card-title">Admin</h3>
                    <p class="card-description">Manage students, courses, and system settings with full administrative access</p>
                    <div class="card-button">Access Admin Panel</div>
                </a>

                <!-- Student Login -->
                <a href="student/login.php" class="login-card student-card">
                    <div class="card-icon">👥</div>
                    <h3 class="card-title">Student</h3>
                    <p class="card-description">View your courses, grades, and registration status through the student portal</p>
                    <div class="card-button">Student Portal</div>
                </a>
            </div>

            <!-- Features Section -->
            <div class="features-section">
                <div class="features-grid">
                    <div class="feature-card feature-1">
                        <div class="feature-icon">📚</div>
                        <h4 class="feature-title">Easy Registration</h4>
                        <p class="feature-description">Simple and intuitive course registration process</p>
                    </div>

                    <div class="feature-card feature-2">
                        <div class="feature-icon">🔒</div>
                        <h4 class="feature-title">Secure Access</h4>
                        <p class="feature-description">Protected login system with role-based access</p>
                    </div>

                    <div class="feature-card feature-3">
                        <div class="feature-icon">⚡</div>
                        <h4 class="feature-title">User Friendly</h4>
                        <p class="feature-description">Designed for both students and administrators</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p class="footer-text">© <?php echo date('Y'); ?> Student Registration System. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
