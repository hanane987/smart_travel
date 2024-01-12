<?php ob_start(); ?>

<body class="bg-gray-100">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Horaire</h2>
            <form action="index.php?action=addHoraire" method="post">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="mb-4">
                        <label for="BusId" class="block text-sm font-medium text-gray-900 dark:text-white">Bus ID</label>
                        <input name="idBus" id="BusId" class="form-select">
                            
                        </input>
                    </div>
                    <div class="mb-4">
                        <label for="RouteId" class="block text-sm font-medium text-gray-900 dark:text-white">Route ID</label>
                        <input name="idRout" id="RouteId" class="form-select">
                            
                        </inp>
                    </div>
                    <div class="mb-4">
                        <label for="Hdepart" class="block text-sm font-medium text-gray-900 dark:text-white">Heur depart </label>
                        <input type="time" name="heur_depart" id="Hdepart" class="form-input" placeholder="Departure Time" required>
                    </div>
                    <div class="mb-4">
                        <label for="Harrivee" class="block text-sm font-medium text-gray-900 dark:text-white">Heur arrivee</label>
                        <input type="time" name="heur_arrivee" id="Harrivee" class="form-input" placeholder="Arrival Time" required>
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date_" id="date" class="form-input" placeholder="Date" required>
                    </div>
                    <div class="mb-4">
                        <label for="Sdispo" class="block text-sm font-medium text-gray-900 dark:text-white">Sieges disponibles</label>
                        <input type="number" name="sieges_dispo" id="Sdispo" class="form-input" placeholder="Available Seats" required>
                    </div>
                    
                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-yellow-500 text-blue-900 py-2 px-4 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring focus:border-yellow-300">Submit</button>
                    </div>
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
