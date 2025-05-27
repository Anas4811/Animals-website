<?php
session_start();

$animalName = "15";
?>
<html>
    <head>
        <title>Kangaroo</title>
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
            <h1>Welcome to the Kangaroo Page</h1>
        </header>
        <main>
            <section>
                <h2>About Kangaroos</h2>
                <img src="kangaroo.png" alt="Kangaroo" style="width:300px;height:200px;">
                <p>Kangaroos are marsupials native to Australia, known for their powerful hind legs and ability to hop. They are social animals that live in groups called mobs.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of enrichment.</li>
                    <li>Feed them a balanced diet of grass and vegetables.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                    <li>Kangaroos are social animals and thrive in groups.</li>
                    <li>Monitor their health regularly and consult a veterinarian if needed.</li> 
                    
                </ul>
            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Kangaroos can hop at speeds of up to 30 miles per hour.</li>
                    <li>They can jump over obstacles that are 10 feet high.</li>
                    <li>Kangaroos are herbivores and primarily eat grass and leaves.</li>
                    <li>They have a unique way of moving called "hopping."</li>
                    <li>Kangaroos have strong tails that help them balance while hopping.</li>
                    <li>They are the largest marsupials in the world.</li>
                    <li>Kangaroos can live up to 20 years in the wild.</li>
                    <li>They are social animals and often live in groups called mobs.</li>
                    
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
