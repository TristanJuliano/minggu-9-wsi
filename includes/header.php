<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Mahasiswa Profesional</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --sidebar-bg: #1e293b;
            --sidebar-hover: #334155;
            --sidebar-text: #94a3b8;
            --sidebar-active-text: #ffffff;
            --bg-color: #f8fafc;
            --text-color: #334155;
            --card-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        body { 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; 
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #ffffff !important;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
            padding: 0.75rem 1.5rem;
            z-index: 10;
        }
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            letter-spacing: -0.5px;
        }
        .navbar-text {
            color: #475569 !important;
            font-weight: 500;
        }

        /* Layout Structure */
        .wrapper { 
            display: flex; 
            flex: 1; 
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar { 
            min-width: 260px; 
            background-color: var(--sidebar-bg); 
            color: white; 
            padding-top: 25px; 
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .sidebar .sidebar-heading {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #64748b;
            font-weight: 600;
            padding: 0 25px;
            margin-bottom: 10px;
            margin-top: 20px;
        }
        .sidebar a { 
            color: var(--sidebar-text); 
            text-decoration: none; 
            padding: 12px 25px; 
            display: flex; 
            align-items: center;
            font-weight: 500;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }
        .sidebar a i {
            margin-right: 12px;
            font-size: 1.1rem;
            transition: transform 0.2s;
        }
        .sidebar a:hover { 
            color: var(--sidebar-active-text); 
            background-color: var(--sidebar-hover); 
            border-left: 4px solid var(--primary-color);
        }
        .sidebar a:hover i {
            transform: scale(1.1);
            color: var(--primary-color);
        }
        .sidebar a.active {
            color: var(--sidebar-active-text);
            background-color: var(--sidebar-hover);
            border-left: 4px solid var(--primary-color);
        }

        /* Content Area */
        .content { 
            flex: 1; 
            padding: 30px 40px; 
            overflow-y: auto;
        }

        /* Card Customization */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }
        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            padding: 1rem 1.25rem;
            font-weight: 600;
            border-radius: 12px 12px 0 0 !important;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        /* Footer */
        footer { 
            background-color: #ffffff; 
            color: #64748b; 
            text-align: center; 
            padding: 15px 0; 
            border-top: 1px solid #e2e8f0;
            font-size: 0.875rem;
        }

        /* Status Badges */
        .badge-role {
            font-size: 0.75rem;
            padding: 0.35em 0.65em;
            border-radius: 20px;
            font-weight: 600;
        }
        .badge-admin { background-color: #fee2e2; color: #ef4444; }
        .badge-user { background-color: #e0e7ff; color: #4361ee; }
    </style>
</head>
<body>