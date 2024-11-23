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

    <div class="bkgd-red t-bold t-center w-full r-l border p-xs mt-xxs mb-m">
        ⚠️ These styles will change before the 1.0.0 release ⚠️
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-xxs">Stylish table</h3>
    <div class="px-s">
        <p class="mb-xxs">
            Tables can quickly be styled by simply using the following classes:
        </p>
        <ul class="mb-s list-bullets list-bullet-manual ml-xs">
            <li><span class="code">stylish</span> - Adds colors to cells and makes headers bold</li>
            <li><span class="code">table-p-xs</span> - Adds a <i>xs</i> padding to all cells</li>
            <li><span class="code">table-p-s</span> - Adds an <i>s</i> padding to all cells</li>
            <li><span class="code">table-h-p-s</span> - Adds an <i>s</i> padding to the header cells</li>
        </ul>
        <table class="stylish table-p-s border">
            <tr>
                <th>Head 1</th>
                <th>Head 2</th>
            </tr>
            <tr>
                <td>Cell 1.1</td>
                <td>Cell 1.2</td>
            </tr>
            <tr>
                <td>Cell 2.1</td>
                <td>Cell 2.2</td>
            </tr>
        </table>
        <code class="d-block p-xxs border r-s mt-s">
            table<b>.stylish.table-p-s.border</b><br>
            &nbsp;&nbsp;th>td*2<br>
            &nbsp;&nbsp;tr*2>td*2
        </code>
    </div>
    
</section>