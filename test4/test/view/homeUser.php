<?php

ob_start();

?>
<style>
    #booking:hover {
        box-shadow: 20px 20px 15px rgba(255, 204, 0, 1);
    }

    #booking button:hover {
        background-color: #ffcc00;
    }


    .custom-card {
        background-color: #f2f2f2; /* Light grey background */
        border: 1px solid #ddd; /* Border color */
        border-radius: 0; /* Remove border-radius for sharp edges */
        padding: 15px; /* Add padding for spacing inside the card */
        margin-bottom: 20px; /* Add margin for spacing between cards */
    }

    .custom-card img {
        max-width: 100%; /* Make sure images within the card are responsive */
        border-radius: 4px; /* Add border-radius for images if necessary */
    }
   
 
  .group:hover {
    box-shadow: 50px 50px 20px rgba(255, 255, 0, 0.7);
    transition: box-shadow 0.3s ease-in-out;
  }

</style>
<div id="lkjlh">
   

    <div class="container mt-5">
    <form action="index.php?action=search" method="post" id="booking" class="ajax-search-form rounded-5 p-4 border border-black" style="background-color: #fff; box-shadow: 0 0 15px rgba(255, 204, 0, 0.8); transition: box-shadow 0.3s;">

        <div class="row g-3 align-items-center">
            <div class="col-md-3">
                <div class="form-outline" data-mdb-input-init>
                    <label for="validationCustom02" class="form-label">Departure city</label>
                    <select name="vDepart" class="form-control" data-mdb-select-init data-mdb-filter="true">
    <?php foreach ($villesDATA as $ville) { ?>
        <option value="<?= $ville->getIdVille(); ?>" <?= (isset($_POST["vDepart"]) && $ville->getIdVille() == $_POST["vDepart"]) ? 'selected' : ''; ?>>
            <?php echo $ville->getVille_name(); ?>
        </option>
    <?php } ?>
</select>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-outline" data-mdb-input-init>
                    <label for="validationCustom02" class="form-label">Destination city</label>
                    <select name="vArrivee" class="form-control" data-mdb-select-init data-mdb-filter="true">
    <?php foreach ($villesDATA as $ville) { ?>
        <option value="<?= $ville->getIdVille(); ?>" <?= (isset($_POST["vArrivee"]) && $ville->getIdVille() == $_POST["vArrivee"]) ? 'selected' : ''; ?>>
            <?php echo $ville->getVille_name(); ?>
        </option>
    <?php } ?>
</select>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-outline" data-mdb-input-init>
                    <label for="Date" class="form-label">Date</label>
                    <input name="date" type="date" class="form-control" id="validationCustom01" value="<?= $_POST["date"] ?? ''; ?>" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-outline" data-mdb-input-init>
                    <label for="validationNumCustom" class="form-label">Number Of Passengers</label>
                    <input name="NumCustom" type="number" class="form-control" id="validationCustom02" value="<?= $_POST["NumCustom"] ?? 1; ?>" required>
                </div>
            </div>

            <div class="col-md-3 mt-3">
                <button type="submit" class="btn btn-outline-light btn-rounded" data-mdb-ripple-init data-mdb-ripple-color="dark">Search</button>
            </div>
        </div>
    </form>
