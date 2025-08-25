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
        ⚠️ These styles have specific limitations you should be aware of ⚠️
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-xxs">Stylish table</h3>
    <div class="px-s mb-m">
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
            <tr>
                <th>Head 1</th>
                <th>Head 2</th>
            </tr>
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
            table<b>.table-stylish.table-p-s.border.r-l</b><br>
            &nbsp;&nbsp;thead>tr>th*2<br>
            &nbsp;&nbsp;tbody>tr*2>td*2
        </code>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-xxs">Scrollable table</h3>
    <div class="px-s">
        <p class="mb-xxs mb-m">
            Scrollable tables can be obtained by combining the overflow utility classes and the
            <span class="code">.table-no-wrap</span> class to prevent cell from collapsing before scrolling.
        </p>
        <p class="mb-xxs mb-m">
            This special class can be applied to the following elements: <br>
            <span class="ml-s">
                <span class="code">table</span>,
                <span class="code">thead</span>,
                <span class="code">tbody</span>,
                <span class="code">tr</span>,
                <span class="code">th</span>,
                <span class="code">td</span>
            </span>
        </p>
        <p class="mb-xxs mb-m">
            In turn, every <span class="code">td</span> element under one of these elements will no longer wrap text.
        </p>

        <div class="w-full ox-scroll">
            <table class="table-stylish table-p-s border r-l">
                <thead>
                <tr>
                    <th>Table without the <span class="code">.table-no-wrap</span> class</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec placerat neque.
                        In ornare hendrerit vestibulum. Nullam quis nisi sed est elementum pharetra non in ligula.
                        Curabitur malesuada varius congue. Donec ut facilisis nulla. Mauris vel turpis nisl.
                        In hac habitasse platea dictumst.
                        Integer non libero tempor, sollicitudin lorem vitae, auctor arcu.
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="w-full ox-scroll">
            <table class="table-stylish table-p-s border r-l table-no-wrap">
                <thead>
                <tr>
                    <th>Table with the <span class="code">.table-no-wrap</span> class</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec placerat neque.
                        In ornare hendrerit vestibulum. Nullam quis nisi sed est elementum pharetra non in ligula.
                        Curabitur malesuada varius congue. Donec ut facilisis nulla. Mauris vel turpis nisl.
                        In hac habitasse platea dictumst.
                        Integer non libero tempor, sollicitudin lorem vitae, auctor arcu.
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <code class="d-block p-xxs border r-s mt-s">
            <b>div.w-full.ox-scroll</b><br>
            &nbsp;&nbsp;table.table-stylish.table-p-s.border.r-l<b>.table-no-wrap</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;thead>tr>th*2<br>
            &nbsp;&nbsp;&nbsp;&nbsp;tbody>tr*2>td*2
        </code>
    </div>

</section>