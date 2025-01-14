<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYM Inventory Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            color: #333;
        }

        /* Header Styles */
        header {
            background: linear-gradient(to right, #0097a7, #3b82f6);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 28px;
        }
        header p {
            font-size: 16px;
            margin: 10px 0;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        /* Feature Cards Section */
        .features-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        .feature-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: left;
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .feature-card h3 {
            color: #0097a7;
            font-size: 18px;
        }
        .feature-card p {
            margin-top: 10px;
            color: #555;
            font-size: 14px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            margin: 20px 10px;
            padding: 12px 20px;
            background: #0097a7;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            font-size: 14px;
        }
        .btn:hover {
            background: #3b82f6;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #e0f7fa;
            color: #666;
        }
        footer a {
            color: #0097a7;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            header h1 {
                font-size: 24px;
            }
            header p {
                font-size: 14px;
            }
            .btn {
                padding: 10px 15px;
                font-size: 12px;
            }
            .feature-card h3 {
                font-size: 16px;
            }
            .feature-card p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to AYM Inventory Management System</h1>
        <p>Your Ultimate Solution for Efficient Inventory Management</p>
        <p>Track, Manage, and Optimize Your Stock with Our Reliable Software</p>
    </header>

    <!-- Container Section -->
    <div class="container">
        <h2>Why Choose AYM Inventory Management System?</h2>
        <p>AYM is designed to help businesses manage their inventory seamlessly. Whether you're running a small retail store or a large warehouse, our system offers you the tools to keep your stock organized, reduce wastage, and boost productivity.</p>

        <!-- Feature Cards Section -->
        <div class="features-section">
            <div class="feature-card">
                <h3>✅ Real-time Inventory Tracking</h3>
                <p>Stay updated with your stock levels in real-time and avoid stockouts.</p>
            </div>
            <div class="feature-card">
                <h3>✅ Automated Stock Updates</h3>
                <p>Automatically update your inventory levels with each sale or purchase.</p>
            </div>
            <!-- <div class="feature-card">
                <h3>✅ Detailed Reporting & Analytics</h3>
                <p>Gain insights into your sales, purchases, and inventory performance.</p>
            </div> -->
            <div class="feature-card">
                <h3>✅ User-Friendly Dashboard</h3>
                <p>Easily manage your inventory with our intuitive dashboard.</p>
            </div>
            <div class="feature-card">
                <h3>✅ Secure & Reliable System</h3>
                <p>Your data is protected with our secure infrastructure.</p>
            </div>
            <!-- <div class="feature-card">
                <h3>✅ Multi-User Access</h3>
                <p>Allow multiple users to access the system with role-based permissions.</p>
            </div> -->
        </div>

        <!-- Action Buttons -->
        <div class="links">
            <a href="{{ route('login') }}" class="btn">Log In to Your Account</a>
            <a href="{{ route('register') }}" class="btn">Create a New Account</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 AYM Inventory Management System. All rights reserved.</p>
        <p>Contact us: <a href="mailto:support@aym-inventory.com">support@aym-inventory.com</a></p>
    </footer>
</body>
</html>
