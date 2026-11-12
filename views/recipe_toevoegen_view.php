<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept toevoegen — Aan tafel</title>
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

    <main class="add-recipe-main">
        <section class="recipe-form-layout">
            <div class="add-recipe-heading">
                <span class="subtitle">EEN NIEUW FAVORIET</span>
                <h1>Recept toevoegen</h1>
                <p>Leg je recept vast, zodat je het altijd terugvindt en makkelijk kunt delen.</p>
            </div>

            <div class="form-intro-note">
                <span class="form-step-number" aria-hidden="true">✳</span>
                <p><strong>Van jouw keuken naar de receptenverzameling.</strong><br>Vul de basis in, zet elke bereidingsstap op een nieuwe regel en voeg eventueel een foto toe.</p>
            </div>

            <form class="recipe-entry-card" action="recipe_toevoegen_verwerk.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="onderwerp">Titel</label>
                    <input type="text" id="onderwerp" name="onderwerp" placeholder="Bijvoorbeeld: Romige pompoensoep" required>
                </div>

                <div class="recipe-basics-grid">
                    <div class="form-group">
                        <label for="categorie">Categorie</label>
                        <select id="categorie" name="categorie" required>
                            <option value="" selected disabled>Kies een categorie</option>
                            <option value="ontbijt">Ontbijt</option>
                            <option value="lunch">Lunch</option>
                            <option value="diner">Diner</option>
                            <option value="dessert">Dessert</option>
                            <option value="snack">Snack</option>
                            <option value="overig">Overig</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="bereidingstijd">Bereidingstijd <span class="label-unit">(minuten)</span></label>
                        <div class="input-with-suffix">
                            <input type="number" id="bereidingstijd" name="bereidingstijd" min="1" max="600" placeholder="Bijv. 30">
                            <span>min</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="receptfoto">Eigen receptfoto <span class="optional-label">optioneel</span></label>
                    <div class="photo-upload">
                        <p>JPG, PNG of WebP · maximaal 5 MB</p>
                        <input type="file" id="receptfoto" name="receptfoto" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                    </div>
                </div>

                <fieldset class="ingredient-fieldset">
                    <legend>Ingrediënten</legend>
                    <div class="ingredient-rows" id="ingredient-rows">
                        <div class="ingredient-row">
                            <input type="text" name="ingredienten[naam][]" placeholder="Ingrediënt" aria-label="Ingrediënt">
                            <input type="text" name="ingredienten[hoeveelheid][]" placeholder="Hoeveelheid" aria-label="Hoeveelheid">
                            <input type="text" name="ingredienten[eenheid][]" placeholder="Eenheid (g, ml, stuks)" aria-label="Eenheid">
                            <button class="remove-ingredient" type="button" aria-label="Verwijder ingrediënt" title="Verwijder ingrediënt">×</button>
                        </div>
                    </div>
                    <button class="add-ingredient-btn" id="add-ingredient" type="button"><span aria-hidden="true">+</span> Ingrediënt toevoegen</button>
                </fieldset>

                <div class="form-group instructions-group">
                    <label for="inhoud">Bereidingswijze</label>
                    <textarea id="inhoud" name="inhoud" rows="7" placeholder="Snijd de groenten klein.&#10;Verhit olie in een pan.&#10;Serveer en geniet." required></textarea>
                    <p class="form-helper">Tip: zet elke stap op een eigen regel. Op de receptpagina wordt dit een nette lijst.</p>
                </div>

                <button type="submit" class="btn-primary">
                    Recept opslaan <span>→</span>
                </button>
            </form>

            <div class="auth-switch add-recipe-backlink">
                <a href="index.php">← Terug naar alle recepten</a>
            </div>
        </section>
    </main>
    <template id="ingredient-row-template">
        <div class="ingredient-row">
            <input type="text" name="ingredienten[naam][]" placeholder="Ingrediënt" aria-label="Ingrediënt">
            <input type="text" name="ingredienten[hoeveelheid][]" placeholder="Hoeveelheid" aria-label="Hoeveelheid">
            <input type="text" name="ingredienten[eenheid][]" placeholder="Eenheid (g, ml, stuks)" aria-label="Eenheid">
            <button class="remove-ingredient" type="button" aria-label="Verwijder ingrediënt" title="Verwijder ingrediënt">×</button>
        </div>
    </template>
    <script>
        const ingredientRows = document.getElementById('ingredient-rows');
        const ingredientTemplate = document.getElementById('ingredient-row-template');
        const addIngredientButton = document.getElementById('add-ingredient');

        function updateIngredientButtons() {
            const rows = ingredientRows.querySelectorAll('.ingredient-row');
            rows.forEach((row) => {
                row.querySelector('.remove-ingredient').disabled = rows.length === 1;
            });
        }

        addIngredientButton.addEventListener('click', () => {
            const row = ingredientTemplate.content.firstElementChild.cloneNode(true);
            ingredientRows.appendChild(row);
            row.querySelector('input').focus();
            updateIngredientButtons();
        });

        ingredientRows.addEventListener('click', (event) => {
            const removeButton = event.target.closest('.remove-ingredient');
            if (removeButton && ingredientRows.querySelectorAll('.ingredient-row').length > 1) {
                removeButton.closest('.ingredient-row').remove();
                updateIngredientButtons();
            }
        });

        updateIngredientButtons();
    </script>
</body>
</html>
