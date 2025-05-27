<?php
// Connect to your database
$host = "localhost";
$user = "root";
$password = ""; // your MySQL password
$db = "animalswebsite";

$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Animal data organized by groups
$animals = [
    'bird' => [
        ['id' => 1, 'name' => 'Macaw'],
        ['id' => 2, 'name' => 'Sparrow'],
        ['id' => 3, 'name' => 'Eagle'],
        ['id' => 4, 'name' => 'Penguin'],
        ['id' => 5, 'name' => 'Flamingo'],
        ['id' => 6, 'name' => 'Cockatiel'],
        ['id' => 7, 'name' => 'Budgie']
    ],
    'mammal' => [
        ['id' => 8, 'name' => 'Elephant'],
        ['id' => 9, 'name' => 'Tiger'],
        ['id' => 10, 'name' => 'Lion'],
        ['id' => 11, 'name' => 'Giraffe'],
        ['id' => 12, 'name' => 'Bear'],
        ['id' => 13, 'name' => 'Monkey'],
        ['id' => 14, 'name' => 'Zebra'],
        ['id' => 15, 'name' => 'Kangaroo'],
        ['id' => 16, 'name' => 'Panda'],
        ['id' => 17, 'name' => 'Dolphin'],
        ['id' => 18, 'name' => 'Whale'],
        ['id' => 19, 'name' => 'Bat']
    ],
    'reptile' => [
        ['id' => 20, 'name' => 'Komodo Dragon'],
        ['id' => 21, 'name' => 'Green Iguana'],
        ['id' => 22, 'name' => 'King Cobra'],
        ['id' => 23, 'name' => 'Leopard Gecko'],
        ['id' => 24, 'name' => 'Chameleon'],
        ['id' => 25, 'name' => 'Green Tree Python'],
        ['id' => 26, 'name' => 'Bearded Dragon'],
        ['id' => 27, 'name' => 'Box Turtle'],
        ['id' => 28, 'name' => 'Green Anaconda'],
        ['id' => 29, 'name' => 'Gila Monster'],
        ['id' => 30, 'name' => 'Crocodile']
    ],
    'amphibian' => [
        ['id' => 31, 'name' => 'American Bullfrog'],
        ['id' => 32, 'name' => 'Red-Eyed Tree Frog'],
        ['id' => 33, 'name' => 'Fire Salamander'],
        ['id' => 34, 'name' => 'Axolotl'],
        ['id' => 35, 'name' => 'Poison Dart Frog'],
        ['id' => 36, 'name' => 'Common Toad']
    ],
    'aquatic' => [
        ['id' => 37, 'name' => 'Shark'],
        ['id' => 38, 'name' => 'Salmon'],
        ['id' => 39, 'name' => 'Tuna'],
        ['id' => 40, 'name' => 'Clownfish'],
        ['id' => 41, 'name' => 'Goldfish'],
        ['id' => 42, 'name' => 'Octopus'],
        ['id' => 43, 'name' => 'Seahorse'],
        ['id' => 44, 'name' => 'Jellyfish'],
        ['id' => 45, 'name' => 'Crab'],
        ['id' => 46, 'name' => 'Lobster'],
        ['id' => 47, 'name' => 'Stingray']
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Fact</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url("./animals background.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

/* Container Styles */
.container {
    background-color: rgba(144, 238, 144, 0.9); /* lightgreen with slight transparency */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 350px;
    text-align: center;
}

/* Form Group Styles */
.form-group {
    margin-bottom: 20px;
    text-align: left;
}

/* Label Styles */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Select and Textarea Styles */
select, textarea, input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
}

/* Textarea Specific */
textarea {
    resize: vertical;
}

/* Submit Button */
.container button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.container button:hover {
    background-color: #45a049;
}

/* Optional Eye Toggle */
.password-container {
    position: relative;
    width: 100%;
}
.container .toggle-eye {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

/* If you have #Button and #Button1 elsewhere */
#Button, #Button1 {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    width: 100%;
    font-weight: bold;
}

#Button:hover, #Button1:hover {
    background-color: #45a049;
}
    </style>

</head>
<body>
    <div class="container">
        <h2>Post a Fact</h2>
        <form action="submit_fact.php" method="POST">
            <div class="form-group">
                <label for="group">Choose an Animal Group:</label>
                <select id="group" name="group" onchange="loadAnimals()" required>
                    <option value="">Select Group</option>
                    <?php foreach ($animals as $group => $list): ?>
                        <option value="<?php echo $group; ?>"><?php echo ucfirst($group); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group" id="animal-container" style="display: none;">
                <label for="animal">Choose an Animal:</label>
                <select id="animal" name="animal" required>
                    <option value="">Select Animal</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fact">Write a Fact:</label>
                <textarea id="fact" name="fact" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Submit Fact</button>
            </div>
        </form>
    </div>

    <script>
            function loadAnimals() {
            var group = document.getElementById("group").value;
            var animalContainer = document.getElementById("animal-container");
            var animalSelect = document.getElementById("animal");

            if (group) {
                animalContainer.style.display = "block";
                var animals = <?php echo json_encode($animals); ?>;
                var selectedGroupAnimals = animals[group];
                animalSelect.innerHTML = "<option value=''>Select Animal</option>";
                selectedGroupAnimals.forEach(animal => {
                    var option = document.createElement("option");
                    option.value = animal.id;
                    option.textContent = animal.name;
                    animalSelect.appendChild(option);
                });
            } else {
                animalContainer.style.display = "none";
            }
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
