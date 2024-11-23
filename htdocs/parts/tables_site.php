<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="tables-site"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Tables
        <i class="fa-solid fa-table f-right"></i>
    </h2>
</div>
<section class="p-s">

    <div class="bkgd-orange t-bold t-center w-full r-l border p-xs mt-xxs mb-m">
        ⚠️ These styles require a special workaround to work properly ⚠️
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-xxs">Stylish table</h3>
    <div class="px-s">
        <p class="mb-xxs">
            Tables can quickly be styled by simply using the <span class="code">.table-stylish</span> class.
        </p>
        <p class="mb-xs">
            However, due to browsers inability to stay consistent, they cannot be rounded as easily as other elements.<br>
            Therefore, the <span class="code">.o-hidden</span> is automatically applied to the table itself.<br>
            A cleaner fix could have been implemented, but it would have decently inflated the stylesheet's size.
        </p>
        <table class="table-stylish table-p-s border r-l">
            <thead>
                <th>Head 1</th>
                <th>Head 2</th>
            </thead>
            <tbody>
            <tr>
                <td>Cell 1.1</td>
                <td>Cell 1.2</td>
            </tr>
            <tr>
                <td>Cell 2.1</td>
                <td>Cell 2.2</td>
            </tr>
            </tbody>
        </table>
        <code class="d-block p-xxs border r-s mt-s">
            table<b>.table-stylish.table-p-s.border.o-hidden</b><br>
            &nbsp;&nbsp;thead>th>td*2<br>
            &nbsp;&nbsp;tbody>tr*2>td*2
        </code>
    </div>

</section>