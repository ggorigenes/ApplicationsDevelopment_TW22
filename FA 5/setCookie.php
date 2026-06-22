<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    
    $firstname = htmlspecialchars($_POST['firstname']);
    $middlename = htmlspecialchars($_POST['middlename']);
    $lastname = htmlspecialchars($_POST['lastname']);

    setcookie("firstname", $firstname, time() + 10);
    setcookie("middlename", $middlename, time() + 20);
    setcookie("lastname", $lastname, time() + 30);
    
    header("Location: " . $_SERVER['PHP_SELF'] . "?status=saved");
    exit();
}

$firstCookie = $_COOKIE['firstname'] ?? null;
$middleCookie = $_COOKIE['middlename'] ?? null;
$lastCookie = $_COOKIE['lastname'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA5 - Set Cookies</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="glass-container">
        
        <div class="glass-panel">
            <h3 class="mb-4 text-center fw-light">Set Cookies</h3>
            
            <form action="" method="POST">
                <div class="mb-4">
                    <div class="glass-label">First Name (10s)</div>
                    <input type="text" class="form-control glass-input" name="firstname" placeholder="Enter first name..." required>
                </div>
                <div class="mb-4">
                    <div class="glass-label">Middle Name (20s)</div>
                    <input type="text" class="form-control glass-input" name="middlename" placeholder="Enter middle name..." required>
                </div>
                <div class="mb-5">
                    <div class="glass-label">Last Name (30s)</div>
                    <input type="text" class="form-control glass-input" name="lastname" placeholder="Enter last name..." required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-glass">Submit Cookies</button>
            </form>
        </div>

        <div class="glass-panel">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="m-0 fw-light">Live Status</h3>
                <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="btn btn-glass" style="width: auto; padding: 8px 15px; font-size: 0.8rem;">
                    ⟳ Refresh
                </a>
            </div>

            <?php if ($firstCookie): ?>
                <div class="status-pill status-active">
                    <div>
                        <div class="cookie-name">First Name</div>
                        <div class="cookie-val"><?= $firstCookie ?></div>
                    </div>
                    <span class="badge bg-light text-dark rounded-pill">10s</span>
                </div>
            <?php else: ?>
                <div class="status-pill status-expired">
                    <div>
                        <div class="cookie-name">First Name</div>
                        <div class="cookie-val">Expired</div>
                    </div>
                    <span class="badge bg-danger rounded-pill">0s</span>
                </div>
            <?php endif; ?>

            <?php if ($middleCookie): ?>
                <div class="status-pill status-active">
                    <div>
                        <div class="cookie-name">Middle Name</div>
                        <div class="cookie-val"><?= $middleCookie ?></div>
                    </div>
                    <span class="badge bg-light text-dark rounded-pill">20s</span>
                </div>
            <?php else: ?>
                <div class="status-pill status-expired">
                    <div>
                        <div class="cookie-name">Middle Name</div>
                        <div class="cookie-val">Expired</div>
                    </div>
                    <span class="badge bg-danger rounded-pill">0s</span>
                </div>
            <?php endif; ?>

            <?php if ($lastCookie): ?>
                <div class="status-pill status-active">
                    <div>
                        <div class="cookie-name">Last Name</div>
                        <div class="cookie-val"><?= $lastCookie ?></div>
                    </div>
                    <span class="badge bg-light text-dark rounded-pill">30s</span>
                </div>
            <?php else: ?>
                <div class="status-pill status-expired">
                    <div>
                        <div class="cookie-name">Last Name</div>
                        <div class="cookie-val">Expired</div>
                    </div>
                    <span class="badge bg-danger rounded-pill">0s</span>
                </div>
            <?php endif; ?>

        </div>
        
    </div>

</body>
</html>