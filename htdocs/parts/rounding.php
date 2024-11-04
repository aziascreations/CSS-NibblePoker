<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="rounding"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Rounding
        <i class="fa-solid fa-bezier-curve f-right"></i></h2>
</div>
<section class="p-s">
    <p>Rounding can be done on a corner/side/global basis using the standard size suffixes and some special ones.</p>
    <p>These examples will have ???.</p>

    <p class="t-bold">Sizes:</p>
    <div class="grid col-4 col-medium-3 col-mobile-2 gap-xs t-center">
        <div class="r-0 p-xs b bkgd-blank-dark debug"><span class="code">r-0</span></div>
        <div class="r-xs p-xs b bkgd-blank-dark debug"><span class="code">r-xs</span></div>
        <div class="r-s p-xs b bkgd-blank-dark debug"><span class="code">r-s</span></div>
        <div class="r-m p-xs b bkgd-blank-dark debug"><span class="code">r-m</span></div>
        <div class="r-l p-xs b bkgd-blank-dark debug"><span class="code">r-l</span></div>
        <div class="r-xl p-xs b bkgd-blank-dark debug"><span class="code">r-xl</span></div>
    </div>

    <p class="t-bold">Special classes:</p>
    <div class="grid col-4 col-medium-3 col-mobile-2 gap-xs t-center">
        <div class="r-r p-xs b bkgd-blank-dark debug"><span class="code">r-r</span></div>
    </div>

    <b>TODO: All a detail of all classes</b>
</section>
