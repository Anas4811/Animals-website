<?php
session_start();

$animalName = "43";
?>
<html>
    <head>
        <title>Seahorse</title>
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
            <h1>Welcome to the Seahorse Page</h1>
        </header>
        <main>
            <section>
                <h2>About Seahorses</h2>
                <img src="seahorse.png" alt="Seahorse" style="width:300px;height:200px;">
                <p>Seahorses are unique marine creatures known for their horse-like appearance and their ability to change color. They are found in shallow waters around the world.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of plants and hiding spots.</li>
                    <li>Feed them a diet of small crustaceans and specialized seahorse food.</li>
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
                    <li>A group of seahorses is called a shoal</li>
                    <li>Seahorses typically move in shoals carrying multiples seagorses in the bottom of the oceasn</li>
                    <li>A seahorse lives about 1-2 years on average</li>
                    <li>Seahorses are the only fish that can swim upright</li>
                    <li>Seahorses are the only fish that can change color</li>
                    
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
    </body>
</html>