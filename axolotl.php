<?php

session_start();

$animalName = "34";
?>
<html>
    <head>
        <title>Axolotl</title>
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
            <h1>Welcome to the Axolotl Page</h1>
        </header>
        <main>
            <section>
                <h2>About Axolotls</h2>
                <img src="axolotl.png" alt="Axolotl" style="width:300px;height:200px;">
                <p>Axolotls are a type of salamander known for their ability to regenerate limbs. They are native to Mexico and are often kept as pets.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with clean water.</li>
                    <li>Feed them a balanced diet of worms and pellets.</li>
                    <li>Ensure they have access to hiding spots and plants.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Fun facts</h2>
                <ul>
                    <li>Axolotls can regenerate their limbs, tail, and even parts of their heart and brain.</li>
                    <li>They are often referred to as "Mexican walking fish," although they are not fish.</li>
                    <li>Axolotls can live for up to 15 years in captivity.</li>
                    <li>They have external gills that give them a unique appearance.</li>
                    <li>Axolotls are critically endangered in the wild due to habitat loss and pollution.</li>
                    <li> Axolots gaines so much popularity since they added them to minecraft in update 1.17 caves and cliffs</li>
                    <li>They are often used in scientific research due to their regenerative abilities.</li>
                    <li>Axolotls can change color based on their environment and diet.</li>
                    <li>They are primarily nocturnal and prefer to be active at night.</li>
                    <li>Axolotls are known for their friendly and curious nature.</li>
                    <li>They are often kept in aquariums with other peaceful species.</li>
                    <li> They are super cute </li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Axolotl Care
        </footer>
    </body>
</html>