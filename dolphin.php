<?php
session_start();

$animalName = "17";
?>
<html>
    <head>
        <title>Dolphin</title>
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
            <h1>Welcome to the Dolphin Page</h1>
        </header>
        <main>
            <section>
                <h2>About Dolphins</h2>
                <img src="dolpin.png" alt="Dolphin" style="width:300px;height:200px;">
                <p>Dolphins are highly intelligent marine mammals known for their playful behavior and social nature. They are found in oceans and rivers around the world.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of fish and supplements.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                    <li>Dolphins are social animals and thrive in groups.</li>
                    <li>Regularly monitor their health and behavior.</li>
                </ul>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Dolphins are part of the cetacean family, which includes whales and porpoises.</li>
                    <li>They use echolocation to navigate and hunt for food.</li>
                    <li>Dolphins can swim at speeds of up to 25 miles per hour.</li>
                    <li>They have a unique whistle to identify themselves, like a name.</li>
                    <li>Dolphins sleep with one eye open and one half of their brain awake.</li>
                    <li>There are over 40 species of dolphins worldwide.</li>
                    <li>The bottlenose dolphin is the most common and well-known species.</li>
                    <li>Dolphins are known to help injured members of their pod.</li>
                    <li>They can live up to 50 years in the wild.</li>
                    <li>Dolphins communicate using clicks, whistles, and body movements.</li>
                    <li>They have been observed using tools, such as sponges, to protect their snouts.</li>
                    <li>Dolphins have excellent eyesight both above and below water.</li>
                    <li>They can hold their breath for up to 10 minutes while diving.</li>
                    <li>Dolphins have a layer of blubber to keep them warm in cold water.</li>
                    <li>They are known to surf waves for fun.</li>
                    <li>Some dolphins can leap as high as 20 feet out of the water.</li>
                    <li>Dolphins have a playful nature and often interact with humans.</li>
                    <li>They have a highly developed brain and are considered one of the smartest animals.</li>
                    <li>Orcas, also known as killer whales, are the largest species of dolphin.</li>
                    <li>Dolphins form strong social bonds and live in groups called pods.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2023 Dolphin Care
        </footer>
    </body>
</html>