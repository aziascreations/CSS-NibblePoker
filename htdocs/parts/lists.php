<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="lists"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Lists
        <i class="fa-solid fa-list f-right"></i></h2>
</div>
<section class="p-s">
    <p>???.</p>

    <div class="debug">
        <ul>
            <li>Line 1</li>
            <li>Line 2<br>Line 2 continued</li>
            <li>Line 3</li>
        </ul>
    </div>

    <b>TODO: All a detail of all classes</b>
</section>
