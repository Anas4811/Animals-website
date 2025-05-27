<?php
session_start();

$animalName = "11";
?>
<html>
    <head>
        <title>Giraffe</title>
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
            <h1>Welcome to the Giraffe Page</h1>
        </header>
        <main>
            <section>
                <h2>About Giraffes</h2>
                <img src="giraffe.png" alt="Giraffe" style="width:300px;height:200px;">
                <p>Giraffes are the tallest land animals, known for their long necks and legs. They are native to Africa and are recognized for their unique spotted coat.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of leaves, fruits, and vegetables.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                    

                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                    <li>Giraffes can live up to 25 years in the wild.</li>
                    <li>They are herbivores and primarily eat leaves from trees.</li>
                    <li>Giraffes have a unique way of walking, moving both legs on one side of their body and then the other.</li>
                    <li>They have a special valve in their necks that helps regulate blood flow to their brains.</li>
                    <li>Giraffes can sleep standing up, but they also take short naps lying down.</li>
                    <li>They have a gestation period of about 15 months, giving birth to a single calf.</li>
                    <li>Giraffes communicate using a variety of sounds, including grunts, snorts, and hisses.</li>
                </ul>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Giraffes have a unique pattern of spots, similar to human fingerprints.</li>
                    <li>They can run at speeds of up to 37 miles per hour (60 km/h).</li>
                    <li>Giraffes have a prehensile tongue that can be up to 18 inches long.</li>
                    <li>They can go without water for weeks, getting moisture from the leaves they eat.</li>
                    <li>Giraffes have a special adaptation in their necks that allows them to reach high branches.</li>
                    <li>They are social animals and often live in groups called towers.</li>
                    <li>Giraffes have a unique way of walking, moving both legs on one side of their body and then the other.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>

        </main>
        <footer>
            <p>&copy; 2025 Giraffe Care</p>
        </footer>
    </body>
</html>