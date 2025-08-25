<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="tables-core"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Tables
        <i class="fa-solid fa-table f-right"></i>
    </h2>
</div>
<section class="p-s">

    <div class="bkgd-blue t-w-400 t-center w-full r-l border p-xs mt-xxs mb-m">
        ℹ️ Check the <a href="#tables-site">Examples &gt; Tables</a> section for styled examples.
    </div>

    <h3 class="t-w-500 t-size-12 my-xs mt-xxs">Default table</h3>
    <div class="px-s">
        <p class="mb-s">
            Tables have no border, cell gap and other form of styling by default.<br>
            The cell's content are just aligned in the top of the cell.
        </p>
        <table>
            <tr>
                <td class="debug">Cell 1.1</td>
                <td class="debug">Cell 1.2</td>
                <td class="debug">Cell 1.3</td>
            </tr>
            <tr>
                <td class="debug">Cell 2.1</td>
                <td class="debug">Cell 2.2</td>
                <td class="debug" rowspan="2">Cell 2.3</td>
            </tr>
            <tr>
                <td class="debug" colspan="2">Cell 3.1</td>
            </tr>
        </table>
    </div>

    <h3 class="t-w-500 t-size-12 my-xs mt-l">Cell content alignment</h3>
    <div class="p-xs">
        <p class="mb-s">
            The content of a table's cells can be uniformly changed via the
            <span class="code">.table-v-center</span> and <span class="code">.table-v-bottom</span> classes.
        </p>
        <div class="grid grid-col-3 grid-gap-s">
            <div>
                <p>Top (Default)</p>
                <table class="table-p-xs">
                    <tr>
                        <td class="debug">1.1</td>
                        <td class="debug" rowspan="2">1.2</td>
                    </tr>
                    <tr>
                        <td class="debug">2.1</td>
                    </tr>
                </table>
            </div>
            <div>
                <p>Middle</p>
                <table class="table-p-xs table-v-center">
                    <tr>
                        <td class="debug">1.1</td>
                        <td class="debug" rowspan="2">1.2</td>
                    </tr>
                    <tr>
                        <td class="debug">2.1</td>
                    </tr>
                </table>
            </div>
            <div>
                <p>End</p>
                <table class="table-p-xs table-v-bottom">
                    <tr>
                        <td class="debug">1.1</td>
                        <td class="debug" rowspan="2">1.2</td>
                    </tr>
                    <tr>
                        <td class="debug">2.1</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <h3 class="t-w-500 t-size-12 my-xs mt-l">Cell padding</h3>
    <p class="mb-s">
        All of a given table's cells can be padded uniformly by using the
        <span class="code">.table-p-X</span> class where <span class="code">X</span>
        can be replaced by any of the standard sizes.<br>
        Usable sizes:
        <span class="code">xxs</span>, <span class="code">xs</span>,
        <span class="code">s</span>, <span class="code">m</span>,
        <span class="code">l</span>, <span class="code">xl</span>
    </p>
    <div class="p-xs">
        <div class="grid grid-col-3 grid-col-medium-2 grid-gap-s">
            <div>
                <table class="table-p-xxs mb-s">
                    <tr>
                        <td class="debug"><div class="debug">Cell 1.1</div></td>
                        <td class="debug"><div class="debug">Cell 1.2</div></td>
                    </tr>
                    <tr>
                        <td class="debug"><div class="debug">Cell 2.1</div></td>
                        <td class="debug"><div class="debug">Cell 2.2</div></td>
                    </tr>
                </table>
                <span class="code">.table-p-xxs</span>
            </div>
            <div>
                <table class="table-p-xs mb-s">
                    <tr>
                        <td class="debug"><div class="debug">Cell 1.1</div></td>
                        <td class="debug"><div class="debug">Cell 1.2</div></td>
                    </tr>
                    <tr>
                        <td class="debug"><div class="debug">Cell 2.1</div></td>
                        <td class="debug"><div class="debug">Cell 2.2</div></td>
                    </tr>
                </table>
                <span class="code">.table-p-xs</span>
            </div>
            <div>
                <table class="table-p-s mb-s">
                    <tr>
                        <td class="debug"><div class="debug">Cell 1.1</div></td>
                        <td class="debug"><div class="debug">Cell 1.2</div></td>
                    </tr>
                    <tr>
                        <td class="debug"><div class="debug">Cell 2.1</div></td>
                        <td class="debug"><div class="debug">Cell 2.2</div></td>
                    </tr>
                </table>
                <span class="code">.table-p-s</span>
            </div>
            <div>
                <table class="table-p-m mb-s">
                    <tr>
                        <td class="debug"><div class="debug">Cell 1.1</div></td>
                        <td class="debug"><div class="debug">Cell 1.2</div></td>
                    </tr>
                    <tr>
                        <td class="debug"><div class="debug">Cell 2.1</div></td>
                        <td class="debug"><div class="debug">Cell 2.2</div></td>
                    </tr>
                </table>
                <span class="code">.table-p-m</span>
            </div>
            <div>
                <table class="table-p-l mb-s">
                    <tr>
                        <td class="debug"><div class="debug">Cell 1.1</div></td>
                        <td class="debug"><div class="debug">Cell 1.2</div></td>
                    </tr>
                    <tr>
                        <td class="debug"><div class="debug">Cell 2.1</div></td>
                        <td class="debug"><div class="debug">Cell 2.2</div></td>
                    </tr>
                </table>
                <span class="code">.table-p-l</span>
            </div>
            <div>
                <table class="table-p-xl mb-s">
                    <tr>
                        <td class="debug"><div class="debug">Cell 1.1</div></td>
                        <td class="debug"><div class="debug">Cell 1.2</div></td>
                    </tr>
                    <tr>
                        <td class="debug"><div class="debug">Cell 2.1</div></td>
                        <td class="debug"><div class="debug">Cell 2.2</div></td>
                    </tr>
                </table>
                <span class="code">.table-p-xl</span>
            </div>
        </div>
    </div>

</section>