<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="backgrounds"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Backgrounds
        <i class="fa-solid fa-paint-roller f-right"></i>
        </h2>
</div>
<section class="p-s">

    <h3 class="t-w-500 t-size-12 mb-xs mt-xxs">Simple colors</h3>
    <div class="grid col-3 grid-gap-l px-s">
        <div>
            <div class="p-l border r-xl bkgd-dark my-xs"></div>
            <span class="code mb-s">.bkgd-dark</span>
        </div>
        <div>
            <div class="p-l border r-xl bkgd-grey my-xs"></div>
            <span class="code mb-s">.bkgd-grey</span>
            <span class="code mb-s">.bkgd-gray</span>
        </div>
        <div>
            <div class="p-l border r-xl bkgd-light my-xs"></div>
            <span class="code mb-s">.bkgd-light</span>
        </div>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Grid backgrounds</h3>
    <div class="grid col-2 grid-gap-l px-s">
        <div>
            <p class="t-w-500">40% opacity (Title bars)</p>
            <div class="p-l border r-xl bkgd-grid40 my-xs"></div>
            <span class="code">.bkgd-grid40</span>
            <span class="code">.bkgd-grid</span>
        </div>
        <div>
            <p class="t-w-500">30% opacity (Unused)</p>
            <div class="p-l border r-xl bkgd-grid30 my-xs"></div>
            <span class="code">.bkgd-grid30</span>
        </div>
        <div>
            <p class="t-w-500">20% opacity (Unused)</p>
            <div class="p-l border r-xl bkgd-grid20 my-xs"></div>
            <span class="code">.bkgd-grid20</span>
        </div>
        <div>
            <p class="t-w-500">10% opacity (Surroundings)</p>
            <div class="p-l border r-xl bkgd-grid10 my-xs"></div>
            <span class="code">.bkgd-grid10</span>
            <span class="code">.bkgd-surround</span>
        </div>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Other backgrounds</h3>
    <div class="grid col-3 grid-gap-l px-s">
        <div>
            <p class="t-w-500">Transparent</p>
            <div class="p-l border r-xl bkgd-transparent my-xs"></div>
            <span class="code">.bkgd-transparent</span>
        </div>
    </div>
</section>
