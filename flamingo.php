<?php
session_start();

$animalName = "5";
?>
<html>
    <head>
        <title>Flamingo</title>
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
            <h1>Flamingo</h1>
        </header>

        <main>
            <section>
                <h2>Flamingo</h2>
                <p>The flamingo is a large wading bird known for its long legs and neck, as well as its distinctive pink plumage. They are found in warm, shallow waters around the world.</p>
                <img src="flamingo.png" alt="Flamingo" style="width:300px;height:200px;">
                <h3>Characteristics</h3>
                <ul>
                    <li>Size: 3 to 5 feet in height</li>
                    <li>Weight: 4 to 8 pounds</li>
                    <li>Diet: Algae, crustaceans, and small fish</li>
                    <li>Lifespan: 20 to 30 years in the wild</li>
                    <li>Social Behavior: Highly social and often found in large flocks</li>
                    <li>Vocalization: Known for their honking and grunting sounds</li>
                </ul>
                <h3>Habitat</h3>
                <p>Flamingos are typically found in shallow lakes, lagoons, and estuaries, where they can feed on algae and small organisms.</p>

                <h3>Conservation Status</h3>
                <p>Flamingos are generally not considered endangered, but some species are threatened by habitat loss and pollution.</p>
                <h3>Interesting Facts</h3>
                <ul>
                    <li>Flamingos get their pink color from the carotenoid pigments in their diet.</li>
                    <li>They are known for their unique feeding behavior, where they filter food from the water using their specialized beaks.</li>
                    <li>Flamingos are monogamous and often mate for life.</li>
                    <li>They can stand on one leg for long periods, which helps them conserve body heat.</li>
                    <li>Flamingos are highly social birds and often engage in synchronized group movements.</li>
                    <li>They are known for their elaborate courtship displays, which include dancing and vocalizations.</li>
                    <li>Flamingos can fly at altitudes of up to 15,000 feet and can travel long distances in search of food and suitable breeding grounds.</li>
                    <li>They have a unique way of communicating with each other, using a variety of vocalizations and body language.</li>
                </ul>
                
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>

        <footer>
            &copy; 2023 Bird Information
        </footer>
    </body>
</html>