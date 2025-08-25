<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="text-styles"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Text<i class="fa-solid fa-chevron-right mx-xs"></i>Styles
        <i class="fa-solid fa-italic f-right"></i></h2>
</div>
<section class="p-s">
    <table class="table-stylish r-l border o-hidden table-p-xs table-v-center">
        <thead>
        <th>Style</th>
        <th>Example</th>
        <th>Classes</th>
        <th>Elements</th>
        </thead>
        <tbody>
        <tr>
            <td><p class="t-bold">Italic</p></td>
            <td><p class="t-italic">Italic text</p></td>
            <td><span class="code">.t-italic</span></td>
            <td><span class="code">i</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Oblique</p></td>
            <td><p class="t-oblique">Oblique text</p></td>
            <td><span class="code">.t-oblique</span></td>
            <td><span class="t-muted">N/A</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Underline</p></td>
            <td><p class="t-underline">Underlined text</p></td>
            <td><span class="code">.t-underline</span></td>
            <td><span class="code">u</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Strikethrough</p></td>
            <td><p class="t-strikethrough">Struck text</p></td>
            <td><span class="code">.t-strikethrough</span></td>
            <td><span class="code">s</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Overline</p></td>
            <td><p class="t-overline">Overline text</p></td>
            <td><span class="code">.t-overline</span></td>
            <td><span class="t-muted">N/A</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Monospace</p></td>
            <td><p class="t-monospace">monospace text</p></td>
            <td><span class="code">.t-monospace</span></td>
            <td><span class="t-muted">N/A</span></td>
        </tr>
        </tbody>
    </table>
</section>
