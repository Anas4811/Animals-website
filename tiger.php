<?php
session_start();

$animalName = "9";
?>
<html>
    <head>
        <title>Tiger</title>
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
            <h1>Welcome to the Tiger Page</h1>
        </header>
        <main>
            <section>
                <h2>About Tigers</h2>
                <img src="tiger.png" alt="Tiger" style="width:300px;height:200px;">
                <p>Tigers are the largest cat species in the world, known for their power and strength. They are native to Asia and are recognized for their distinctive orange coat with black stripes.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of meat and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Interesting Facts</h2>
                <ul>
                    <li>Tigers can weigh between 220 to 660 pounds.</li>
                    <li>They are solitary animals and prefer to live alone.</li>
                    <li>Tigers are excellent swimmers and enjoy being in water.</li>
                    <li>They can run at speeds of up to 30 miles per hour.</li>
                </ul>
                <h3>Conservation Status</h3>
                <p>Tigers are classified as endangered due to habitat loss and poaching. Conservation efforts are crucial to protect their populations.</p>
                <h3>Fun Facts</h3>
                <ul>
                    <li>Each tiger has a unique pattern of stripes, much like human fingerprints.</li>
                    <li>A tiger's roar can be heard up to 2 miles away.</li>
                    <li>Tigers have antiseptic saliva that helps clean their wounds.</li>
                    <li>They can leap forward up to 10 meters in a single jump.</li>
                    <li>Tigers are nocturnal hunters, relying on their excellent night vision.</li>
                    <li>Their tongues are covered with tiny, sharp projections called papillae, which help strip meat from bones.</li>
                    <li>White tigers are not a separate species but a rare color variation of Bengal tigers.</li>
                    <li>Tigers mark their territory by scratching trees and using scent glands.</li>
                    <li>They are known to be very vocal, using a variety of sounds to communicate.</li>
                    <li>Tigers can consume up to 100 pounds of meat in one meal.</li>
                    <li>They are apex predators, meaning they have no natural enemies in the wild.</li>
                    <li>Tigers are highly adaptable and can live in various habitats, including forests, grasslands, and swamps.</li>
        
                </ul>

            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
            <footer>
                <p>&copy; 2025 Tiger Conservation</p>
            </footer>
        </main>

    </body>
</html>