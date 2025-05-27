<?php
session_start();

$animalName = "46";
?>
<html>
    <head>
        <title>Welcome to the Lobster Page</title>
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
            <h1>Welcome to the Lobster Page</h1>
        </header>
        <main>
            <section>
                <h2>About Lobsters</h2>
                <img src="lobster.png" alt="Lobster" style="width:300px;height:200px;">
                <p>Lobsters are marine crustaceans known for their large claws and delicious meat. They are found in oceans worldwide and are a popular seafood choice.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
                    <li>Feed them a balanced diet of fish and shellfish.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Fun facts</h2>
                <ul>
                    <li>Lobsters can live for over 50 years in the wild.</li>
                    <li>They can regenerate lost limbs.</li>
                    <li>Lobsters are typically blue or greenish-brown in color.</li>
                    <li>They have a complex nervous system and can feel pain.</li>
                    <li>Lobsters communicate with each other using sounds and body language.</li>

                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Lobster Care</p>
    </body>
</html>