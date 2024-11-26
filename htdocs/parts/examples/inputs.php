<?php
// Making sure the file is included and not accessed directly.
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('HTTP/1.1 403 Forbidden');
    die();
}
?>

<a id="examples-inputs"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Inputs
        <i class="fa-solid fa-pen-to-square f-right"></i>
    </h2>
</div>
<section class="p-s">

    <h3 class="t-w-500 t-size-12 my-xs mt-xxs">Basic inputs</h3>

    <div class="px-s mb-m">
        <label for="demo-core-text">Text Input: </label>
        <input id="demo-core-text" type="text" value="Lorem ipsum" class="p-xxs border r-m">
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            label+input[type=text]<b>.p-xxs.border.r-m</b>
        </code>
    </div>

    <div class="px-s mb-m">
        <label for="demo-core-textarea"></label>
        <textarea id="demo-core-textarea" rows="8" class="p-xxs border r-m w-full ta-resize-v">Lorem Ipsum</textarea>
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            label+textarea<b>.p-xxs.border.r-m.w-full.ta-resize-v</b>
        </code>

    </div>

    <p class="mt-m t-bold">TODO: Add other types</p>
</section>
