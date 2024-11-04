<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="text-links"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Text<i class="fa-solid fa-chevron-right mx-xs"></i>Links
        <i class="fa-solid fa-link f-right"></i></h2>
</div>
<section class="p-s">
    <h3 class="t-size-12 mb-xs">Regular anchors</h3>
    <table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center">
        <thead>
        <th>Example</th>
        <th>Source</th>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">Real anchor</a></td>
            <td><span class="code">a</span></td>
        </tr>
        <tr>
            <td><p class="a">Fake anchor</p></td>
            <td><span class="code">*.a</span></td>
        </tr>
        </tbody>
    </table>

    <h3 class="t-size-12 mb-xs mt-m">Bland anchors</h3>
    <table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center">
        <thead>
        <th>Example</th>
        <th>Source</th>
        </thead>
        <tbody>
        <tr>
            <td><a href="#" class="a-bland">Bland anchor</a></td>
            <td><span class="code">a.a-bland</span></td>
        </tr>
        <tr>
            <td><p class="a a-bland">Bland 'anchor'</p></td>
            <td><span class="code">*.a.a-bland</span></td>
        </tr>
        </tbody>
    </table>

    <h3 class="t-size-12 mb-xs mt-m">Hidden anchors</h3>
    <table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center">
        <thead>
        <th>Example</th>
        <th>Source</th>
        </thead>
        <tbody>
        <tr>
            <td><a href="#" class="a-hidden">Hidden anchor</a></td>
            <td><span class="code">a.a-hidden</span></td>
        </tr>
        <tr>
            <td><p class="a a-hidden">Hidden 'anchor'</p></td>
            <td><span class="code">*.a.a-hidden</span></td>
        </tr>
        </tbody>
    </table>
</section>
