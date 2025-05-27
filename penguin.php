<?php
session_start();

$animalName = "4";
?>
<html>
    <head>
        <title>Penguin</title>
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
            <h1>Penguin</h1>
        </header>

        <main>
            <section>
                <h2>Penguin</h2>
                <p>The penguin is a flightless bird known for its distinctive black and white plumage. They are primarily found in the Southern Hemisphere, especially in Antarctica.</p>
                <img src="penguin.png" alt="Penguin" style="width:300px;height:200px;">
                <h3>Characteristics</h3>
                <ul>
                    <li>Size: 1 to 4 feet in height</li>
                    <li>Weight: 1 to 100 pounds</li>
                    <li>Diet: Fish, squid, and krill</li>
                    <li>Lifespan: 15 to 20 years in the wild</li>
                    <li>Social Behavior: Highly social and often live in large colonies</li>
                    <li>Vocalization: Known for their distinctive calls and vocalizations</li>
                </ul>
                <h3>Habitat</h3>
                <p>Penguins are typically found in cold, icy environments, where they can hunt for fish and other marine life.</p>

                <h3>Conservation Status</h3>
                <p>Many penguin species are threatened due to climate change, habitat loss, and overfishing. Conservation efforts are underway to protect their populations.</p>

            </section>
            <section>
                <h3>Interesting Facts</h3>
                <ul>
                    <li>Penguins are excellent swimmers and can dive to great depths in search of food.</li>
                    <li>They have a unique way of communicating with each other, using a variety of vocalizations and body language.</li>
                    <li>Some species of penguins can live in temperatures as low as -60 degrees Fahrenheit.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>

        <footer>
            &copy; 2023 Penguin Information
        </footer>
    </body>
</html>