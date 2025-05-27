<?php
session_start();

$animalName = "40";
?>
<html>
    <head>
        <title>Clownfish</title>
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
            <h1>Welcome to the Clownfish Page</h1>
        </header>
        <main>
            <section>
                <h2>About Clownfish</h2>
                <img src="clownfish.png" alt="Clownfish" style="width:300px;height:200px;">
                <p>Clownfish are small, brightly colored fish known for their symbiotic relationship with sea anemones. They are found in warm seas and are popular in aquariums.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
                    <li>Feed them a balanced diet of fish pellets and supplements.</li>
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
                    <li>Clownfish are known for their bright orange color and white stripes.</li>
                    <li>They are immune to the stinging tentacles of sea anemones.</li>
                    <li>Nemo from finding nemo is actually a clownfish</li>
                    <li>If the finding nemo movie was accurate, we would have the father transform genders into female fish</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
    </body>
</html>