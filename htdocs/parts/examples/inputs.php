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

    <h3 class="t-w-500 t-size-12 my-xs mt-xxs">Text inputs</h3>

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


    <h3 class="t-w-500 t-size-12 my-xs mt-xxs">Checkboxes</h3>

    <div class="px-s mb-m">
        <input type="checkbox" id="demo-site-combo-1" class="cb-pretty r-m border" checked>
        <label for="demo-site-combo-1">Checkbox 1</label><br>
        <input type="checkbox" id="demo-site-combo-2" class="cb-pretty r-m border">
        <label for="demo-site-combo-2">Checkbox 2</label><br>
        <input type="checkbox" id="demo-site-combo-3" class="cb-pretty r-m border" disabled>
        <label for="demo-site-combo-3">Checkbox 3</label>

        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            (input[type=checkbox]<b>.cb-pretty.r-m.border</b>+label+br)*3
        </code>
    </div>


    <h3 class="t-w-500 t-size-12 my-xs mt-xxs">Radio inputs</h3>

    <div class="px-s mb-m">
        <input type="radio" id="demo-site-radio-1-solid" name="demo-site-radio-solid" class="radio-solid border" checked>
        <label for="demo-site-radio-1-solid">Radio 1</label>
        <br>
        <input type="radio" id="demo-site-radio-2-solid" name="demo-site-radio-solid" class="radio-solid border">
        <label for="demo-site-radio-2-solid">Radio 2</label>
        <br>
        <input type="radio" id="demo-site-radio-3-solid" name="demo-site-radio-solid" class="radio-solid border radio-unchecked-subtle">
        <label for="demo-site-radio-3-solid">Radio 3</label><kbd class="ml-s">.radio-unchecked-subtle</kbd>
        <br>
        <input type="radio" id="demo-site-radio-4-solid" name="demo-site-radio-solid" class="radio-solid border radio-unchecked-dashed">
        <label for="demo-site-radio-4-solid">Radio 4</label><kbd class="ml-s">.radio-unchecked-dashed</kbd>
        <br>
        <input type="radio" id="demo-site-radio-5-solid" name="demo-site-radio-solid" class="radio-solid border" disabled>
        <label for="demo-site-radio-5-solid">Radio 5</label>

        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            (input[type=radio][name=myRadioInput]<b>.radio-solid.border</b>+label+br)*3
        </code>
    </div>

    <div class="px-s mb-m">
        <input type="radio" id="demo-site-radio-1-3d" name="demo-site-radio-3d" class="radio-3d border" checked>
        <label for="demo-site-radio-1-3d">Radio 1</label>
        <br>
        <input type="radio" id="demo-site-radio-2-3d" name="demo-site-radio-3d" class="radio-3d border">
        <label for="demo-site-radio-2-3d">Radio 2</label>
        <br>
        <input type="radio" id="demo-site-radio-3-3d" name="demo-site-radio-3d" class="radio-3d border radio-unchecked-subtle">
        <label for="demo-site-radio-3-3d">Radio 3</label><kbd class="ml-s">.radio-unchecked-subtle</kbd>
        <br>
        <input type="radio" id="demo-site-radio-4-3d" name="demo-site-radio-3d" class="radio-3d border radio-unchecked-dashed">
        <label for="demo-site-radio-4-3d">Radio 4</label><kbd class="ml-s">.radio-unchecked-dashed</kbd>
        <br>
        <input type="radio" id="demo-site-radio-5-3d" name="demo-site-radio-3d" class="radio-3d border" disabled>
        <label for="demo-site-radio-5-3d">Radio 5</label>

        <code class="d-block p-xxs border r-s mt-xs bkgd-gray">
            (input[type=radio][name=myRadioInput]<b>.radio-3d.border</b>+label+br)*3
        </code>
    </div>

</section>
