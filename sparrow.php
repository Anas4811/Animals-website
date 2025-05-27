<?php
session_start();

$animalName = "2";
?>
<html>
    <head>
        <title>Sparrow</title>
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

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
        .fact-list blockquote { font-style: italic; color: #555; margin: 0 0 5px; }
            .fact-list small { color: #888; }
        </style>
    </head>
    <body>
        <header>
            <h1>Sparrow</h1>
        </header>
        <main>
            <section>
                <h2>Sparrow</h2>
                <p>The sparrow is a small, brownish bird known for its chirping sound. They are found in various habitats, including urban areas, gardens, and forests.</p>
                <img src="sparrow.png" alt="Sparrow" style="width:300px;height:200px;">
                <h3>Characteristics</h3>
                <ul>
                    <li>Size: 4 to 7 inches in length</li>
                    <li>Weight: 0.5 to 1 ounce</li>
                    <li>Diet: Seeds, insects, and fruits</li>
                    <li>Lifespan: 3 to 5 years in the wild</li>
                    <li>Social Behavior: Often found in flocks</li>
                    <li>Vocalization: Known for their cheerful chirping sounds</li>
                </ul>
                <h3>Habitat</h3>
                <p>Sparrows are adaptable birds that can thrive in various environments, including cities, parks, and rural areas.</p>

                <h3>Conservation Status</h3>
                <p>Sparrows are generally not considered endangered, but some species face habitat loss due to urbanization and agricultural practices.</p>
                <h3>Interesting Facts</h3>
                <ul>
                    <li>Sparrows are one of the most widespread bird species in the world.</li>
                    <li>They are known to build nests in unusual places, such as streetlights and building crevices.</li>
                    <li>Sparrows have been associated with humans for thousands of years.</li>
                    <li>They play an important role in controlling insect populations.</li>
                </ul>
                <h3> fun fact:</h3>
                <p>Sparrows take dust baths instead of water baths! 🛁✨

                    Instead of always using water to clean themselves, sparrows love rolling around in dry dirt or sand to remove parasites and keep their feathers in top shape. They kick up dust, shake their feathers, and look like they’re having a mini spa day! 🐦💨
                    
                    Pretty cool, right? Want more fun bird facts for your website?</p>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Animals Website. All rights reserved.</p>
    </body>
</html>