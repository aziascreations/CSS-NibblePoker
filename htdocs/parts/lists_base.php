<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<a id="lists-basic"></a>
<div class="p-xs b r-s bkgd-grid mt-m">
    <h2 class="t-w-500 t-size-14">Basic Lists
        <i class="fa-solid fa-list f-right"></i></h2>
</div>
<section class="p-s">

    <div class="bkgd-orange t-bold t-center w-full r-l border p-xs mt-xxs mb-m">
        ⚠️ These styles may change before the 1.0.0 release ⚠️
    </div>

    <h3 class="t-w-500 t-size-12 my-s">Blank lists</h3>
    <div class="px-s">
        <p class="mb-s">
            By default, ordered and unordered lists have no bullet.<br>
            This behavior can be used to create custom styled lists that still remain helpful for SEO and accessibility.
        </p>
        <ul class="debug">
            <li>Item 1</li>
            <li>Item 2</li>
            <li class="l-bullet-disc">
                Item 3 with explicit disc bullet (See below)
            </li>
        </ul>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Normal lists</h3>
    <div class="px-s">
        <p class="mb-s">
            Regular-looking lists can be created by simply adding the <span class="code">.l-bullets</span>
            or <span class="code">.list-bullets</span> class to list's root element.<br>
            These classes must also be used for any nested children lists !
        </p>
        <div class="debug mb-s">
            <ul class="l-bullets debug l-bullet-manual">
                <li>Line 1</li>
                <li>Line 2<br>Line 2 continued after a <i>br</i></li>
                <li>Line 3</li>
                <ul class="l-bullets l-bullet-manual">
                    <li>Line 3.1</li>
                    <li>Line 3.2</li>
                </ul>
                <li>Line 4</li>
            </ul>
        </div>
        <div class="debug">
            <ol class="l-bullets l-bullet-manual">
                <li>Salt</li>
                <li>Packs of crisps</li>
                <ol class="l-bullets l-bullet-manual">
                    <li>Salt and pepper</li>
                    <li>Paprika</li>
                </ol>
                <li>Olive oil</li>
            </ol>
        </div>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Bullet position</h3>
    <div class="px-s">
        <p class="mb-s">
            By default, the lists do not include their bullet in the parent element.<br>
            This is due to the fact that the imposed spacings when using
            <span class="code">list-style-position: inside;</span> looks like absolute trash.
        </p>
        <p class="mb-s">
            This behavior can be changed by using the <span class="code">.l-bullet-inside</span>
            or <span class="code">list-bullet-inside</span> classes.<br>
            Alternatively, a nicer manual spacing can be applied by using the <span class="code">.l-bullet-manual</span>
            or <span class="code">list-bullet-manual</span> classes.
        </p>
        <p class="mb-s">
            Please note that the following classes must be applied to the root element and any nested
            list's root element too.
        </p>
        <div class="grid grid-col-3">
            <div>
                <p><b>Outside (Default)</b></p>
                <ul class="debug l-bullets l-bullet-outside my-xs">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
                <span class="code">ul.l-bullets<b>.l-bullet-outside</b>&gt;li*3</span>
            </div>
            <div>
                <p><b>Inside</b></p>
                <ul class="debug l-bullets l-bullet-inside my-xs">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
                <span class="code">ul.l-bullets<b>.l-bullet-inside</b>&gt;li*3</span>
            </div>
            <div>
                <p><b>Manual (Recommended)</b></p>
                <ul class="debug l-bullets l-bullet-manual my-xs">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
                <span class="code">ul.l-bullets<b>.l-bullet-manual</b>&gt;li*3</span>
            </div>
        </div>
    </div>

    <h3 class="t-w-500 t-size-12 my-s mt-l">Bullet styles</h3>
    <div class="px-s">
        <p class="mb-s">
            Each list and its entry can have its bullets' style changed by using the following classes in the
            <span class="code">ul</span>, <span class="code">ol</span> or <span class="code">li</span> elements.<br>
            <s>The <span class="code">type</span> property also works as expected in these cases.</s>
        </p>
        <p class="mb-s">
            Please note that some of the more exotic bullet styles may not fit properly when using
            the manual position as shown below.<br>
            This is a known issue and won't be fixed as it is an edge-case.
        </p>
        <ul class="debug l-bullet-manual">
            <li class="l-bullet-disc">
                Disc: <span class="code">.l-bullet-disc</span>, <span class="code">.list-bullet-disc</span>
            </li>
            <li class="l-bullet-square">
                Square: <span class="code">.l-bullet-square</span>, <span class="code">.list-bullet-square</span>
            </li>
            <li class="l-bullet-decimal">
                Decimal: <span class="code">.l-bullet-decimal</span>, <span class="code">.list-bullet-decimal</span>
            </li>
            <li class="l-bullet-decimal-leading">
                Decimal: <span class="code">.l-bullet-decimal-leading</span>, <span class="code">.list-bullet-decimal-leading</span>
            </li>
            <li class="l-bullet-georgian">
                Gregorian: <span class="code">.l-bullet-georgian</span>, <span class="code">.list-bullet-georgian</span>
            </li>
            <li class="l-bullet-chinese">
                Chinese: <span class="code">.l-bullet-chinese</span>, <span class="code">.list-bullet-chinese</span>
            </li>
            <li class="l-bullet-kannada">
                Kannada: <span class="code">.l-bullet-kannada</span>, <span class="code">.list-bullet-kannada</span>
            </li>
            <li class="l-bullet-none">
                None: <span class="code">.l-bullet-none</span>, <span class="code">.list-bullet-none</span>
            </li>
        </ul>
    </div>

</section>
