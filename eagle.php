<?php
session_start();

$animalName = "3";
?>
<html>
    <head>
        <title>Eagle</title>
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
            <h1>Eagle</h1>
        </header>

        <main>
            <section>
                <h2>Eagle</h2>
                <p>The eagle is a large bird of prey known for its keen eyesight and powerful flight. They are found in various habitats, including mountains, forests, and open plains.</p>
                <img src="eagle.png" alt="Eagle" style="width:300px;height:200px;">
                <h3>Characteristics</h3>
                <ul>
                    <li>Size: 20 to 40 inches in length</li>
                    <li>Weight: 3 to 15 pounds</li>
                    <li>Diet: Fish, small mammals, and carrion</li>
                    <li>Lifespan: 20 to 30 years in the wild</li>
                    <li>Social Behavior: Often solitary or found in pairs</li>
                    <li>Vocalization: Known for their high-pitched calls</li>
                </ul>
                <h3>Habitat</h3>
                <p>Eagles are typically found near large bodies of water, where they can hunt for fish and other prey.</p>

                <h3>Conservation Status</h3>
                <p>Many eagle species are protected under conservation laws due to habitat loss and hunting.</p>
                <h3>Interesting Facts</h3>
                <ul>
                    <li>Eagles have excellent vision, allowing them to spot prey from great distances.</li>
                    <li>They build large nests, often reused for many years.</li>
                    <li>The bald eagle is the national bird of the United States.</li>
                    <li>Eagles can fly at altitudes of up to 10,000 feet.</li>
                    <li>Some species of eagles can dive at speeds of over 100 mph.</li>
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