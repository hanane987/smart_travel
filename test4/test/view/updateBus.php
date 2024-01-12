<?php
ob_start();
?>

<body class="bg-gray-100">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Bus</h2>
            <form action="index.php?action=updateBusSubmit&id=<?= $bus->getIdBus();?>" method="post">
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bus Id</label>
                    <input type="text" name="busId" id="name" class="input-field" value="<?= $bus->getIdBus(); ?>" placeholder="Bus Id" readonly>
                </div>
                <div class="mb-4">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bus number</label>
                    <input type="text" name="busNum" id="brand" class="input-field" value="<?= $bus->getNumBus(); ?>" placeholder="Num Bus">
                </div>
                <div class="mb-4">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Immatricule</label>
                    <input type="text" name="immat" id="price" class="input-field" value="<?= $bus->getImmat(); ?>" placeholder="Immatricule">
                </div>
                <div class="mb-4">
                    <label for="Entreprise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Companies</label>
                    <select name="company" id="Entreprise" class="input-field">
                        <?php foreach($companies as $comp){?>
                        <option value="<?= $comp->getIdEntreprise(); ?>">
                            <?= $comp->getName(); ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
                    <input type="number" name="capacity" id="capacity" class="input-field" value="<?= $bus->getCapacity(); ?>" placeholder="Capacity">
                </div>
                <div class="flex items-center">
                    <button type="submit" class="yellow-submit-btn">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

<style>
    .input-field {
        /* Add your input field styles here */
        /* Example: */
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .yellow-submit-btn {
        /* Add your submit button styles here */
        /* Example: */
        background-color: yellow;
        color: black;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<?php
$content = ob_get_clean();
include_once 'layout.php';
?>
