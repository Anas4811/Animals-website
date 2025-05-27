<?php
session_start();

$animalName = "22";
?>
<html>
    <head>
        <title>King Cobra</title>
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
            <h1>Welcome to the King Cobra Page</h1>
        </header>
        <main>
            <section>
                <h2>About King Cobras</h2>
                <img src="king_cobra.png" alt="King Cobra" style="width:300px;height:200px;">
                <p>King cobras are the longest venomous snakes in the world, native to Southeast Asia. They are known for their impressive size and potent venom.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
                    <li>Feed them a balanced diet of rodents and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>King cobras can grow up to 18 feet long.</li>
                    <li>They are known for their unique hood, which they expand when threatened.</li>
                    <li>King cobras are primarily found in forests and grasslands.</li>
                    <li>They are capable of delivering a lethal dose of venom in a single bite.</li>
                    <li>King cobras are known to be highly intelligent and can recognize their keepers.</li>
                    <li>They are solitary creatures and prefer to live alone.</li>
                    <li>King cobras are excellent swimmers and can move quickly in water.</li>
                    <li>They are known to be very vocal and can hiss loudly when threatened.</li>
                    <li>King cobras are oviparous, meaning they lay eggs.</li>
                    <li>They are known to be very territorial and will defend their space aggressively.</li>
                    <li>King cobras are primarily carnivorous and feed on other snakes, lizards, and small mammals.</li>
                    <li>They have a unique ability to "stand up" and look around while still being coiled on the ground.</li> 
            </section>
        </main>
        <section>
          <?php include 'render_facts.php'; ?>
        </section>
        <footer>
            &copy; 2025 King Cobra Care
        </footer>

    </body>
</html>