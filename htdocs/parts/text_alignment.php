<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="text-alignment"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Text<i class="fa-solid fa-chevron-right mx-xs"></i>Alignment
        <i class="fa-solid fa-text-width f-right"></i></h2>
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
            <td><p class="t-bold">Left</p></td>
            <td><p class="t-left text-direction-target">Left</p></td>
            <td><span class="code">.t-left</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Center</p></td>
            <td><p class="t-center text-direction-target">Centered</p></td>
            <td><span class="code">.t-center</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Right</p></td>
            <td><p class="t-right text-direction-target">Right</p></td>
            <td><span class="code">.t-right</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Start</p></td>
            <td><p class="t-start text-direction-target">Start</p></td>
            <td><span class="code">.t-start</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">End</p></td>
            <td><p class="t-end text-direction-target">End</p></td>
            <td><span class="code">.t-end</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Justify</p></td>
            <td><p class="t-justify">Lorem ipsum.<br>Donor si amet elit.</p></td>
            <td><span class="code">.t-justify</span></td>
        </tr>
        </tbody>
    </table>

    <button class="p-xs r-s border primary mt-s text-direction-switch">Switch text direction</button>
</section>
