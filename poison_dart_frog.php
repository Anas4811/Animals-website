<?php
session_start();

$animalName = "35";
?>
<html>
    <head>
        <title>Poison Dart Frog</title>
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
            <h1>Welcome to the Poison Dart Frog Page</h1>
        </header>
        <main>
            <section>
                <h2>About Poison Dart Frogs</h2>
                <img src="poison_dart_frog.png" alt="Poison Dart Frog" style="width:300px;height:200px;">
                <p>Poison dart frogs are known for their vibrant colors and potent toxins. They are native to Central and South America.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of humidity.</li>
                    <li>Feed them a balanced diet of insects and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Interesting Facts</h2>
                <ul>
                    <li>Some species of poison dart frogs are so toxic that they can be deadly to predators.</li>
                    <li>Their bright colors serve as a warning to potential threats.</li>
                    <li>They are often used in traditional medicine by indigenous tribes.</li>
                    <li>Poison dart frogs are known for their unique mating calls.</li>
                    <li>They are primarily insectivorous, feeding on ants and termites in the wild.</li>
                    <li>Some species can change color based on their environment and mood.</li>
                    <li>They have a unique defense mechanism where they can secrete toxins through their skin.</li>
                    <li>Poison dart frogs are excellent climbers and can often be seen perched on leaves in their natural habitat.</li>
                    <li>They are known for their vibrant colors, which can range from bright yellow to deep blue.</li>
                    <li>Some species are known to have a symbiotic relationship with certain types of ants.</li>
                    <li>They are often kept as pets, but require specialized care and a suitable habitat.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Poison Dart Frog Care</p>
        </footer>
    </body>
</html>