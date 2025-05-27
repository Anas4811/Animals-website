<?php
session_start();

$animalName = "28";
?>

<html>
    <head>
        <title>Komodo Dragon</title>
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
            <h1>Welcome to the Komodo Dragon Page</h1>
        </header>
        <main>
            <section>
                <h2>About Komodo Dragons</h2>
                <img src="komodo_dragon.png" alt="Komodo Dragon" style="width:300px;height:200px;">
                <p>Komodo dragons are the largest lizards in the world, native to Indonesia. They are known for their powerful bite and hunting skills.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of hiding spots.</li>
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
                    <li>Komodo dragons can grow up to 10 feet long.</li>
                    <li>They have a keen sense of smell and can detect carrion from miles away.</li>
                    <li>Komodo dragons are solitary animals, coming together only to mate.</li>
                    <li>They are capable of running at speeds of up to 12 mph in short bursts.</li>
                    <li>Komodo dragons have a venomous bite that can cause paralysis in their prey.</li>
                    <li>They are listed as a vulnerable species due to habitat loss and poaching.</li>
               4     <li>Komodo dragons have a unique way of hunting, using ambush tactics to catch their prey.</li>
                    <li>They can consume up to 80% of their body weight in a single meal.</li>
                    <li>Komodo dragons have a lifespan of around 30 years in the wild.</li>

                    <li>They are known to be excellent swimmers and can dive underwater.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>

        </main>
        <footer>
            &copy; 2025 Animal Care
        </footer>
    </body>
</html>