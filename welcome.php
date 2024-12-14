<?php
// welcome.php - Second Interface
session_start();
if (!isset($_SESSION['name']) || $_SESSION['name'] !== 'ARIKE') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Arike</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body { 
            font-family: 'Poppins', sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);
            overflow: hidden;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
            animation: fadeIn 1s ease-out;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            animation: typewriter 2s steps(40, end);
            white-space: nowrap;
            overflow: hidden;
            width: 0;
        }
        p {
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInText 1s ease-out forwards;
            animation-delay: 2s;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .button {
            display: block;
            padding: 12px;
            background: linear-gradient(to right, #ff6b6b, #feca57);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: transform 0.3s ease;
            font-weight: 600;
        }
        .button:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }
        @keyframes fadeInText {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Invisible Background Music -->
    <audio id="backgroundMusic" loop autoplay style="display:none;">
        <source src="welcome-music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="container">
        <h2>YOU ARE WELCOME ARIKE</h2>
        <p>YOU ARE BORN ON THE 27 OF MARCH</p>
        <p>WILL YOU LIKE TO KNOW ABOUT OUR RELATIONSHIP?</p>
        <div class="button-container">
            <a href="relationship.php?type=first_day" class="button">FIRST DAY WE MET</a>
            <a href="relationship.php?type=favorite" class="button">YOUR FAVORITE</a>
            <a href="relationship.php?type=about" class="button">ABOUT ARIKE</a>
            <a href="relationship.php?type=see_more" class="button">SEE MORE....</a>
            <a href="index.php?type=about" class="button">LOG-OUT</a>
        </div>
    </div>

    <script>
        // Ensure music plays and is not too loud
        document.addEventListener('DOMContentLoaded', function() {
            var music = document.getElementById('backgroundMusic');
            music.volume = 0.2; // Set to 20% volume
            
            // Try to play music, catch any autoplay restrictions
            music.play().catch(e => {
                // Optional: Add a user interaction to start music
                document.addEventListener('click', () => {
                    music.play();
                }, {once: true});
            });
        });
    </script>
</body>
</html>