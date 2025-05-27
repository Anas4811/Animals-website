<?php
session_start();

$animalName = "14";
?>
<html>
    <head>
        <title>Zebra</title>
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
            <h1>Welcome to the Zebra Page</h1>
        </header>
        <main>
            <section>
                <h2>About Zebras</h2>
                <img src="zebra.png" alt="Zebra" style="width:300px;height:200px;">
                <p>Zebras are known for their distinctive black and white stripes. They are social animals that live in herds and are native to Africa.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of grass, hay, and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                    <li>Zebras can live up to 25 years in the wild.</li>
                    <li>They are known to be very vocal and communicate through various sounds.</li>
                    <li>Zebras are social animals and often form strong bonds with each other.</li>
                    <li>They are herbivores and primarily graze on grasses.</li>
                    <li>Zebras have excellent eyesight and can see in color.</li>
                    <li>They can run at speeds of up to 40 miles per hour.</li>
                    <li>Zebras are known for their unique stripe patterns, which are as individual as fingerprints.</li>
                    <li>They communicate through vocalizations, body language, and facial expressions.</li>
                    <li>Zebras are herbivores and primarily graze on grasses.</li>
                    <li>They can run at speeds of up to 40 miles per hour.</li> 
                </ul>
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Zebras are known for their unique stripe patterns, which are as individual as fingerprints.</li>
                    <li>They communicate through vocalizations, body language, and facial expressions.</li>
                    <li>Zebras are herbivores and primarily graze on grasses.</li>
                    <li>They can run at speeds of up to 40 miles per hour.</li>
                    <li>Zebras have excellent eyesight and can see in color.</li>
                    
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Zebra Care
        </footer>
    </body>
</html>