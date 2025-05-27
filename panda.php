<?php
session_start();

$animalName = "16";
?>
<html>
    <head>
        <title>Panda</title>
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
            <h1>Welcome to the Panda Page</h1>
        </header>
        <main>
            <section>
                <h2>About Pandas</h2>
                <img src="panda.png" alt="Panda" style="width:300px;height:200px;">
                <p>Pandas are large, bear-like mammals known for their distinctive black and white coloring. They are native to China and primarily eat bamboo.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of bamboo and supplements.</li>
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
                    <li>Pandas can eat up to 40 pounds of bamboo a day.</li>
                    <li>They are excellent climbers and can swim well.</li>
                    <li>Pandas have a special thumb that helps them grasp bamboo.</li>
                </ul>
            </section>
            </main>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
            <footer>
                <p>&copy; 2023 Panda Care</p>
            </footer>
        
    </body>
</html>