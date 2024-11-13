<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="buttons"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Buttons
        <i class="fa-solid fa-stop f-right"></i>
        </h2>
</div>
<section class="p-s">
    <p class="mb-s">
        Buttons are components that can be formed using existing core classes and a couple of specific classes
        for colors only.
    </p>

    <div class="grid col-2 grid-gap-xs">
        <div>
            <h3 class="t-w-500 t-size-12 mt-s">Unstyled button</h3>
            <div class="m-s">
                <button class="m-xs">My button</button>
                <code class="d-block p-xxs border r-s mt-s">
                    <b>button</b>
                </code>
            </div>
        </div>
        <div>
            <h3 class="t-w-500 t-size-12 mt-s">Default styled button</h3>
            <div class="m-s">
                <button class="p-xs r-s border">Default button</button>
                <code class="d-block p-xxs border r-s mt-s">
                    button<b>.p-xs.r-s.border</b>
                </code>
            </div>
        </div>
    </div>

    <h3 class="t-w-500 t-size-12 mt-s">Colored buttons</h3>
    <div class="m-s">
        <p class="mb-s">
            Buttons can also be colored in order to give direct visual feedback
            on their intended action by simply giving them another class.
        </p>
        <div class="grid col-2 grid-gap-xs">
            <div>
                <button class="p-xs r-s border primary">Primary button</button>
                <code class="d-block p-xxs border r-s mt-s">
                    button.p-xs.r-s.border<b>.primary</b>
                </code>
            </div>
            <div>
                <button class="p-xs r-s border success">Success button</button>
                <code class="d-block p-xxs border r-s mt-s">
                    button.p-xs.r-s.border<b>.success</b>
                </code>
            </div>
            <div>
                <button class="p-xs r-s border warning">Warning button</button>
                <code class="d-block p-xxs border r-s mt-s">
                    button.p-xs.r-s.border<b>.warning</b>
                </code>
            </div>
            <div>
                <button class="p-xs r-s border error">Danger/Error button</button>
                <code class="d-block p-xxs border r-s mt-s">
                    button.p-xs.r-s.border<b>.error</b>
                </code>
            </div>
        </div>
    </div>
</section>
