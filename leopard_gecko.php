<?php
session_start();

$animalName = "23";
?>
<html>
    <head>
        <title>Leopard Gecko</title>
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
            <h1>Welcome to the Leopard Gecko Page</h1>
        </header>
        <main>
            <section>
                <h2>About Leopard Geckos</h2>
                <img src="leopard_gecko.png" alt="Leopard Gecko" style="width:300px;height:200px;">
                <p>Leopard geckos are small, nocturnal lizards known for their distinctive spotted patterns. They are popular pets due to their docile nature and ease of care.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with hiding spots.</li>
                    <li>Feed them a balanced diet of insects and supplements.</li>
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
                    <li>Leopard geckos can live for over 20 years in captivity.</li>
                    <li>They have a unique ability to regrow their tails if lost.</li>
                    <li>Leopard geckos are known for their vocalizations, including chirps and barks.</li>
                    <li>They are primarily insectivores, but can also eat fruits and vegetables.</li>
                    
                </ul>

            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Leopard Gecko Care</p>
        </footer>
    </body>
</html>