<?php
ob_start();
?>

<body class="bg-gray-100">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Horaire</h2>
            <form action="index.php?action=UpdateHoraire&id=<?= $horaireDATA->getIdHoraire() ?>" method="post">
                <div class="grid gap-4 mb-4 sm:grid-cols-1 sm:gap-6 sm:mb-5">
                    <div class="w-full">
                        <label for="BusId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bus ID</label>
                        <select name="idBus" id="BusId" class="form-select">
                            <?php foreach ($busesDATA as $bus) : ?>
                                <option value="<?= $bus->getIdBus(); ?>">
                                    <?= $bus->getImmat(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="RouteId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Route ID</label>
                        <select name="idRout" id="RouteId" class="form-select">
                            <?php foreach ($routeDATA as $route) : ?>
                                <option value="<?= $route->getIdRoute(); ?>">
                                    <?= $route->getIdRoute(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="w-full">
                        <label for="Hdepart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heur depart</label>
                        <input type="time" name="heur_depart" value="<?= $horaireDATA->getHeureDepart() ?>" class="form-input" placeholder="duree" required>
                    </div>
                    <div class="w-full">
                        <label for="Harrivee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heur arrivee</label>
                        <input type="time" name="heur_arrivee" value="<?= $horaireDATA->getHeureArrivee() ?>" class="form-input" placeholder="duree" required>
                    </div>
                    <div class="w-full">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date_" value="<?= $horaireDATA->getDate() ?>" class="form-input" placeholder="duree" required>
                    </div>
                    <div class="w-full">
                        <label for="Sdispo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sieges disponibles</label>
                        <input type="number" name="sieges_dispo" value="<?= $horaireDATA->getSiegesDispo() ?>" class="form-input" placeholder="distance" required>
                    </div>
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
