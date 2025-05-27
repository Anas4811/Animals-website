<?php
session_start();

$animalName = "6";
?>
<html>
    <head>
        <title>
            Cockatiel
        </title>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            padding: 20px;
        }

        section {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .fact-list blockquote { font-style: italic; color: #555; margin: 0 0 5px; }
            .fact-list small { color: #888; }   
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
        </style>
    </head>
    <body>
        <header>
            <h1>Welcome to the Cockatiel Page</h1>
        </header>
        <main>
            <section>
                <h2>About Cockatiels</h2>
                <img src="cockatiel.png" alt="Doodi" style="width:300px;height:200px;">
                <p>Cockatiels are small, friendly parrots that are native to Australia. They are known for their charming personalities and beautiful crests.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious cage with toys and perches.</li>
                    <li>Feed them a balanced diet of seeds, pellets, and fresh fruits.</li>
                    <li>Spend time interacting with them daily.</li>
                </ul>
                <ul>
                    <li>Ensure they have access to clean, fresh water at all times.</li>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and fly safely.</li>
                </ul>
                <p>Cockatiels are social birds and thrive on companionship. They can mimic sounds and even learn to whistle tunes!</p>
                <h3>Fun Facts</h3>
                <p>Cockatiels can "dance" to music and even whistle their favorite tunes! 🎶💃

                    These little parrots bob their heads, sway, and tap their feet when they hear music they like. Some even learn to whistle entire songs or mimic phone ringtones! 📞🎵
                    
                  </p>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2023 Cockatiel Enthusiasts</p>
        </footer>
    </body>
</html>