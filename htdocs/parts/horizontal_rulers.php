<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="horizontal-rulers"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Horizontal Rulers
        <i class="fa-solid fa-ruler f-right"></i></h2>
</div>
<section class="p-s">
    <p>Generic: <span class="code">hr</span></p>
    <hr>

    <p class="mt-s">Subtle: <span class="code">hr.subtle</span>, <span class="code">hr.hr-subtle</span></p>
    <hr class="subtle">

    <p class="mt-s">Dashed: <span class="code">hr.dashed</span>, <span class="code">hr.hr-dashed</span></p>
    <hr class="dashed">

    <p class="mt-s">Dotted: <span class="code">hr.dotted</span>, <span class="code">hr.hr-dotted</span></p>
    <hr class="dotted">

    <p class="mt-s">Double:
        <span class="code">hr.double</span>, <span class="code">hr.hr-double</span>,
        <span class="code">hr.thick</span>, <span class="code">hr.hr-thick</span>
    </p>
    <hr class="double">

    <p class="mt-s">Outset: <span class="code">hr.outset</span>, <span class="code">hr.hr-outset</span></p>
    <hr class="outset">
    <hr class="subtle outset">

    <p class="mt-s">Cutting indicator: <span class="code">hr.cut-here</span>, <span class="code">hr.hr-cut-here</span></p>
    <hr class="dotted cut-here">
    <hr class="dashed cut-here">

</section>
