<?php
session_start();

$animalName = "40";
?>
<html>
    <head>
        <title>
            Goldfish
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
            .fact-list blockquote { font-style: italic; color: #555; margin: 0 0 5px; }
            .fact-list small { color: #888; }
            section {
                background-color: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
    
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
            <h1>Welcome to the Goldfish Page</h1>
        </header>
        <main>
            <section>
                <h2>About Goldfish</h2>
                <img src="goldfish.png" alt="Goldfish" style="width:300px;height:200px;">
                <p>Goldfish are small, colorful fish that are popular in aquariums and ponds. They are known for their friendly nature and can live for many years with proper care.</p>
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
                <h2>Fun Facts</h2>
                <ul>
                    <li>Goldfish can recognize their owners and can be trained to perform tricks.</li>
                    <li>They come in various colors, including orange, white, and black.</li>
                    <li>Goldfish have a great memory and can remember things for months.</li>
                </ul>
            </section>
            <section>
                <h2>Interesting Facts</h2>
                <ul>
                    <li>Goldfish can live for over 20 years in captivity.</li>
                    <li>They are part of the carp family and can grow quite large if given enough space.</li>
                    <li>Goldfish have been domesticated for over a thousand years.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2024 Goldfish Care
        </footer>
    </body>
</html>