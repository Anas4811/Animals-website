<?php
session_start();

$animalName = "19";
?>
<html>
    <head>
        <title>Common Toad</title>
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
            <h1>Welcome to the Common Toad Page</h1>
        </header>
        <main>
            <section>
                <h2>About Common Toads</h2>
                <img src="common_toad.png" alt="Common Toad" style="width:300px;height:200px;">
                <p>Common toads are amphibians known for their warty skin and ability to adapt to various environments. They are found in Europe and parts of Asia.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with access to water.</li>
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
                <p>Common toads are nocturnal and prefer to be active at night. They can live for several years in captivity with proper care.</p>
                <ul>
                    <li>They have a unique ability to regenerate lost limbs.</li>
                    <li>Common toads are important for controlling insect populations.</li>
                    <li>They are often found near ponds and wetlands.</li>
                </ul>
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Common toads can change color based on their environment.</li>
                    <li>They have a distinctive mating call during the breeding season.</li>
                    <li>Toads can live for over 10 years in captivity.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Common Toad Care
        </footer>
    </body>
</html>