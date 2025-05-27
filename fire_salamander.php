<?php
session_start();

$animalName = "33";
?>
<html>
    <head>
        <title>Fire Salamander</title>
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
            <h1>Welcome to the Fire Salamander Page</h1>
        </header>
        <main>
            <section>
                <h2>About Fire Salamanders</h2>
                <img src="fire_salamander.png" alt="Fire Salamander" style="width:300px;height:200px;">
                <p>Fire salamanders are known for their striking black and yellow coloration. They are primarily found in Europe and are often associated with wet, forested areas.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
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
                <p>Fire salamanders are nocturnal and prefer a humid environment. They can be sensitive to temperature changes, so it's important to maintain a stable habitat.</p>
                <p>They are also known for their unique defense mechanism, which involves secreting toxins from their skin to deter predators.</p>
                <p>Fire salamanders are generally solitary creatures, but they can be found in groups during the breeding season.</p>

            </section>
            <section> 
                <h2>Fun Facts</h2>
                <ul>
                    <li>Fire salamanders can live for over 50 years in captivity.</li>
                    <li>They are often associated with folklore and mythology, symbolizing transformation and rebirth.</li>
                    <li>Fire salamanders are primarily terrestrial but are also excellent swimmers.</li>
                    <li>They are known for their ability to regenerate lost limbs.</li>
                    <li>Fire salamanders are sensitive to environmental changes, making them important indicators of ecosystem health.</li>
                </ul>
                <ul>
                    <li>They are primarily insectivores, but can also eat small invertebrates.</li>
                    <li>Fire salamanders are often found in damp, shaded areas of forests.</li>
                    <li>They have a unique ability to produce a bright yellow pigment in their skin, which helps them blend into their environment.</li>
                    <li>Fire salamanders are known for their distinctive mating calls, which can be heard during the breeding season.</li>  
                    <li>They are often kept as pets due to their striking appearance and relatively easy care requirements.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>

        <footer>
            <p>&copy; 2025 Fire Salamander Care</p>
        </footer>
    </body>
</html>