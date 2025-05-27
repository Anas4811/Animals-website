<?php
session_start();

$animalName = "32";
?>
<html>
    <head>
        <title>Red-Eyed Tree Frog</title>
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
            <h1>Welcome to the Red-Eyed Tree Frog Page</h1>
        </header>
        <main>
            <section>
                <h2>About Red-Eyed Tree Frogs</h2>
                <img src="red_eyed_tree_frog.png" alt="Red-Eyed Tree Frog" style="width:300px;height:200px;">
                <p>Red-eyed tree frogs are known for their vibrant colors and large red eyes. They are native to Central America and are often found in tropical rainforests.</p>
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
                <h2>Additional Information</h2>
                <p>Red-eyed tree frogs are nocturnal and are known for their unique mating calls. They are also excellent climbers and can often be seen perched on leaves in their natural habitat.</p>
                
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Red-eyed tree frogs can change color from bright green to a dull brown when they are stressed.</li>
                    <li>They have a unique defense mechanism where they can jump away quickly to escape predators.</li>
                    <li>Their bright colors serve as a warning to potential predators about their toxicity.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Red-Eyed Tree Frog Care
        </footer>
    </body>
</hhtml>