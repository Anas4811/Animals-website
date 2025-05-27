<?php
session_start();

$animalName = "44";
?>
<html>
    <head>
        <title>Jellyfish</title>
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
            <h1>Welcome to the Jellyfish Page</h1>
        </header>
        <main>
            <section>
                <h2>About Jellyfish</h2>
                <img src="jellyfish.png" alt="Jellyfish" style="width:300px;height:200px;">
                <p>Jellyfish are fascinating marine creatures known for their gelatinous bodies and stinging tentacles. They are found in oceans worldwide.</p>
            </section>
            <section>
                <h2>Fun facts</h2>
                <ul>
                    <li>Jellyfish have been around for over 500 million years.</li>
                    <li>They are 95% water.</li>
                    <li>Some jellyfish can glow in the dark.</li>
                    <li>Jellyfish sting really badly</li>
                    <li>It's actually a myth that tomatoes cure jellyfish stings</li>
                    <li>Jellyfish are not actually fish</li>
                    <li>Some jellyfish can live for years</li>
                    <li>Some jellyfish are immortal</li>
                    <li>Some jellyfish can grow to be 6 feet long</li>
                    <li>Some jellyfish can live for years</li>
                    <li>Some jellyfish can grow to be 6 feet long</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
    </body>
</html>