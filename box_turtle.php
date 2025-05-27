<?php
session_start();

$animalName = "27";
?>
<html>
    <head>
        <title>Box Turtle</title>
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
            <h1>Welcome to the Box Turtle Page</h1>
        </header>
        <main>
            <section>
                <h2>About Box Turtles</h2>
                <img src="box_turtle.png" alt="Box Turtle" style="width:300px;height:200px;">
                <p>Box turtles are small, terrestrial turtles known for their domed shells and ability to retract into their shells for protection. They are found in North America and parts of Asia.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
                    <li>Feed them a balanced diet of vegetables, fruits, and protein.</li>
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
                    <li>Box turtles can live for over 50 years in captivity.</li>
                    <li>They have a unique ability to close their shells tightly, making them difficult for predators to access.</li>
                    <li>Box turtles are often found in forests, grasslands, and wetlands.</li>
                </ul>
                <ul>
                    <li>They are primarily herbivores, but can also eat insects and small animals.</li>
                    <li>Box turtles have a slow metabolism, which allows them to survive long periods without food.</li>    
                    <li>They are known for their distinctive markings, which can vary widely between individuals.</li>
                    <li>Box turtles are often kept as pets due to their docile nature and unique appearance.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Box Turtle Care
        </footer>
    </body>
</html>