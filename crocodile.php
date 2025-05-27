<?php
session_start();

$animalName = "30";
?>
<html>
    <head>
        <title>Crocodile</title>
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
            <h1>Welcome to the Crocodile Page</h1>
        </header>
        <main>
            <section>
                <h2>About Crocodiles</h2>
                <img src="crockodile.png" alt="Crocodile" style="width:300px;height:200px;">
                <p>Crocodiles are large reptiles found in tropical regions. They are known for their powerful jaws and stealthy hunting skills.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with access to water.</li>
                    <li>Feed them a balanced diet of meat and supplements.</li>
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
                    <li>Crocodiles can hold their breath underwater for over an hour.</li>
                    <li>They have been around for over 200 million years.</li>
                    <li>Crocodiles can run up to 20 miles per hour on land.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Crocodile Care
        </footer>
    </body>
</html>