
<div id="bus_disponibles" class="w-70 mx-auto">
    <?php foreach ($horaireDATA as $Horaire) : ?>
    <div
        class="group mt-4 relative overflow-hidden bg-white rounded-3xl p-4 shadow border-2 hasLabelQualite">
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
                            &nbsp;&nbsp;&nbsp;&nbsp;
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
                        <p class="text-gray-400 font-427 text-3xl before:content-empty before:border-t-3 before:border-solid before:border-promo before:-rotate-12 before:h-1 before:block before:relative before:top-5"
                            style="display: none;"><?= $Horaire->getPrice() ?></p>
                        <span style="display: none;"> &nbsp;&nbsp;</span>
                        <p class="font-427 text-4xl items-start flex text-black"><?= $Horaire->getPrice() ?>
                            <span class="text-lg font-normal">&nbsp;DH</span>
                        </p>
                    </div>
                    <p class="-mt-1 italic text-sm">par personne</p>
                </div>

            </div>
        </div>
        <!---->
    </div>
    <?php endforeach; ?>
</div>
