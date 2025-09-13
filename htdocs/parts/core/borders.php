<?php
// Making sure the file is included and not accessed directly.
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('HTTP/1.1 403 Forbidden');
    die();
}
?>

<a id="core-borders"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Borders
        <i class="fa-solid fa-border-inner f-right"></i>
    </h2>
</div>
<section class="p-s">

    <h3 class="t-w-500 t-size-12 my-s">Border selection</h3>
    <div class="px-s">
        <p class="mb-s">
            Borders can be applied on a global/axis/sided basis using the standard size suffixes.<br>
            The table below details them in order of application and definition at the CSS-level.
        </p>

        <table class="table-stylish table-p-xs border r-l table-v-center">
            <thead>
            <tr>
                <th>Border Style</th>
                <th>Enabling class</th>
                <th>Disabling class</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><b>Global</b></td>
                <td><span class="code">.b</span>, <span class="code">.border</span></td>
                <td><span class="code">.b-0</span></td>
            </tr>
            <tr>
                <td><b>Horizontal</b></td>
                <td><span class="code">.bx</span></td>
                <td><span class="code">.bx-0</span></td>
            </tr>
            <tr>
                <td><b>Vertical</b></td>
                <td><span class="code">.by</span></td>
                <td><span class="code">.by-0</span></td>
            </tr>
            <tr>
                <td><b>Top</b></td>
                <td><span class="code">.bt</span></td>
                <td><span class="code">.bt-0</span></td>
            </tr>
            <tr>
                <td><b>Down</b></td>
                <td><span class="code">.bb</span></td>
                <td><span class="code">.bb-0</span></td>
            </tr>
            <tr>
                <td><b>Left</b></td>
                <td><span class="code">.bl</span></td>
                <td><span class="code">.bl-0</span></td>
            </tr>
            <tr>
                <td><b>Right</b></td>
                <td><span class="code">.br</span></td>
                <td><span class="code">.br-0</span></td>
            </tr>
            </tbody>
        </table>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Border styles</h3>
    <div class="px-s">
        <table class="table-stylish table-p-xs border r-l table-v-center">
            <thead>
            <tr>
                <th>Border style</th>
                <th>Class</th>
                <th>Example</th>
            </tr>
            </thead>
            <tbody>
            <tr><td><b>None</b></td><td><span class="code">.b-none</span></td><td><div class="bkgd-light b b-none p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Hidden</b></td><td><span class="code">.b-hidden</span></td><td><div class="bkgd-light b b-hidden p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Dotted</b></td><td><span class="code">.b-dotted</span></td><td><div class="bkgd-light b b-dotted p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Dashed</b></td><td><span class="code">.b-dashed</span></td><td><div class="bkgd-light b b-dashed p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Solid</b></td><td><span class="code">.b-solid</span></td><td><div class="bkgd-light b b-solid p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Double</b></td><td><span class="code">.b-double</span></td><td><div class="bkgd-light b b-double p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Groove</b></td><td><span class="code">.b-groove</span></td><td><div class="bkgd-light b b-groove p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Ridge</b></td><td><span class="code">.b-ridge</span></td><td><div class="bkgd-light b b-ridge p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Inset</b></td><td><span class="code">.b-inset</span></td><td><div class="bkgd-light b b-inset p-xxs">&nbsp;</div></td></tr>
            <tr><td><b>Outset</b></td><td><span class="code">.b-outset</span></td><td><div class="bkgd-light b b-outset p-xxs">&nbsp;</div></td></tr>
            </tbody>
        </table>
    </div>

</section>
