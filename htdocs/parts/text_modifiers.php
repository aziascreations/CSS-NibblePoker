<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="text-modifiers"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Text<i class="fa-solid fa-chevron-right mx-xs"></i>Modifiers
        <i class="fa-solid fa-subscript f-right"></i></h2>
</div>
<section class="p-s">
    <table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center">
        <thead>
        <th>Style</th>
        <th>Original</th>
        <th>Transformed</th>
        <th>Classes</th>
        </thead>
        <tbody>
        <tr>
            <td><p class="t-bold">Uppercase</p></td>
            <td><p>Regular Case</p></td>
            <td><p class="t-ucase">Regular Case</p></td>
            <td><span class="code">t-ucase</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Lowercase</p></td>
            <td><p>Regular Case</p></td>
            <td><p class="t-lcase">Regular Case</p></td>
            <td><span class="code">t-lcase</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Capitalize</p></td>
            <td><p>no case</p></td>
            <td><span class="t-capitalize">no case</span></td>
            <td><span class="code">t-capitalize</span></td>
        </tr>
        </tbody>
    </table>
</section>