<?php

session_start();

$animalName = "31";
?>
<html>
    <head>
        <title>American Bullfrog</title>
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
            <h1>Welcome to the American Bullfrog Page</h1>
        </header>
        <main>
            <section>
                <h2>About American Bullfrogs</h2>
                <img src="american_bullfrog.png" alt="American Bullfrog" style="width:300px;height:200px;">
                <p>American bullfrogs are large frogs native to North America. They are known for their distinctive croaking sound and can be found in various habitats.</p>
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
                <p>American bullfrogs are known for their adaptability and can thrive in various environments. They are also popular in the pet trade due to their unique appearance and behavior.</p>
                <p>It is important to research and understand their needs before keeping them as pets. Proper care and attention can lead to a long and healthy life for your bullfrog.</p>
                
            </section>
            <section>
                <h2>Fun facts</h2>
                <ul>
                    <li>American bullfrogs can jump up to 10 times their body length.</li>
                    <li>They have a lifespan of 7 to 9 years in the wild.</li>
                    <li>They are known for their loud croaking, especially during mating season.</li>
                    <li>American bullfrogs are opportunistic feeders and will eat almost anything they can catch.</li>
                    <li>They are capable of swimming long distances and can hold their breath underwater for several minutes.</li>
                    <li>American bullfrogs are often used in scientific research due to their size and adaptability.</li>
            </section>
             <!-- 2) Include the user‑submitted facts here -->
        <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 American Bullfrog Care</p>
        </footer>
    </body>
</html>