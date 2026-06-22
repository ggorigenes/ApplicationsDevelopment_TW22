<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA5 - Favorite Colors</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container justify-content-center">
        
        <div class="glass-panel" style="max-width: 500px;">
            <h3 class="mb-4 text-center fw-light">Enter Favorite Colors</h3>
            
            <form action="ResultColors.php" method="POST">
                <div class="mb-3">
                    <div class="glass-label">Favorite Color 1</div>
                    <input type="text" class="form-control glass-input" name="color1" placeholder="e.g., Red" required>
                </div>
                <div class="mb-3">
                    <div class="glass-label">Favorite Color 2</div>
                    <input type="text" class="form-control glass-input" name="color2" placeholder="e.g., Yellow" required>
                </div>
                <div class="mb-3">
                    <div class="glass-label">Favorite Color 3</div>
                    <input type="text" class="form-control glass-input" name="color3" placeholder="e.g., Blue" required>
                </div>
                <div class="mb-3">
                    <div class="glass-label">Favorite Color 4</div>
                    <input type="text" class="form-control glass-input" name="color4" placeholder="e.g., Green" required>
                </div>
                <div class="mb-4">
                    <div class="glass-label">Favorite Color 5</div>
                    <input type="text" class="form-control glass-input" name="color5" placeholder="e.g., Pink" required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-glass">Send Colors</button>
            </form>
        </div>

    </div>
</body>
</html>