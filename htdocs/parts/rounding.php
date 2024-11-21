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
    <p>
        Rounding can be applied on a global/sided/corner basis using the standard size suffixes and some
        special ones shown below.
    </p>

    <h3 class="t-w-500 t-size-12 my-s">Regular sizes</h3>
    <div class="grid grid-col-4 grid-col-medium-3 grid-col-mobile-2 grid-gap-xs t-center">
        <div class="r-0 p-xs b bkgd-blank-dark debug"><span class="code">.r-0</span></div>
        <div class="r-xs p-xs b bkgd-blank-dark debug"><span class="code">.r-xs</span></div>
        <div class="r-s p-xs b bkgd-blank-dark debug"><span class="code">.r-s</span></div>
        <div class="r-m p-xs b bkgd-blank-dark debug"><span class="code">.r-m</span></div>
        <div class="r-l p-xs b bkgd-blank-dark debug"><span class="code">.r-l</span></div>
        <div class="r-xl p-xs b bkgd-blank-dark debug"><span class="code">.r-xl</span></div>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Special size</h3>
    <div class="grid grid-col-4 grid-col-medium-3 grid-col-mobile-2 grid-gap-xs t-center">
        <div class="r-r p-xs b bkgd-blank-dark debug"><span class="code">.r-r</span></div>
    </div>

    <details class="border bkgd-dark r-m mt-l">
        <summary class="p-xs">Click to show/hide all classes</summary>
        <div class="p-xs bt bkgd-grey">
            <?php
            $roundingSizes = ["0", "xs", "s", "m", "l", "xl", "r"];

            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">r-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">General rounding</span></p>');

            echo('<hr class="subtle my-s">');

            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rt-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Top rounding</span></p>');
            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rb-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Bottom rounding</span></p>');
            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rl-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Left rounding</span></p>');
            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rr-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Right rounding</span></p>');

            echo('<hr class="subtle my-s">');

            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rtl-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Top left rounding</span></p>');
            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rtr-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Top right rounding</span></p>');
            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rbl-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Bottom left rounding</span></p>');
            echo('<p>');
            foreach($roundingSizes as &$spacingSize){echo('<span class="code mr-xs">rbr-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Bottom right rounding</span></p>');

            ?>
        </div>
    </details>
</section>
