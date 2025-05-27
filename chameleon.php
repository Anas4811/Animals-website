<?php
session_start();

$animalName = "24";
?>
<html>
    <head>
        <title>Chameleon</title>
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
            <h1>Welcome to the Chameleon Page</h1>
        </header>
        <main>
            <section>
                <h2>About Chameleons</h2>
                <img src="hameleon.png" alt="Chameleon" style="width:300px;height:200px;">
                <p>Chameleons are known for their ability to change color and their unique eyes that can move independently. They are primarily found in Madagascar and Africa.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of climbing opportunities.</li>
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
                    <li>Chameleons can change color to communicate and regulate their body temperature.</li>
                    <li>They have a long, sticky tongue that can extend twice the length of their body to catch prey.</li>
                    <li>Chameleons have a 360-degree field of vision due to their unique eye structure.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Chameleon Care
        </footer>
    </body>
</html>