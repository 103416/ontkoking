<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account maken — Aan tafel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <a href="index.php" class="logo"><span class="logo-mark" aria-hidden="true">✳</span><span>Aan tafel</span></a>
        </div>
        <nav class="nav-links">
            <a href="index.php">Recepten</a>
            <a href="recipe_toevoegen.php">Recept toevoegen</a>
            <a href="inlog.php" class="btn-login">Log in</a>
        </nav>
    </header>

    <main class="main-container">
        <section class="view">
            <div class="auth-card">
                <span class="subtitle">SCHUIF GEZELLIG AAN</span>
                <h1>Maak een account</h1>
                <p class="desc">Een account voor al jouw favoriete recepten.</p>
                
                <form action="signup_verwerk.php" method="POST">
                    <div class="form-group">
                        <label for="signup-username">Naam</label>
                        <input type="text" id="signup-username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="signup-email">E-mailadres</label>
                        <input type="email" id="signup-email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="signup-password">Wachtwoord</label>
                        <input type="password" id="signup-password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="signup-repeat-password">Herhaal wachtwoord</label>
                        <input type="password" id="signup-repeat-password" name="repeat_password" required>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        Account aanmaken <span>→</span>
                    </button>
                </form>

                <div class="auth-switch">
                    Al een account? <a href="inlog.php">Log in</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
