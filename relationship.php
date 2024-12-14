<?php
// relationship.php - Third Interface
session_start();
if (!isset($_SESSION['name']) || $_SESSION['name'] !== 'ARIKE') {
    header("Location: index.php");
    exit();
}

$type = $_GET['type'] ?? '';
$content = '';

switch ($type) {
    case 'first_day':
        $content = "<p>The first day we met was at ADULLAM 8.0, during the Bethlehem experience. I remember when the media coordinator told me that a girl was coming to join us. I wondered, <em>Who could this angel be?</em> I was eager to meet the media girl who was so remarkable that even the boss highly recommended her.</p>

<p>Then I saw you. As I looked into your eyes, countless questions began to fill my mind. <em>Could this girl share the same dreams as me?</em> I wanted to know so much about you, and I couldn't help but feel that we needed to meet again.</p>

<p>That's why I did everything I could to get your number. I just couldn't let the chance to know you better slip away.</p>";
        break;
    case 'favorite':
        $content = "<p>Blue makes me think of you. It reflects your calmness, beauty, and the sense of peace you bring to my thoughts. It’s the color of endless possibilities, like the sky stretching far and wide. Blue isn’t just your favorite color anymore—it’s become a reflection of the connection I feel whenever I think about you.</p>
        
        <p>Spaghetti, your favorite food, feels even more special when I imagine us sharing it together. The thought of us laughing over a plate of pasta fills me with joy and excitement. Spaghetti isn’t just about the taste anymore—it’s about the memories I hope we’ll create, enjoying life’s simple pleasures together</p>";
        break;
    case 'about':
        $content = "<p>Arike is the most beautiful person I know, both inside and out. Her beauty isn’t just in her appearance but in the way she carries herself, the warmth in her smile, and the kindness in her heart. She always goes above and beyond to make me happy, doing everything she can to please me, even in the smallest ways. Her thoughtfulness and care never go unnoticed.</P>

        <p>What I love most about Arike is how she trusts me with her worries, always sharing her thoughts and feelings openly. She gives me hope and inspires me to be the best version of myself every day. No matter how busy life gets, she always creates time for me, making me feel valued and loved. Her gratitude for even the smallest gestures reminds me how lucky I am to have her in my life. Arike truly is my greatest blessing.</P>";
        break;
    case 'see_more':
        $content = "<p>GO AWAY😂😂😂.</p>
        <p>What Do You Expect To See Again</p>
        <p>Call Me & Tell Me Then I will Add It</p>";

        break;
    default:
            $content = "Please select a relationship detail.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Our Relationship</title>
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
            background: linear-gradient(135deg, #20bf6b 0%, #01a3a4 100%);
            overflow: hidden;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
            animation: fadeIn 1s ease-out;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            animation: slideIn 1s ease-out;
        }
        .content {
            text-align: left;
            text-justify: inter-word;
        }
        .content p {
            margin-bottom: 20px;
            opacity: 0;
            text-align: justify;
            animation: revealText 1.5s ease-out forwards;
        }
        .back-button {
            display: block;
            width: 200px;
            margin: 20px auto 0;
            text-align: center;
            padding: 12px 24px;
            background: linear-gradient(to right, #20bf6b, #01a3a4);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .back-button:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes revealText {
            from { 
                opacity: 0; 
                transform: translateY(20px);
                max-height: 0;
            }
            to { 
                opacity: 1; 
                transform: translateY(0);
                max-height: 1000px;
            }
        }
    </style>
</head>
<body>
    <!-- Invisible Background Music -->
    <audio id="backgroundMusic" loop autoplay style="display:none;">
        <source src="relationship-music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="container">
        <h2>Our Relationship Details</h2>
        <div class="content">
            <?php echo $content; ?>
        </div>
        <a href="welcome.php" class="back-button">Back to Menu</a>
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