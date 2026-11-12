<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in — Aan tafel</title>
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
                <span class="subtitle">WELKOM TERUG</span>
                <h1>Log in</h1>
                <p class="desc">Log in om jouw recept te delen.</p>
                
                <form action="inlog_verwerk.php" method="POST">
                    <div class="form-group">
                        <label for="login-username">Naam</label>
                        <input type="text" id="login-username" name="username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="login-password">Wachtwoord</label>
                        <input type="password" id="login-password" name="password" required>
                        <a href="#" class="forgot-link">Wachtwoord vergeten?</a>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        Log in <span>→</span>
                    </button>
                </form>

                <div class="auth-switch">
                    Nog geen account? <a href="signup.php">Maak er één aan</a>
                </div>
                <div class="form-note">
                    Klik op Log in om de voorbeeldflow te bekijken.
                </div>
            </div>
        </section>
    </main>
</body>
</html>
