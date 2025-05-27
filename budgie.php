<?php
session_start();

$animalName = "7";
?>
<html>
    <head>
        <title>
            Budgie
        </title>
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
            <h1>Welcome to the Budgie Page</h1>
        </header>

        <main>
            <section>
                <h2>About Budgies</h2>
                <img src="budgie.png" alt="Budgie" style="width:300px;height:200px;">
                <p>Budgies, also known as parakeets, are small, colorful birds that are popular as pets. They are known for their playful nature and ability to mimic sounds.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious cage with toys and perches.</li>
                    <li>Feed them a balanced diet of seeds, pellets, and fresh fruits.</li>
                    <li>Spend time interacting with them daily.</li>
                </ul>
                <ul>
                    <li>Ensure they have access to clean, fresh water at all times.</li>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and fly safely.</li>
                </ul>
                <h3>Fun Facts</h3>
                <ul>
                    <li>Budgies are native to Australia and are one of the most popular pet birds worldwide.</li>
                    <li>They can learn to mimic human speech and sounds, making them entertaining companions.</li>
                    <li>Budgies come in various colors, including blue, green, yellow, and white.</li>
                    <li>They are social birds and thrive on companionship, so consider getting a pair.</li>
                    <li>Budgies have a lifespan of 5 to 10 years, but with proper care, they can live longer.</li>
                    <li>They are known for their playful and curious nature, often exploring their surroundings.</li>
                    <li>Budgies are intelligent birds and can be trained to perform tricks and respond to commands.</li>
                    <li>They enjoy bathing, so providing a shallow dish of water for them to splash in is a great way to keep them happy.</li>
                    <li>Budgies are seed eaters, but a varied diet including fruits and vegetables is essential for their health.</li>
                    <li>They are social creatures and thrive on interaction, so spending time with them is crucial for their well-being.</li>
                    <li>Budgies are known for their cheerful chirping and can communicate with each other through various sounds.</li>
                    <li>They have a unique way of preening their feathers, using their beaks to keep them clean and healthy.</li>
                    <li>Budgies are curious and love to explore, so providing them with toys and climbing opportunities is essential.</li>
                    <li>They are known for their acrobatic skills and can often be seen hanging upside down or swinging from their perches.</li>
                    <li>Budgies are social birds and thrive on companionship, so consider getting a pair to keep each other company.</li>
                    <li>They are known for their playful and curious nature, often exploring their surroundings.</li>
                    <li>Budgies are intelligent birds and can be trained to perform tricks and respond to commands.</li>
                </ul>
                    
            </section>
            <section>
                <h2>Conclusion</h2>
                <p>Budgies are delightful pets that bring joy and companionship to their owners. With proper care and attention, they can thrive and become beloved members of the family.</p>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>

        <footer>
            &copy; 2023 Bird Lovers
        </footer>
    </body>
</html>