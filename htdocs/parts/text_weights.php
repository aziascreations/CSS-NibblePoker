<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="text-weights"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Text<i class="fa-solid fa-chevron-right mx-xs"></i>Weights
        <i class="fa-solid fa-text-height f-right"></i></h2>
</div>
<section class="p-s">
    <table class="table-stylish r-l border o-hidden table-p-xs table-v-center">
        <thead>
        <th>Style</th>
        <th>Example</th>
        <th>Classes</th>
        </thead>
        <tbody>
            <?php
            for($i = 1; $i<=9; $i++) {
                echo('<tr>');
                echo('<td class="t-bold">' . ($i * 100) . '</td>');
                echo('<td class="t-w-' . ($i * 100) . '">Lorem Ipsum donor.</td>');
                echo('<td><span class="code">.t-w-' . ($i * 100) . '</span></td>');
                echo('</tr>');
            }
            ?>
        </tbody>
    </table>

    <table class="table-stylish r-l border o-hidden table-p-xs table-v-center mt-l">
        <thead>
        <th>Style</th>
        <th>Example</th>
        <th>Classes</th>
        </thead>
        <tbody>
        <tr>
            <td><p class="t-bold">Lighter</p></td>
            <td><p class="t-lighter">Lorem Ipsum 123 !</p></td>
            <td><span class="code mr-xs">.t-lighter</span><span class="code">.t-w-lighter</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Normal</p></td>
            <td><p class="t-normal">Lorem Ipsum 123 !</p></td>
            <td><span class="code mr-xs">.t-normal</span><span class="code">.t-w-normal</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Bold</p></td>
            <td><p class="t-bold">Lorem Ipsum 123 !</p></td>
            <td><span class="code mr-xs">.t-bold</span><span class="code">.t-w-bold</span></td>
        </tr>
        <tr>
            <td><p class="t-bold">Bolder</p></td>
            <td><p class="t-bolder">Lorem Ipsum 123 !</p></td>
            <td><span class="code mr-xs">.t-bolder</span><span class="code">.t-w-bolder</span></td>
        </tr>
        </tbody>
    </table>
</section>
