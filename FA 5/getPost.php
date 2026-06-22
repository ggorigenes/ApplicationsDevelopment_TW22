<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>FA5 - GET & POST</title>
</head>
<body>
   <div class="glass-container">
        
        <div class="glass-panel">
            <h3 class="mb-4 text-center fw-light">Personal Information</h3>
            
            <form action="" method="">
                <div class="mb-3">
                    <div class="glass-label">First Name</div>
                    <input type="text" class="form-control glass-input" name="firstName" placeholder="Type first name..." required>
                </div>
                <div class="mb-3">
                    <div class="glass-label">Middle Name</div>
                    <input type="text" class="form-control glass-input" name="middleName" placeholder="Type middle name...">
                </div>
                <div class="mb-3">
                    <div class="glass-label">Last Name</div>
                    <input type="text" class="form-control glass-input" name="lastName" placeholder="Type last name..." required>
                </div>
                <div class="mb-3">
                    <div class="glass-label">Date of Birth</div>
                    <input type="date" class="form-control glass-input" name="birthDate">
                </div>
                <div class="mb-4">
                    <div class="glass-label">Address</div>
                    <input type="text" class="form-control glass-input" name="address" placeholder="Type address...">
                </div>
                
                <div class="d-flex gap-3">
                    <button type="submit" name="submit_get" value="1" formmethod="get" class="btn btn-glass">Via GET</button>
                    <button type="submit" name="submit_post" value="1" formmethod="post" class="btn btn-glass" style="background: rgba(255,255,255,0.6);">Via POST</button>
                </div>
            </form>
        </div>

        <div class="glass-panel">
            <h3 class="mb-4 fw-light">Submitted Data</h3>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_post'])) {
                        
                        $firstname = htmlspecialchars($_POST['firstName'] ?? '');
                        $middlename = htmlspecialchars($_POST['middleName'] ?? '');
                        $lastname = htmlspecialchars($_POST['lastName'] ?? '');
                        $dob = htmlspecialchars($_POST['birthDate'] ?? '');
                        $address = htmlspecialchars($_POST['address'] ?? '');

                        echo '<div class="result-box">';
                        echo "<h4>Received via POST:</h4>";
                        echo "<p><strong>First Name:</strong> " . $firstname . "</p>";
                        echo "<p><strong>Middle Name:</strong> " . $middlename . "</p>";
                        echo "<p><strong>Last Name:</strong> " . $lastname . "</p>";
                        echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
                        echo "<p><strong>Address:</strong> " . $address . "</p>";
                        echo '</div>';
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit_get'])) {
                        
                        $firstname = htmlspecialchars($_GET['firstName'] ?? '');
                        $middlename = htmlspecialchars($_GET['middleName'] ?? '');
                        $lastname = htmlspecialchars($_GET['lastName'] ?? '');
                        $dob = htmlspecialchars($_GET['birthDate'] ?? '');
                        $address = htmlspecialchars($_GET['address'] ?? '');

                        echo '<div class="result-box" style="border-left-color: #198754;">'; 
                        echo "<h4>Received via GET:</h4>";
                        echo "<p><strong>First Name:</strong> " . $firstname . "</p>";
                        echo "<p><strong>Middle Name:</strong> " . $middlename . "</p>";
                        echo "<p><strong>Last Name:</strong> " . $lastname . "</p>";
                        echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
                        echo "<p><strong>Address:</strong> " . $address . "</p>";
                        echo '</div>';
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
