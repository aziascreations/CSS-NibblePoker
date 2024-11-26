<?php
// Making sure the file is included and not accessed directly.
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('HTTP/1.1 403 Forbidden');
    die();
}
?>

<a id="examples-cards"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Cards
        <i class="fa-solid fa-address-card f-right"></i>
    </h2>
</div>
<section class="p-s">

    <h3 class="t-w-500 t-size-12 my-s mt-xxs">Vertical Card</h3>
    <div class="px-s">
        <p class="mb-xxs">
            Tables can quickly be styled by simply using the <span class="code">.table-stylish</span> class.
        </p>

        <div class="my-s border r-l bkgd-dark grid d-inline-block">
            <div class="bb">
                <img src="./img/maki-03.jpg" alt="Hungry Kitty Cat" class="r-r p-s px-l" height="128px">
            </div>
            <div class="bkgd-gray t-center">
                <p>Hungry Cat</p>
                <p>
                    This kitty needs kibbles to stay healthy and
                </p>
            </div>
            <div class="grid grid-col-3">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <code class="d-block p-xxs border r-s mt-s">
            table<b>.table-stylish.table-p-s.border.r-l</b><br>
            &nbsp;&nbsp;thead>th>td*2<br>
            &nbsp;&nbsp;tbody>tr*2>td*2
        </code>
    </div>

</section>
