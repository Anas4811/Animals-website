<?php
session_start();

$animalName = "19";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bat</title>
    <style>
      /* your existing styles… */
      body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
      header { background-color: #4CAF50; color: white; text-align: center; padding: 20px; }
      main { padding: 20px; }
      section { background-color: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 20px; }
      footer { text-align: center; padding: 10px; background-color: #333; color: white; }
      .fact-list li { margin-bottom: 10px; }
      .fact-list blockquote { margin: 0 0 5px 0; font-style: italic; color: #555; }
      .fact-list small { color: #888; }
      
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Bat Page</h1>
    </header>
    <main>
        <section>
            <h2>About Bats</h2>
            <img src="bat.png" alt="Bat" style="width:300px;height:200px;">
            <p>Bats are flying mammals known for their echolocation abilities. They play a crucial role in ecosystems as pollinators and pest controllers.</p>
        </section>
        <section>
            <h2>Care Tips</h2>
            <ul>
                <li>Provide a spacious habitat with plenty of enrichment.</li>
                <li>Feed them a balanced diet of fruits and insects.</li>
                <li>Ensure they have access to clean water at all times.</li>
            </ul>
            <ul>
                <li>Keep their environment clean to prevent illnesses.</li>
                <li>Provide opportunities for them to exercise and explore safely.</li>
            </ul>
        </section>
        <section>
            <h2>Fun Facts</h2>
            <ul>
                <li>Bats are the only flying mammals.</li>
                <li>Some species can live up to 30 years.</li>
                <li>Bats can consume up to 1,200 mosquitoes in an hour!</li>
            </ul>
        </section>

        <!-- 2) Include the user‑submitted facts here -->
        <section>
          <?php include 'render_facts.php'; ?>
        </section>

    </main>
    <footer>
        &copy; 2023 Bat Care
    </footer>
</body>
</html>
