<?php
session_start();

$animalName = "47";
?>
<html>
    <head>
        <title>Stingrays</title>
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
            <h1>Welcome to the Stingrays Page</h1>
        </header>
        <main>
            <section>
                <h2>About Stingrays</h2>
                <img src="stingray.png" alt="Stingray" style="width:300px;height:200px;">
                <p>Stingrays are flat-bodied fish known for their graceful swimming and unique shape. They are found in warm coastal waters around the world.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with sandy substrate.</li>
                    <li>Feed them a balanced diet of shrimp and fish.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Additional Information</h2>
                <p>Stingrays are known for their unique ability to camouflage themselves in the sand, making them difficult to spot. They are generally peaceful creatures but can defend themselves with a venomous sting if threatened.</p>
                <p>Stingrays are often found in shallow waters and can be seen gliding gracefully along the ocean floor. They are also known for their social behavior, often swimming in groups.</p>
                <p>In captivity, stingrays require a large tank with plenty of space to swim and hide. They thrive in environments that mimic their natural habitat, including sandy bottoms and plenty of hiding spots.</p>
                <p>Stingrays are fascinating creatures that play an important role in marine ecosystems. They are often studied for their unique adaptations and behaviors.</p>
        
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Stingray Care</p>
        </footer>
    </body>
</html>