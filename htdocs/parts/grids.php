<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="grids"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Grids
        <i class="fa-solid fa-table-cells-large f-right"></i></h2>
</div>
<section class="p-s">
    <p>
        Grids are defined by using the <span class="code">grid</span> and <span class="code">col-X</span> class where
        <span class="code">X</span> represents the number of columns and can be
        <span class="code">1</span>, <span class="code">2</span>,
        <span class="code">3</span>, <span class="code">4</span>,
        <span class="code">6</span> or <span class="code">8</span>.
    </p>

    <!--<p>You should preferably use <span class="code">&lt;div&gt;</span> elements for the grid container and each cell.</p>-->
    <!--<p>[Equal width for cells, maybe]</p>-->

    <p class="t-bold">Examples without inter-cell gaps:</p>
    <div class="gap-xs">
        <p><span class="code">div.grid.col-1&gt;div</span></p>
        <div class="grid col-1 debug p-xxs">
            <div class="bkgd-blank-dark debug">Cell #1</div>
        </div>

        <p><span class="code">div.grid.col-2&gt;div*2</span></p>
        <div class="grid col-2 debug p-xxs">
            <div class="bkgd-blank-dark debug">Cell #1</div>
            <div class="bkgd-blank-dark debug">Cell #2</div>
        </div>

        <p><span class="code">div.grid.col-6&gt;div*6</span></p>
        <div class="grid col-6 debug p-xxs">
            <div class="bkgd-blank-dark debug">Cell #1</div>
            <div class="bkgd-blank-dark debug">Cell #2</div>
            <div class="bkgd-blank-dark debug">Cell #3</div>
            <div class="bkgd-blank-dark debug">Cell #4</div>
            <div class="bkgd-blank-dark debug">Cell #5</div>
            <div class="bkgd-blank-dark debug">Cell #6</div>
        </div>
    </div>

    <p>
        Inter-cell gaps can also be setup by using the <span class="code">grid-gap-X</span> or
        <span class="code">col-gap-X</span> classes and replacing the <span class="code">X</span>
        with the standard size suffixes.
    </p>

    <p class="t-bold">Examples with inter-cell gaps:</p>
    <div class="gap-xs">
        <?php
            foreach(["xs", "m", "l"] as &$gapSize) {
                echo('<p><span class="code">div.grid.col-3.grid-gap-' . $gapSize . '&gt;div*6</span></p>');
                echo('<div class="grid col-3 grid-gap-' . $gapSize . ' debug p-xxs">');
                for($iGap = 1; $iGap <= 6; $iGap++) {
                    echo('<div class="bkgd-blank-dark debug">Cell #' . $iGap . '</div>');
                }
                echo('</div>');
            }
        ?>
    </div>

    <b>TODO: All mobile rules, Add non-identical sizing</b>


    <details class="border bkgd-blank r-m mt-s">
        <summary class="p-xs">Click to show/hide all classes</summary>
        <div class="p-xs bt bkgd-blank-dark">
            <p>
                <span class="code mr-xs">grid</span>
                <span class="t-super-muted">Defined a grid container</span>
            </p>


            <hr class="subtle my-s">

            <table>
                <tr>
                    <td>
                        <p><span class="code mr-xs">grid-col-1</span></p>
                    </td>
                    <td>
                        <p><span class="code mr-xs">col-1</span></p>
                    </td>
                    <td rowspan="6">
                        <span class="t-super-muted">Specifies the column count</span></p>
                    </td>
                </tr>
                <?php
                $gridColCounts = [/*"1",*/ "2", "3", "4", "6", "8"];
                foreach($gridColCounts as &$gridColCount){
                    echo('<tr>');
                    echo('<td><p><span class="code mr-xs">grid-col-'.$gridColCount.'</span></p></td>');
                    echo('<td><p><span class="code mr-xs">col-'.$gridColCount.'</span></p></td>');
                    echo('</tr>');
                }
                ?>
            </table>

            <hr class="subtle my-s">

            <table>
                <tr>
                    <td>
                        <p><span class="code mr-xs">grid-gap-xs</span></p>
                    </td>
                    <td>
                        <p><span class="code mr-xs">gap-xs</span></p>
                    </td>
                    <td rowspan="6">
                        <span class="t-super-muted">Specifies the inter-cell gap size</span></p>
                    </td>
                </tr>
                <?php
                $gridGapSizes = [/*"xs",*/ "s", "m", "l", "xl"];
                foreach($gridGapSizes as &$gridGapSize){
                    echo('<tr>');
                    echo('<td><p><span class="code mr-xs">grid-gap-'.$gridGapSize.'</span></p></td>');
                    echo('<td><p><span class="code mr-xs">gap-'.$gridGapSize.'</span></p></td>');
                    echo('</tr>');
                }
                ?>
            </table>

            <?php
            echo('<hr class="subtle my-s">');
            ?>
        </div>
    </details>

</section>
