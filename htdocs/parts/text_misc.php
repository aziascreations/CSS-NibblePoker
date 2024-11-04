<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="text-misc"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Text<i class="fa-solid fa-chevron-right mx-xs"></i>Miscellaneous
        <i class="fa-solid fa-ellipsis f-right"></i></h2>
</div>
<section class="p-s">
    <table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center">
        <thead>
        <th>Style</th>
        <th>Example</th>
        <th>Classes</th>
        </thead>
        <tbody>
        <tr>
            <td><p class="t-bold">No wrap</p></td>
            <td><p class="t-nowrap">Cannot really be shown</p></td>
            <td><span class="code">t-nowrap</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Half muted</p></td>
            <td><p class="t-half-muted">Half muted</p></td>
            <td><span class="code">t-half-muted</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Muted</p></td>
            <td><p class="t-muted">Muted text</p></td>
            <td><span class="code">t-muted</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Super muted</p></td>
            <td><p class="t-super-muted">Super Muted</p></td>
            <td><span class="code">t-super-muted</span></td>
        </tr>
        </tbody>
    </table>
</section>
