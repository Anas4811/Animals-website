<?php
session_start();

$animalName = "38";
?>
<html>
    <head>
        <title>Salmon</title>
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
            <h1>Welcome to the Salmon Page</h1>
        </header>
        <main>
            <section>
                <h2>About Salmon</h2>
                <img src="salmon.png" alt="Salmon" style="width:300px;height:200px;">
                <p>Salmon are a type of fish known for their migratory behavior and are found in both freshwater and saltwater. They are popular for their rich flavor and nutritional value.</p>
            </section>
            <section>
                <h2>Care Tips</h2>
                <ul>
                    <li>Provide a spacious habitat with clean water.</li>
                    <li>Feed them a balanced diet of fish pellets and supplements.</li>
                    <li>Ensure they have access to hiding spots and plants.</li>
                </ul>
                <ul>
                    <li>Keep their environment clean to prevent illnesses.</li>
                    <li>Provide opportunities for them to exercise and explore safely.</li>
                </ul>
            </section>
            <section>
                <h2>Interesting Facts</h2>
                <ul>
                    <li>Salmon can swim upstream to spawn in the same place they were born.</li>
                    <li>They are known for their vibrant pink color, which comes from their diet.</li>
                    <li>Salmon are an important part of the ecosystem and are a food source for many animals.</li>
                </ul>
</section>
            <section>
                <h2>Conservation Efforts</h2>
                <p>Many organizations are working to protect salmon habitats and ensure sustainable fishing practices. It's important to support these efforts to maintain healthy salmon populations.</p>
                <ul>
                    <li>Participate in local conservation programs.</li>
                    <li>Support sustainable seafood initiatives.</li>
                    <li>Educate others about the importance of salmon conservation.</li>
                </ul>
            </section>
            <section>
          <?php include 'render_facts.php'; ?>
        </section>
            </main>
            </section>
            <footer>
                <p>&copy; 2025 Salmon Page. All rights reserved.</p>
            </footer>
        
    </body>
</html>