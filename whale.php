<?php
session_start();

$animalName = "18";
?>
<html>
    <head>
        <title>Whale</title>
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
            <h1>Welcome to the Whale Page</h1>
        </header>
        <main>
            <section>
                <h2>About Whales</h2>
                <img src="whale.png" alt="Whale" style="width:300px;height:200px;">
                <p>Whales are large marine mammals known for their intelligence and complex social structures. They are found in oceans worldwide.</p>
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
                </ul>
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Whales are the largest animals on Earth.</li>
                    <li>Some species of whales can communicate over long distances using sound.</li>
                    <li>Whales have a complex social structure and often travel in pods.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2023 Whale Conservation Society</p>
        </footer>
    </body>
</html>