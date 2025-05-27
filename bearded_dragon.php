<?php
session_start();

$animalName = "26";
?>
<html>
    <head>
        <title>Bearded Dragon</title>
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
            <h1>Welcome to the Bearded Dragon Page</h1>
        </header>
        <main>
            <section>
                <h2>About Bearded Dragons</h2>
                <img src="bearded_dragon.png" alt="Bearded Dragon" style="width:300px;height:200px;">
                <p>Bearded dragons are popular reptiles known for their friendly nature and unique appearance. They are native to Australia and are often kept as pets.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of climbing opportunities.</li>
                    <li>Feed them a balanced diet of insects, vegetables, and supplements.</li>
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
                    <li>Bearded dragons can change color based on their mood and environment.</li>
                    <li>They are known for their "beard," which can puff up when they feel threatened.</li>
                    <li>Bearded dragons are social creatures and enjoy interacting with their owners.</li>
                </ul>
                <ul>
                    <li>They can live up to 10-15 years in captivity with proper care.</li>
                    <li>Bearded dragons are omnivores, meaning they eat both plants and animals.</li>
                    <li>They are known for their unique head bobbing behavior, which is a form of communication.</li>
                </ul>
                
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2023 Bearded Dragon Care
        </footer>
    </body>
</html>