<?php
// index.php - First Interface
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Who Are You?</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            overflow: hidden;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            animation: fadeIn 1s ease-out;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            animation: slideDown 1s ease-out;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 10px rgba(102, 126, 234, 0.3);
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        button:hover {
            transform: scale(1.05);
        }
        .error {
            color: #ff6b6b;
            animation: shake 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-10px); }
            20%, 40%, 60%, 80% { transform: translateX(10px); }
        }
    </style>
</head>
<body>
    <!-- Invisible Background Music -->
    <audio id="backgroundMusic" loop autoplay style="display:none;">
        <source src="background-music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="container">
        <h2>WHO ARE YOU?</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Enter your name" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = strtoupper($_POST['name']);
            if ($name === "ARIKE") {
                $_SESSION['name'] = $name;
                header("Location: welcome.php");
                exit();
            } else {
                echo "<p class='error'>NOT RECOGNIZED</p>";
            }
        }
        ?>
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