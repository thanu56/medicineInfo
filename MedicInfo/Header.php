<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            min-height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            overflow-x: hidden;
            
        }
        .sitname{
            margin-left:2%;
        }
        footer {
            position: relative; /* Keeps it at the bottom */
            bottom: 0;
            width: 100%;
            margin: 0;
            padding: 0;
        }


        .header nav {
            background-color: #B7ACAC;
            display: flex;
            align-items: center;
            height: 70px;
            width: 100%;
            padding: 0 20px;
            flex-wrap: wrap;
            box-sizing: border-box;
      
        }

        .header .bar {
            display: flex;
            flex-direction: row;
            margin-left: auto;
            align-items: center;
        }

        .header .logo {
            height: 50px;
            border-radius: 50%;
        }

        .header .search-container {
            flex: 1;
            margin: 0 20px;
            display: flex;
            justify-content: center;
        }

        .header .search {
            width: 100%;
            max-width: 300px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            border: none;
        }

        .search::placeholder {
            font-weight: 500;
            font-family: sans-serif;
        }

        .header .result-box {
            position: absolute;
            width: 100%;
            max-width: 285px;
            z-index: 10;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }

        .header .result-box ul {
            margin: 0;
            padding: 0;
        }

        .header .result-box li {
            list-style: none;
            padding: 8px 10px;
            cursor: pointer;
        }

        .header .result-box li:hover {
            background-color: #f0f0f0;
        }

        .header .right-items {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .header .btn {
            text-align: center;
            border: 1px solid black;
            background-color: rgb(90, 201, 103);
            height: 32px;
            width: 100px;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 20px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 200px;
        }

        .header .goog-te-combo {
            text-align: center;
            height: 35px;
            width: 170px;
            border-radius: 20px;
            border: none;
            outline: 0;
            padding: 5px 10px;
            white-space: nowrap;
            cursor: pointer;
            background-color: white;
        }

        .header2 .submenu ul {
            background-color: #A59797;
            display: flex;
            align-items: center;
            height: 50px;
            width: 100%;
            list-style: none;
            padding: 0 20px;
            flex-wrap: wrap;
            justify-content: space-between;
            box-sizing: border-box;
           
        }

        .header2 .submenu .sidebar {
            position: absolute;
            top: 0;
            height: auto;
            width: auto;
            margin-top: 107px;
            padding: 0 10px;
            z-index: 999;
            background-color: rgba(255, 255, 255, 0.11);
            backdrop-filter: blur(5px);
            box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .header2 .submenu .sidebar li {
            width: 100%;
        }

        .header2 .submenu .sidebar a {
            width: 100%;
        }

        .header2 .submenu .login {
            display: flex;
            flex-direction: row;
            margin-left: auto;
        }

        .menubtn {
            display: none;
        }

        .header2 .submenu li a {
            text-decoration: none;
            color: black;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            padding: 0 15px;
            background-color: rgb(221, 211, 211);
            white-space: nowrap;
            box-sizing: border-box;
            margin-left: 20px;
            transition: all 0.3s ease;
        }

        .header2 .submenu li a:hover {
            background-color: rgb(150, 120, 120);
            color: white;
            transform: scale(1.05);
        }

        .header2 .submenu .reg {
            margin-right: 20px;
        }
        
        
        .table1 {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 15%;
            margin-left: 40px;     
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .main-content {
            display: block;
        }

        /* Google Translate styles */
        .skiptranslate iframe {
            display: none !important;
        }
        .goog-te-banner-frame {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        .goog-te-combo {
            margin: 4px 0;
        }
        /* Custom styles to match your design */
        .submenu-custom {
    background-color: #A59797;
  }
  
  /* Desktop Menu Link Styles */
        .nav-link-desktop {
            color: black;
            padding: 8px 15px;
            margin: 0 5px;
            border: 1px solid transparent;
            border-radius: 5px;
            background-color: transparent;
            transition: all 0.3s ease;
            position: relative;
        }
        
        /* Desktop Menu Hover Effect */
        .nav-link-desktop:hover {
            color: white;
            background-color: rgba(177, 165, 165, 0.8);
            transform: translateY(-2px);
        }
        
        /* Desktop Menu Underline Animation */
        .nav-link-desktop::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link-desktop:hover::after {
            width: 80%;
        }
        
        /* Desktop Login Button */
        .login-btn-desktop {
            background-color: rgb(90, 201, 103);
            color: white !important;
            border-radius: 5px;
            padding: 8px 15px;
            transition: all 0.3s ease;
        }
        
        .login-btn-desktop:hover {
            background-color: rgb(70, 181, 83);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        /* Mobile Menu Styles (unchanged) */
        .nav-link-custom {
            color: black;
            padding: 8px 15px;
            margin: 0 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgb(221, 211, 211);
            transition: all 0.3s ease;
        }
        
        .nav-link-custom:hover {
            background-color: rgb(150, 120, 120);
            color: white;
            transform: scale(1.05);
        }
        
        .login-btn {
            background-color: rgb(90, 201, 103);
            color: white !important;
            border-radius: 5px;
            padding: 8px 15px;
        }
        
        .offcanvas-custom {
            background-color: rgba(255, 255, 255, 0.11);
            backdrop-filter: blur(5px);
        }
        
        .navbar-toggler {
            border-color: rgba(0,0,0,0.1);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        @media (max-width: 1024px) {
            .sitname{
            margin-left:2% !important;
        }
            .header nav {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding: 10px;
            }

            .header .search-container {
                width: 100%;
                margin: 10px 0;
            }

            .header .right-items {
                width: 100%;
                justify-content: center;
                margin-top: 10px;
            }

            .header2 .submenu ul {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding: 10px;
            }

            .header2 .submenu li a {
                width: 100%;
                margin: 5px 0;
                transition: all 0.3s ease;
            }

            .header2 .submenu li a:hover {
                background-color: rgb(150, 120, 120);
                color: white;
                transform: scale(1.05);
            }

            .header2.submenu.sidebar {
                display: none;
            }

            .header2 .submenu .menubtn {
                display: block;
            }

            .header2 .submenu .hideonmobile {
                display: none;
            }
        }

        @media(max-width: 400px) {
            .sitname{
            margin-left:2% !important;
        }
            .header2 .submenu .sidebar {
                width: 100%;
            }
            .goog-te-combo {
                width: 80px;
            }
        }
    </style>
</head>

<body>
    <div class="fluid-container">
        <form action="">
            <div class="header">
                <nav>
                    <img src="./assets/logo.jpg" class="logo"><h3 class="sitname">MedicInfo</h3>
                    
                    <div class="bar">
                        <div class="s">
                            <input type="text" placeholder="Search..." id="input-box" class="search" onfocus="showSuggestions()" onkeyup="handleKeyup(event)">
                            <div class="result-box">
                                <ul></ul>
                            </div>
                            <div id="table-container"></div>
                        </div>
                        <input type="button" value="Search" class="btn" style="background-color: rgb(90, 201, 103);" onclick="handleSearch()">
                        <!-- Google Translate Element
                        <div id="google_translate_element"></div> -->
                    </div>
                </nav>
            </div>

            <nav class="navbar navbar-expand-lg submenu-custom py-2">
                <div class="container-fluid">
                    <!-- Mobile menu button -->
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" 
                            data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Desktop menu with different hover styles -->
                    <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link nav-link-desktop" href="Index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-link-desktop" href="./pages/InformationPage.php">Information</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-link-desktop" href="./pages/Professional.php">Professional Directory</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-link-desktop" href="./pages/About.php">About</a>
                        </li>
                    </ul>
                    
                    <div class="d-flex">
                        <ul class="navbar-nav">
                        <li class="nav-item me-2">
                            <a class="nav-link nav-link-desktop" href="Register.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link login-btn-desktop" href="Login.php">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Log In
                            </a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </nav>


                <!-- Mobile Menu Offcanvas -->
                <div class="offcanvas offcanvas-start offcanvas-custom" tabindex="-1" id="mobileMenu" 
                    aria-labelledby="mobileMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="Index.php">
                        <i class="bi bi-house-door me-2"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./pages/InformationPage.php">
                        <i class="bi bi-info-circle me-2"></i>Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./pages/Professional.php">
                        <i class="bi bi-people me-2"></i>Professional Directory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./pages/About.php">
                        <i class="bi bi-question-circle me-2"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="Register.php">
                        <i class="bi bi-person-plus me-2"></i>Registration
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link login-btn" href="Login.php">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Log In
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
    <script>
    // If you need custom JavaScript for menu handling
    function showmenu() {
        var mobileMenu = new bootstrap.Offcanvas(document.getElementById('mobileMenu'));
        mobileMenu.show();
    }
    
    function closemenu() {
        var mobileMenu = bootstrap.Offcanvas.getInstance(document.getElementById('mobileMenu'));
        mobileMenu.hide();
    }
    </script>
</body>

</html>