<?php
session_start();

$animalName = "21";
?>
<html>
    <head>
        <title>Green Iguana</title>
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
            <h1>Welcome to the Green Iguana Page</h1>
        </header>
        <main>
            <section>
                <h2>About Green Iguanas</h2>
                <img src="green_iguana.png" alt="Green Iguana" style="width:300px;height:200px;">
                <p>Green iguanas are large lizards native to Central and South America. They are known for their vibrant green color and long tails.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with plenty of climbing opportunities.</li>
                    <li>Feed them a balanced diet of leafy greens and fruits.</li>
                    <li>Ensure they have access to clean water at all times.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                    <li>Green iguanas can live up to 20 years in captivity.</li>
                    <li>They are primarily herbivores, so a diet rich in vegetables is essential.</li>
                </ul>

            </section>
            <section>
                <h2>Fun Facts</h2>
                <ul>
                    <li>Green iguanas can change color based on their mood and environment.</li>
                    <li>They are excellent swimmers and can hold their breath underwater for up to 30 minutes.</li>
                    <li>Green iguanas have a third eye on the top of their head, which helps them detect movement.</li>
                    <li>They can grow up to 6 feet long, including their tail.</li>
                    <li>Green iguanas are social animals and can be kept in pairs or groups.</li>
                    <li>They are known to be quite vocal, making various sounds to communicate.</li>
                    <li>Green iguanas are often kept as pets due to their unique appearance and relatively easy care.</li>
                    <li>They are primarily arboreal, spending most of their time in trees.</li>
                    <li>Green iguanas are cold-blooded and rely on external heat sources to regulate their body temperature.</li>
                    <li>They can drop their tails as a defense mechanism, which can regrow over time.</li>
                </ul>
    </section>
    <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>
        <footer>
            &copy; 2025 Green Iguana Care
        </footer>
    </body>
</html>