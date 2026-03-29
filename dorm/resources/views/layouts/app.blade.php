<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormitory Allocation System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f5f5 0%, #1a1a1a 100%);
            min-height: 100vh;
            color: #333;
        }

        nav {
            background: linear-gradient(135deg, #2a2a2a 0%, #000000 100%);
            padding: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px 0;
        }

        .navbar-menu {
            display: flex;
            gap: 0;
            list-style: none;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 20px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
            font-weight: 500;
            font-size: 15px;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .active {
            background: rgba(255, 193, 7, 0.2) !important;
            border-bottom-color: #ffc107 !important;
            color: #ffc107 !important;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .card h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
            border-bottom: 3px solid #333333;
            padding-bottom: 15px;
        }

        .card h3 {
            color: #34495e;
            margin: 20px 0 15px 0;
            font-size: 20px;
        }

        .card p {
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table thead {
            background: linear-gradient(135deg, #333333 0%, #000000 100%);
            color: white;
        }

        table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border: none;
        }

        table td {
            padding: 15px;
            border-bottom: 1px solid #ecf0f1;
        }

        table tbody tr {
            transition: background 0.3s ease;
        }

        table tbody tr:hover {
            background: #f8f9fa;
        }

        table tbody tr:nth-child(even) {
            background: #f8f9fa;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #333333 0%, #000000 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        .btn-success {
            background: #27ae60;
            color: white;
        }

        .btn-success:hover {
            background: #229954;
            transform: translateY(-2px);
        }

        .btn-warning {
            background: #f39c12;
            color: white;
        }

        .btn-warning:hover {
            background: #e67e22;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #e74c3c;
            color: white;
        }

        .btn-danger:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .btn-small {
            padding: 8px 15px;
            font-size: 12px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ecf0f1;
            border-radius: 6px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .form-row.full {
            grid-template-columns: 1fr;
        }

        /* Alert/Badge Styles */
        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-success {
            background: #d4edda;
            color: #155724;
        }

        .badge-danger {
            background: #f8d7da;
            color: #721c24;
        }

        .badge-info {
            background: #d1ecf1;
            color: #0c5460;
        }

        /* Actions Column */
        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        .text-center {
            text-align: center;
        }

        .welcome-content {
            text-align: center;
            padding: 60px 20px;
        }

        .welcome-content h1 {
            font-size: 48px;
            color: white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .welcome-content p {
            font-size: 18px;
            color: white;
            margin-bottom: 30px;
        }

        .welcome-card {
            background: white;
            padding: 60px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .navbar-menu {
                flex-direction: column;
            }

            nav a {
                padding: 15px 20px;
            }
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>