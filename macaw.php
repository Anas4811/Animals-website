<?php
session_start();

$animalName = "1";
?>
<html>
    <head>
    <title>Macaw</title>
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
            <h1>Macaw</h1>
        </header>

        <main>
            <section>
                <h2>Macaw</h2>
                <p>The macaw is a large, colorful bird known for its vibrant plumage and strong beak. They are native to Central and South America and are often found in tropical rainforests.</p>
                <img src="parrot.png" alt="Macaw" style="width:300px;height:200px;">
                <h3>Characteristics</h3>
                <ul>
                    <li>Size: 30 to 40 inches in length</li>
                    <li>Weight: 1.5 to 3.5 pounds</li>
                    <li>Diet: Fruits, nuts, seeds, and flowers</li>
                    <li>Lifespan: 50 to 80 years in captivity</li>
                    <li>Social Behavior: Highly social and often live in flocks</li>
                    <li>Vocalization: Known for their ability to mimic sounds and human speech</li>
                </ul>
                <h3>Habitat</h3>
                <p>Macaws are typically found in tropical rainforests, savannas, and woodlands. They prefer areas with plenty of trees for nesting and feeding.</p>

                <h3>Conservation Status</h3>
                <p>Many species of macaws are threatened or endangered due to habitat loss, poaching, and the illegal pet trade. Conservation efforts are underway to protect their habitats and populations.</p>
                <h3>Fun Fact</h3>
                <p>👉 Macaws blush when they’re excited or happy! 😳❤️

                    Just like humans, macaws' faces can turn red or pink when they feel strong emotions, like excitement or affection. If a macaw likes you, it might even fluff its feathers and blush when you talk to it!
                    
                    That’s pretty adorable, right? 😆 Would you like more fun bird facts for your website? 🦜</p>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
        </main>

        <footer>
            <p>&copy; 2025 Animals Website. All rights reserved.</p>
        </footer>
    </body>
</html>