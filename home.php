<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <style>
        /* Your existing CSS styles */
        body {
            margin: 0;
            background-image: url("uploads/6938839_3409297.jpg");
            background-size: cover;
            height: 100vh;
            position: relative;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: black;
        }

        .title {
            display: flex;
            padding-left: 100px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            padding-right: 175px;
        }

        nav li {
            margin-right: 10px;
            position: relative;
            /* Add position relative for dropdown */
        }

        nav li a {
            text-decoration: none;
            color: #fff;
            position: relative;
        }

        .options nav {
            display: flex;
        }

        /* Dropdown styles */
        .dropdown ul {
            display: none;
            position: absolute;
            background-color: black;
            padding: 10px;
            top: 100%;
            left: 0;
            z-index: 1;
            width: 150px;
            overflow: hidden;
        }

        .dropdown:hover ul {
            display: block;
        }

        .dropdown ul li {
            margin-right: 0;
            /* Remove margin between dropdown items */
            padding: 8px;
        }

        .dropdown ul li a {
            color: #fff;
        }

        /* Text on background image */
        .text-on-image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 24px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
                /* Initial position above */
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%);
                /* Final position centered */
            }
        }
    </style>
</head>

<body>
    <div class="text-on-image">
        <h1>WELCOME TO TECH TRACK</h1>
    </div>
    <div class="container">
        <div class="title">
            <nav>
                <ul>
                    <li><a href="#">TECH TRACK</a></li>
                </ul>
            </nav>
        </div>
        <div class="options">
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                </ul>
                <ul class="dropdown">
                    <li>
                        <a href="#">LOGIN</a>
                        <ul>
                            <li><a href="index" id="adminLogin">ADMIN LOGIN</a></li>
                            <li><a href="member/login" id="memberLogin">MEMBER LOGIN</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div id="loadingScreen"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
        <p
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 24px;">
            Loading...</p>
    </div>

    <script>
    // Variable to track if the page is being unloaded
    let isUnloading = true;

    // Function to show loading screen and redirect after 3 seconds
    function showLoadingScreen(url) {
        document.getElementById("loadingScreen").style.display = "block"; // Show loading screen
        setTimeout(function () {
            if (!isUnloading) {
                window.location.href = url; // Redirect to the specified URL after 3 seconds
            }
        }, 3000);
    }

    document.getElementById("adminLogin").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default behavior of link click
        showLoadingScreen("index"); // Show loading screen and redirect after 3 seconds
    });

    document.getElementById("memberLogin").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default behavior of link click
        showLoadingScreen("member/login"); // Show loading screen and redirect after 3 seconds
    });

    // Hide loading screen when "Home" link is clicked
    document.querySelector('a[href="#"]').addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default behavior of link click
        document.getElementById("loadingScreen").style.display = "none"; // Hide loading screen
        isUnloading = false; // Reset isUnloading when returning to the page
    });

    // Event listener for beforeunload event
    window.addEventListener('beforeunload', function () {
        isUnloading = true; // Set isUnloading to true when the page is being unloaded
    });

    // Event listener for load event
    window.addEventListener('load', function () {
        isUnloading = false; // Reset isUnloading when the page is loaded
    });
</script>




</body>

</html>