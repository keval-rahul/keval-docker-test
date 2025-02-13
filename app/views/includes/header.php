<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
    <link rel="stylesheet" href="/public/css/style.css"> <!-- Adjust path if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(135deg, #a0c4ff, #70a1ff);
            color: white;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }
        .logo {
            max-width: 80px;
        }
        header h1 {
            margin: 0;
            font-weight: 700;
            font-size: 2rem;
            flex-grow: 1;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }
        nav ul li {
            position: relative;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 1.2rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            min-width: 150px;
            top: 35px;
            z-index: 1000;
        }
        .dropdown-content a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .dropdown-content a:hover {
            background: #70a1ff;
            color: white;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        main {
            padding: 40px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <header>
        <img src="/public/images/logo.png" height="40px" alt="Logo" class="logo">
        <!-- <h1><?php echo isset($headerTitle) ? $headerTitle : 'Your Application'; ?></h1> -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>


        <div class="container mt-3">
