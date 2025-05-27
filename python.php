<?php
session_start();

$animalName = "25";
?>
<html>
    <head>
        <title>Green Tree Python</title>
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
            <h1>Welcome to the Green Tree Python Page</h1>
        </header>
        <main>
            <section>
                <h2>About Green Tree Pythons</h2>
                <img src="python.png" alt="Green Tree Python" style="width:300px;height:200px;">
                <p>Green tree pythons are non-venomous constrictors native to New Guinea, Indonesia, and Australia. They are known for their vibrant green color and arboreal lifestyle.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of climbing opportunities.</li>
                    <li>Feed them a balanced diet of rodents and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2> Fun facts</h2>
                <ul>
                    <li>Green tree pythons can change color as they mature, transitioning from yellow or blue to green.</li>
                    <li>They are known for their unique method of hunting, using their prehensile tails to hang from branches and ambush prey.</li>
                    <li>These snakes can live up to 20 years in captivity with proper care.</li>
                    <li>They are primarily nocturnal, making them more active at night.</li>
                    <li>Green tree pythons are known for their calm demeanor, making them popular pets among reptile enthusiasts.</li>
                </ul>
                
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Green Tree Python Care
        </footer>
    </body>
</html>