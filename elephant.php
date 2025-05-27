<?php
session_start();

$animalName = "8";
?>
<html>
    <head>
        <title>Elephant</title>
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
        .fact-list blockquote { font-style: italic; color: #555; margin: 0 0 5px; }
            .fact-list small { color: #888; }
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
        </style>
    </head>
    <body>
        <header>
            <h1>Welcome to the Elephant Page</h1>
        </header>
        <main>
            <section>
                <h2>About Elephants</h2>
                <img src="elephant.png" alt="Elephant" style="width:300px;height:200px;">
                <p>Elephants are the largest land animals on Earth. They are known for their intelligence, strong social bonds, and long trunks.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of room to roam.</li>
                    <li>Feed them a balanced diet of fruits, vegetables, and hay.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Provide opportunities for mental stimulation and social interaction.</li>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Regular veterinary check-ups are essential for their health.</li>
                    <li>Elephants can live up to 70 years in the wild.</li>
                    <li>They use their trunks for breathing, smelling, touching, and grabbing objects.</li>
                    <li>Elephants are capable of showing emotions like joy, grief, and compassion.</li>
                </ul>
                <h2>Conservation Status</h2>
                <p>Elephants are currently listed as endangered due to habitat loss and poaching for their ivory tusks. Conservation efforts are underway to protect these magnificent creatures and their habitats.</p>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Elephants can communicate with each other using low-frequency sounds that are inaudible to humans.</li>
                    <li>They have a highly developed social structure and live in matriarchal herds.</li>
                    <li>Elephants can recognize themselves in mirrors, indicating a high level of self-awareness.</li>
                    <li>They can consume up to 300 pounds of food in a single day!</li>
                    <li>Elephants are known to exhibit behaviors similar to human emotions, such as mourning their dead.</li>
                    <li>They have a unique way of walking, known as "pacing," where they move both legs on one side of their body simultaneously.</li>
                    <li>Elephants can swim and use their trunks as snorkels when submerged in water.</li>
                    <li>They have a strong sense of smell and can detect water sources from miles away.</li>
                    
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            <p>&copy; 2025 Elephant Conservation</p>
        </footer>
    </body>
</html>