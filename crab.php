<?php
session_start();

$animalName = "45";
?>
<html>
    <head>
        <title>Crab</title>
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
            <h1>Welcome to the Crab Page</h1>
        </header>
        <main>
            <section>
                <h2>About Crabs</h2>
                <img src="crab.png" alt="Crab" style="width:300px;height:200px;">
                <p>Crabs are crustaceans that are found in oceans, freshwater, and on land. They are known for their sideways walk and hard exoskeleton.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
                    <li>Feed them a balanced diet of fish, vegetables, and supplements.</li>
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
                    <li>Crabs can regenerate lost limbs.</li>
                    <li>Some crabs can live for over 30 years.</li>
                    <li>Crabs communicate with each other using sounds and body language.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Crab Enthusiasts</p>
    </body>
</html>