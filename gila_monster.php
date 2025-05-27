<?php
session_start();

$animalName = "29";
?>
<html>
    <head>
        <title>Gila Monster</title>
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
            <h1>Welcome to the Gila Monster Page</h1>
        </header>
        <main>
            <section>
                <h2>About the Gila Monster</h2>
                <img src="gila_monster.png" alt="Gila Monster" style="width:300px;height:200px;">
                <p>The Gila monster is a large, heavy-bodied lizard with a distinctive pattern of black and orange or pink. It is known for its venomous bite, which it uses to subdue prey.</p>
                <p>The Gila monster (Heloderma suspectum) is a species of venomous lizard native to the southwestern United States and northwestern Mexico. It is one of only a few venomous lizards in the world.</p>
                <p>Gila monsters are known for their striking black and orange or pink patterns and their slow, lumbering movements. Despite their venom, they are not considered a significant threat to humans.</p>
            </section>
            <section>
                <h2>Habitat</h2>
                <p>Gila monsters are typically found in desert and semi-arid regions. They prefer rocky areas and spend much of their time in burrows or under rocks to avoid the heat of the day.</p>
            </section>
            <section>
                <h2>Diet</h2>
                <p>These lizards are carnivorous and primarily feed on eggs, small mammals, birds, and reptiles. They have a slow metabolism and can survive on a few large meals per year.</p>
            </section>
            <section>
                <h2>Conservation Status</h2>
                <p>The Gila monster is listed as a species of concern due to habitat loss and illegal collection. Conservation efforts are in place to protect their natural habitats and ensure their survival.</p>
            </section>
            <section>
                <h2>Interesting Facts</h2>
                <ul>
                    <li>Gila monsters can live for over 20 years in captivity.</li>
                    <li>They are one of the few lizards that produce venom.</li>
                    <li>Their venom is used in medical research for diabetes treatment.</li>
                </ul>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with hiding spots.</li>
                    <li>Feed them a balanced diet of insects and small mammals.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Gila Monster Enthusiasts</p>
        </footer>
    </body>
</html>