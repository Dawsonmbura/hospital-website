<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Header</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #007bff;
            padding: 10px 30px;
            color: #fff;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            align: right;
        }
        .dropbtn {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown:hover .dropbtn {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="hospital_logo.png" alt="Hospital Logo">
            <span>City Hospital</span>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="#">Home</a>
                <a href="#">Departments</a>
                <a href="#">Doctors</a>
                <a href="#">Contact</a>
                <a href="#">Login</a>
            </div>
        </div>
    </div>
</body>
</html>