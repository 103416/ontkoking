<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aan tafel — recepten om te delen</title>
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
            <?php if (isset($_SESSION['username'])): ?>
                <a href="loguit.php" class="btn-login btn-logout">Uitloggen (<?= htmlspecialchars($_SESSION['username']) ?>)</a>
            <?php else: ?>
                <a href="inlog.php" class="btn-login">Log in</a>
                <a href="signup.php">Account maken</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="main-home-container">
        <!-- Hero Banner Section -->
        <section class="hero-section">
            <div class="hero-content">
                <span class="subtitle">VAN JOUW KEUKEN NAAR IEDEREEN</span>
                <h1>Goed eten.<br>Mooi om te delen.</h1>
                <p class="hero-description">Verzamel recepten waar je blij van wordt, ontdek nieuwe favorieten en schuif gezellig aan.</p>
                <div class="hero-actions">
                    <a href="#recepten-grid" class="btn-primary-green">Ontdek de recepten →</a>
                    <div class="search-pill">
                        <input type="text" placeholder="Zoek naar gerecht of ingrediënt">
                        <button type="button">Zoeken →</button>
                    </div>
                </div>
            </div>
            <div class="hero-image-card">
                <img src="https://images.unsplash.com/photo-1473093226795-af9932fe5856?auto=format&fit=crop&w=800&q=80" alt="Hero Recept">
            </div>
        </section>

        <!-- Recepten Grid Section -->
        <section id="recepten-grid" class="recipes-section">
            <div class="recipes-header">
                <div>
                    <h2>Recepten</h2>
                    <p class="desc">Een nieuw favoriet gerecht begint hier.</p>
                </div>
                <div class="grid-search-pill">
                    <input type="text" placeholder="Zoek in recepten">
                    <span>→</span>
                </div>
            </div>

            <div class="recipes-grid">
                <!-- Recept Card 1 (Pasta) -->
                <a href="recipe.php" class="recipe-card-item">
                    <div class="recipe-thumb">
                        <img src="https://images.unsplash.com/photo-1473093226795-af9932fe5856?auto=format&fit=crop&w=600&q=80" alt="Pasta">
                    </div>
                    <div class="recipe-card-copy">
                        <span class="recipe-card-category">DEZE WEEK FAVORIET</span>
                        <h3>Pasta met groene pesto</h3>
                        <span class="recipe-card-meta">Vegetarisch · 25 minuten</span>
                    </div>
                </a>

                <div class="recipe-card-item placeholder-card">
                    <div class="placeholder-content">
                        <span class="placeholder-icon" aria-hidden="true">✳</span>
                        <span class="recipe-card-category">JOUW COLLECTIE</span>
                        <h3>Jouw volgende favoriet</h3>
                        <p>Bewaar recepten die je wilt maken en deel je eigen succesgerechten.</p>
                    </div>
                </div>

                <a href="recipe_toevoegen.php" class="recipe-card-item add-card">
                    <div class="plus-sign">+</div>
                    <span class="add-card-label">Recept toevoegen</span>
                    <span class="add-card-hint">Deel iets lekkers</span>
                </a>
            </div>
        </section>
    </main>
</body>
</html>
