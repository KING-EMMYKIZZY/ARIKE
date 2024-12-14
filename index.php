<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
        }
        .logo {
            width: 300px;
            height: 300px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            animation: pulse 2s infinite;
        }
        .logo img {
            max-width: 300px;
            max-height: 300px;
            border-radius: 50%;
        }
        .countdown {
            color: white;
            font-size: 3rem;
            margin-bottom: 20px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .login-button {
            display: none;
            padding: 12px 30px;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .login-button:hover {
            transform: scale(1.05);
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
    </style>
</head>
<body>
    <div class="logo">
        <!-- Replace with your actual logo image -->
        <img src="logo.jpg" alt="Logo">
    </div>
    
    <div class="countdown" id="countdown">5</div>
    
    <button class="login-button" id="loginButton" onclick="redirectToLogin()">LOGIN</button>

    <script>
        const countdownElement = document.getElementById('countdown');
        const loginButton = document.getElementById('loginButton');
        let countdown = 5;

        function updateCountdown() {
            countdown--;
            countdownElement.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(countdownTimer);
                countdownElement.style.opacity = 0;
                loginButton.style.display = 'block';
            }
        }

        const countdownTimer = setInterval(updateCountdown, 1000);

        function redirectToLogin() {
            window.location.href = 'home.php';
        }
    </script>
</body>
</html>