</div>

    <div id="searchResults" class="mt-6">

        <?php if (isset($horaireDATA) && !empty($horaireDATA)) : ?>
        <div class="container d-flex ">
            <div id="filtres" class=" mr-12 d-flex flex-column p-3 border rounded-3 col-3 side-bar">
                <div>
                    <p class="h5">Société</p>
                    <ul class="d-flex flex-column" id="company_filter" name="company_filter">
                        <?php foreach ($entreprisesDATA as $key => $comName) { ?>
                        <li class="mt-3">
                            <input type="checkbox" class="form-check-input company-name"
                                value="<?= $comName->getIdEntreprise(); ?>" id="<?= "company-" . ($key + 1) ?>">
                            <label class="form-check-label"
                                for="<?= "company-" . ($key + 1) ?>"><?= $comName->getName(); ?></label>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="mt-5">
                    <p class="h5">Prix par personne</p>
                    <label for="minPrice">Prix minimum:</label>
                    <input type="number" name="minPrice" id="minPrice" />

                    <label for="maxPrice">Prix maximum:</label>
                    <input type="number" name="maxPrice" id="maxPrice" />
                </div>
                <div class="mt-5">
                    <p class="h5">Heure de départ</p>
                    <ul class="d-flex flex-column" id="time_filter" name="time_filter">
                        <li class="mt-3">
                            <input type="checkbox" class="form-check-input time" value="matin" name="" id="matin">
                            <label class="form-check-label" for="matin">Matin (0h - 12h)</label>
                        </li>
                        <li class="mt-3">
                            <input type="checkbox" class="form-check-input time" value="midi" name="" id="midi">
                            <label class="form-check-label" for="midi">Après-midi (12h - 17h)</label>
                        </li>
                        <li class="mt-3">
                            <input type="checkbox" class="form-check-input time" value="soir" name="" id="soir">
                            <label class="form-check-label" for="soir">Soir (17h - 0h)</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="bus_disponibles" class="w-70 mx-auto">
                <?php foreach ($horaireDATA as $Horaire) : ?>
                <div
               class="group mt-4 relative overflow-hidden bg-white rounded-3xl p-4 shadow border-2 hasLabelQualite yellow-hover-shadow">

                    <div class="grid grid-cols-4 gap-6">
                        <div class="col-span-3 border-dashed ltr:border-r-2 rtl:border-l-2 ltr:pr-4 rtl:pl-4">
                            <div
                                class="flex justify-between items-center rounded-full py-1 ltr:pr-1 rtl:pr-4 ltr:pl-4 rtl:pl-1 bg-gold-500 text-black">
                                <div class="flex items-center"><span
                                        class="text-primary transition-opacity duration-200 opacity-0 group-hover:opacity-100 text-xs">●
                                    </span>
                                    <div
                                        class="flex items-center gap-8 ltr:-translate-x-2 rtl:translate-x-2 ltr:group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition duration-100 ease-in-out">
                                        <p class="text-sm font-427"><?php echo $Horaire->getCompanyName(); ?>
                                        </p>
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 items-center gap-10 mt-6"><img
                                    data-src="assets/imgs/<?php echo $Horaire->getCompanyImage(); ?>" alt=""
                                    class="group-hover:grayscale-0 grayscale ls-is-cached lazyloaded"
                                    src="assets/imgs/<?php echo $Horaire->getCompanyImage(); ?>">
                                <div class="col-span-2">
                                    <div class="flex justify-center items-baseline col-span-2 text-black">
                                        <div x-data="{ tooltipDepartAdress: false }" class="flex flex-col items-center">
                                            <p class="text-4xl text-center relative">
                                                <?php echo $Horaire->getHeureDepart(); ?>
                                            </p>
                                            <div x-on:mouseover="tooltipDepartAdress = true"
                                                x-on:mouseleave="tooltipDepartAdress = false"
                                                class="text-xs font-medium uppercase flex cursor-help flex items-center">
                                               
                                                   
                                                &nbsp;<?php echo $Horaire->getVilleDepart(); ?>
                                                <div x-show.transition.origin.top="tooltipDepartAdress"
                                                    class="relative -top-4 rtl:left-36 ltr:left-0"
                                                    style="display: none;">
                                                    <div
                                                        class="normal-case	 absolute top-0 z-10 w-52 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-primary rounded-lg shadow-lg">
                                                        Pres de la STCR; Boulevard Abderrahim Bouabid; Al Hamra, Agadir
                                                        80000
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp; TO &nbsp;&nbsp;
                                        <div x-data="{ tooltipArriveeAdress: false }"
                                            class="flex flex-col items-center">
                                            <p class="text-4xl text-center relative">
                                                <?php echo $Horaire->getHeureArrivee(); ?>
                                                <!---->
                                            </p>
                                            <div x-on:mouseover="tooltipArriveeAdress = true"
                                                x-on:mouseleave="tooltipArriveeAdress = false"
                                                class="text-xs font-medium uppercase flex cursor-help flex items-center">
                                               
                                                &nbsp;<?php echo $Horaire->getVilleArrivee(); ?>
                                                <div x-show.transition.origin.top="tooltipArriveeAdress"
                                                    class="relative -top-4 rtl:left-36 ltr:left-0"
                                                    style="display: none;">
                                                    <div
                                                        class="normal-case	 absolute top-0 z-10 w-52 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-primary rounded-lg shadow-lg">
                                                        Agence Globus Trans &amp; Itrane Voyage; Hay Chiffa, devant la
                                                        station
                                                        tramway Derb Milan, Boulvard El Fida, Casablanca

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-around items-center mt-6 text-black">
                                        <div class="flex flex-wrap gap-2 justify-center w-3/5">
                                            <p
                                                class="flex items-center border border-gray-800 rounded-3xl px-1.5 py-0.5 mr-1 text-xs">
                                               
                                                &nbsp;<?php echo $Horaire->getDuree(); ?>h
                                            </p>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between">
                            <div class="relative">
                                <!---->
                                <div class="flex items-center">
                                    <p class="text-yellow-400 font-427 text-3xl before:content-empty before:border-t-3 before:border-solid before:border-promo before:-rotate-12 before:h-1 before:block before:relative before:top-5"
                                        style="display: none;"><?= $Horaire->getPrice() ?></p>
                                    <span style="display: none;"> &nbsp;&nbsp;</span>
                                    <p class="font-427 text-4xl items-start flex text-black"><?= $Horaire->getPrice() ?>
                                        <span class="text-lg font-normal">&nbsp;DH</span>
                                    </p>
                                </div>
                                <p class="-mt-1 italic text-sm">per personne</p>
                            </div>

                        </div>
                    </div>
                    <!---->
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php else : ?>
        <p class="text-gray-600">Aucun résultat trouvé pour la recherche.</p>
        <?php endif; ?>
    </div>
    <?php
  $content = ob_get_clean();
  include_once 'layout.php';
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$('#minPrice, #maxPrice, .company-name, #soir, #midi, #matin').change(function () {
    var minPrice = $('#minPrice').val();
    var maxPrice = $('#maxPrice').val();

    var selectedCompanies = [];
    $('.company-name:checked').each(function () {
        selectedCompanies.push($(this).val());
    });

    var selectedTimes = [];
    $('.time:checked').each(function () {
        selectedTimes.push($(this).val());
    });

    updateResults(minPrice, maxPrice, selectedCompanies, selectedTimes);
});

function updateResults(minPrice, maxPrice, selectedCompanies, selectedTimes) {
    $.ajax({
        type: 'POST',
        url: 'index.php?action=filtre',
        data: {
            minPrice: minPrice,
            maxPrice: maxPrice,
            selectedCompanies: selectedCompanies,
            selectedTimes: selectedTimes, // Ajout de cette ligne
            vDepart: $('#vDepart').val(),
            vArrivee: $('#vArrivee').val(),
            date: $('#date').val(),
            NumCustom: $('#NumCustom').val(),
            ajax_request: true
        },
        success: function (response) {
            $('#bus_disponibles').html(response);
        },
        error: function (error) {
            console.error('Erreur AJAX: ', error);
        }
    });
}

</script>





