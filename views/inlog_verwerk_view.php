<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen mislukt — Aan tafel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <a href="index.php" class="logo"><span class="logo-mark" aria-hidden="true">✳</span><span>Aan tafel</span></a>
        </div>
    </header>

    <main class="main-container">
        <section class="view">
            <div class="auth-card error-card">
                <span class="subtitle">FOUTMELDING</span>
                <h1>Inlog mislukt</h1>
                <p class="error-message"><?= htmlspecialchars($resultaat) ?></p>
                <a href="inlog.php" class="btn-primary error-action">Opnieuw proberen <span>→</span></a>
            </div>
        </section>
    </main>
</body>
</html>
