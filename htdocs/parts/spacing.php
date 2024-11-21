<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="spacing"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Spacing
        <i class="fa-solid fa-ellipsis f-right"></i></h2>
</div>
<section class="p-s">
    <p>
        Paddings and margins can be applied on a side/axis/global basis using the standard size suffixes.<br>
        Additionally, the <span class="code">xxs</span> size is also available for those rare tiny spacing needs.
    </p>

    <p class="mt-s">
        The examples below have a bordered &amp; padded container, and a regular bordered sub-container.<br>
        Using margins would have the same effect, if you ignore margin folding.
    </p>

    <div class="grid grid-col-3 grid-col-medium-2 grid-col-mobile-1 grid-gap-xs mt-s t-center">
        <div><div class="debug p-xxs"><div class="debug"><p><span class="code">.p-xxs</span></p></div></div></div>
        <div><div class="debug p-xs"><div class="debug"><p><span class="code">.p-xs</span></p></div></div></div>
        <div><div class="debug p-s"><div class="debug"><p><span class="code">.p-s</span></p></div></div></div>
        <div><div class="debug p-m"><div class="debug"><p><span class="code">.p-m</span></p></div></div></div>
        <div><div class="debug p-l"><div class="debug"><p><span class="code">.p-l</span> </p></div></div></div>
        <div><div class="debug p-xl"><div class="debug"><p><span class="code">.p-xl</span></p></div></div></div>
    </div>

    <details class="border bkgd-dark r-m mt-s">
        <summary class="p-xs">Click to show/hide all classes</summary>
        <div class="p-xs bt bkgd-grey">
            <?php
            $spacingSizes = ["0", "xxs", "xs", "s", "m", "l", "xl"];

            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">p-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">General padding</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">m-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">General margin</span></p>');

            echo('<hr class="subtle my-s">');

            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">px-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Horizontal padding</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">py-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Vertical padding</span></p>');

            echo('<p class="mt-xs">');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">mx-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Horizontal margin</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">my-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Vertical margin</span></p>');

            echo('<hr class="subtle my-s">');

            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">pt-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Top padding</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">pb-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Bottom padding</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">pl-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Left padding</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">pr-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Right padding</span></p>');

            echo('<p class="mt-xs">');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">mt-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Top margin</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">mb-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Bottom margin</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">ml-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Left margin</span></p>');
            echo('<p>');
            foreach($spacingSizes as &$spacingSize){echo('<span class="code mr-xs">mr-'.$spacingSize.'</span>');}
            echo('<span class="t-super-muted">Right margin</span></p>');
            ?>
        </div>
    </details>
</section>
