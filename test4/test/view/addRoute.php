<?php
ob_start();
?>

<body class="bg-gray-100">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Route</h2>
            <form action="index.php?action=addRoute" method="post">
                <div class="mb-4">
                    <label for="ville_departID" class="block text-sm font-medium text-gray-900 dark:text-white">Ville depart ID</label>
                    <select name="ville_departID" id="ville_departID" class="form-select">
                        <?php foreach ($villesDATA as $ville) : ?>
                            <option value="<?= $ville->getIdVille(); ?>">
                                <?= $ville->getVille_name(); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="ville_arriveeID" class="block text-sm font-medium text-gray-900 dark:text-white">Ville arrivee ID</label>
                    <select name="ville_arriveeID" id="ville_arriveeID" class="form-select">
                        <?php foreach ($villesDATA as $ville) : ?>
                            <option value="<?= $ville->getIdVille(); ?>">
                                <?= $ville->getVille_name(); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="duree" class="block text-sm font-medium text-gray-900 dark:text-white">Duree</label>
                    <input type="time" name="duree" id="duree" class="form-input" placeholder="Duree" required>
                </div>

                <div class="mb-4">
                    <label for="distance" class="block text-sm font-medium text-gray-900 dark:text-white">Distance</label>
                    <input type="text" name="distance" id="distance" class="form-input" placeholder="Distance" required>
                </div>

                <div class="flex items-center space-x-4">
                    <button type="submit" class="bg-yellow-500 text-blue-900 py-2 px-4 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring focus:border-yellow-300">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

<?php
$content = ob_get_clean();
include_once 'layout.php';
?>
