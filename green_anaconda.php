<?php
session_start();

$animalName = "28";
?>
<html>
    <head>
        <title>Green Anaconda</title>
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
            <h1>Welcome to the Green Anaconda Page</h1>
        </header>
        <main>
            <section>
                <h2>About Green Anacondas</h2>
                <img src="green_anaconda.png" alt="Green Anaconda" style="width:300px;height:200px;">
                <p>Green anacondas are the largest snakes in the world by weight and one of the longest. They are native to South America and are known for their powerful constricting abilities.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of water.</li>
                    <li>Feed them a balanced diet of rodents and supplements.</li>
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
                    <li>Green anacondas can grow up to 30 feet long and weigh over 500 pounds.</li>
                    <li>They are excellent swimmers and can stay underwater for up to 10 minutes.</li>
                    <li>Despite their size, they are non-venomous and rely on constriction to subdue prey.</li>
                    <li>They are solitary creatures and usually come together only during mating season.</li>
                    <li>Green anacondas are part of the boa family and are also known as "water boas."</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Green Anaconda Care</p>
        </footer>
    </body>
</html>