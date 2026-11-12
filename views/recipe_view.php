<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta met groene pesto — Aan tafel</title>
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
                <a href="loguit.php" class="btn-login btn-logout">Uitloggen</a>
            <?php else: ?>
                <a href="inlog.php" class="btn-login">Log in</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="main-container">
        <section class="view-recipe">
            <div class="recipe-container">
                <div class="recipe-header-nav">
                    <a href="index.php" class="back-link">← Alle recepten</a>
                </div>
                
                <div class="recipe-top-grid">
                    <div class="recipe-title-area">
                        <span class="category-tag">RECEPTEN / PASTA</span>
                        <h2>Pasta met groene pesto</h2>
                        <p class="recipe-intro">Een frisse klassieker met basilicum, geroosterde pijnboompitten en een flinke hand Parmezaan.</p>
                        <div class="recipe-stats" aria-label="Receptinformatie">
                            <span>⏱ 25 minuten</span>
                            <span>🌿 Vegetarisch</span>
                            <span>Voor 4 personen</span>
                        </div>
                    </div>
                    <div class="recipe-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1473093226795-af9932fe5856?auto=format&fit=crop&w=800&q=80" alt="Pasta met groene pesto">
                    </div>
                </div>

                <div class="recipe-content-grid">
                    <div class="ingredients-box">
                        <h3>Ingrediënten</h3>
                        <ul>
                            <li>400g spaghetti of penne</li>
                            <li>1 pot groene pesto (basilicum)</li>
                            <li>50g pijnboompitten</li>
                            <li>100g cherrytomaatjes</li>
                            <li>Parmezaanse kaas</li>
                            <li>Verse basilicumblaadjes</li>
                            <li>Olijfolie, peper en zout</li>
                        </ul>
                    </div>

                    <div class="instructions-box">
                        <h3>bereiding</h3>
                        <ol>
                            <li>Kook de pasta al dente in een grote pan met kokend water en zout volgens de aanwijzingen op de verpakking.</li>
                            <li>Rooster ondertussen de pijnboompitten in een droge koekenpan op een vuur tot ze goudbruin en geurig zijn.</li>
                            <li>Giet de pasta af, maar bewaar een klein kopje van het kookvocht.</li>
                            <li>Meng de groene pesto en een scheutje kookvocht door de warme pasta zodat het mooi romig bindt.</li>
                            <li>Halveer de cherrytomaatjes en roer deze samen met de geroosterde pijnboompitten door het gerecht.</li>
                            <li>Garneer met verse basilicum en geraspte Parmezaanse kaas. Direct serveren!</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
