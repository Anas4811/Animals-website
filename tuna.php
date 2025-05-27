<?php
session_start();

$animalName = "39";
?>
<html>
    <head>
        <title>Tuna</title>
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
            <h1>Welcome to the Tuna Page</h1>
        </header>
        <main>
            <section>
                <h2>About Tuna</h2>
                <img src="tuna.png" alt="Tuna" style="width:300px;height:200px;">
                <p>Tuna are large fish known for their speed and strength. They are found in warm seas and are popular in both commercial and recreational fishing.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with clean water.</li>
                    <li>Feed them a balanced diet of fish pellets and supplements.</li>
                    <li>Ensure they have access to hiding spots and plants.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Additional Information</h2>
                <p>Tuna are known for their migratory behavior and can travel long distances in search of food. They are also a popular choice for sushi and sashimi.</p>
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Tuna can swim at speeds of up to 75 km/h (47 mph).</li>
                    <li>They have a unique ability to regulate their body temperature.</li>
                    <li>Tuna are highly prized in many cultures for their culinary value.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Tuna Care</p>
        </footer>
    </body>
</html>