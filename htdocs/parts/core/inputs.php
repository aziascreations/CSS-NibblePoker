<?php
// Making sure the file is included and not accessed directly.
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header('HTTP/1.1 403 Forbidden');
    die();
}
?>

<a id="core-inputs"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Inputs
        <i class="fa-solid fa-pen-to-square f-right"></i>
    </h2>
</div>
<section class="p-s">

    <div class="bkgd-blue t-w-400 t-center w-full r-l border p-xs mt-xxs mb-m">
        ℹ️ Check the <a href="#examples-inputs">Examples &gt; Inputs</a> section for styled examples.
    </div>

    <div class="px-s mb-m">
        <label for="demo-core-text">Text Input: </label>
        <input id="demo-core-text" type="text" value="Lorem ipsum">
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            label+input[type=text]
        </code>
    </div>

    <div class="px-s mb-m">
        <label for="demo-core-password">Password Input: </label>
        <input id="demo-core-password" type="password" value="12345678">
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            label+input[type=password]
        </code>
    </div>

    <div class="px-s mb-m">
        <label for="demo-core-number">Number Input: </label>
        <input id="demo-core-number" type="number" value="42">
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            label+input[type=number]
        </code>
    </div>

    <div class="px-s mb-m">
        <input type="radio" id="demo-core-radio-1">
        <label for="demo-core-radio-1">Radio 1</label><br>
        <input type="radio" id="demo-core-radio-2">
        <label for="demo-core-radio-2">Radio 2</label><br>
        <input type="radio" id="demo-core-radio-3">
        <label for="demo-core-radio-3">Radio 3</label>
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            (input[type=radio]+label+br)*3
        </code>
    </div>

    <div class="px-s mb-m">
        <input type="checkbox" id="demo-core-combo-1">
        <label for="demo-core-combo-1">Checkbox 1</label><br>
        <input type="checkbox" id="demo-core-combo-2">
        <label for="demo-core-combo-2">Checkbox 2</label><br>
        <input type="checkbox" id="demo-core-combo-3">
        <label for="demo-core-combo-3">Checkbox 3</label>
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            (input[type=checkbox]+label+br)*3
        </code>
    </div>

    <div class="px-s mb-m">
        <label for="demo-core-textarea"></label>
        <textarea id="demo-core-textarea" rows="8">Lorem Ipsum</textarea>
        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            label+textarea
        </code>
    </div>

</section>
