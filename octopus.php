<?php
session_start();

$animalName = "42";
?>
<html>
    <head>
        <title>Octopus</title>
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
            <h1>Welcome to the Octopus Page</h1>
        </header>
        <main>
            <section>
                <h2>About Octopuses</h2>
                <img src="octopus.png" alt="Octopus" style="width:300px;height:200px;">
                <p>Octopuses are highly intelligent marine animals known for their ability to camouflage and their unique body structure. They are found in oceans worldwide.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of fish and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
        </main>
        <section>
            <h2>Fun Facts</h2>
            <ul>
                <li>Octopuses have three hearts and blue blood.</li>
                <li>They can change color and texture to blend in with their surroundings.</li>
                <li>Octopuses are known for their problem-solving abilities and intelligence.</li>
                <li>They can escape from almost any enclosure due to their flexible bodies.</li>
                <li>Octopuses have a short lifespan, typically living only 1-2 years.</li>
                <li>They are capable of learning and can even use tools.</li>
                <li>Octopuses can regenerate lost limbs, making them resilient creatures.</li>
                <li>They have a unique way of moving, using jet propulsion to swim quickly.</li>
                <li>Octopuses are solitary animals, preferring to live alone.</li>
                <li>They are known to exhibit playful behavior, interacting with objects in their environment.</li>
                <li> the plural of octopus is octopuses, not octopi.</li>
                <li> Octopuses are very smart creatures, they have brains in each of their tentacles</li>
                <li> Squidward from spongebob, despite his name is actually an octopus becuase he has 8 tentacles</li>
            </ul>
        <footer>
        <section>
          <?php include 'render_facts.php'; ?>
        </section>
            &copy; 2025 Octopus Care
        </footer>
    </body>
</html>