<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<nav id="sidebar" class="sidebar p-m pt-l">
    <a href="/" class="no-select">
        <img class="logo-sidebar-v2"
             src="/img/logo-large-fluent-unshaded.svg"
             alt="Website's logo"
             draggable="false">
    </a>
    <hr class="subtle">

    <p class="t-bold t-size-14 py-xxs t-half-muted _t-underline t-center">Text</p>
    <a class="a-hidden" href="#text-weights">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-text-height pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Weights</span>
        </p>
    </a>
    <a class="a-hidden" href="#text-styles">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-italic pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Styles</span>
        </p>
    </a>
    <a class="a-hidden" href="#text-alignment">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-text-width pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Alignment</span>
        </p>
    </a>
    <a class="a-hidden" href="#text-modifiers">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-subscript pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Modifiers</span>
        </p>
    </a>
    <a class="a-hidden" href="#text-links">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-link pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Links</span>
        </p>
    </a>
    <a class="a-hidden" href="#text-misc">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-ellipsis pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Miscellaneous</span>
        </p>
    </a>

    <hr class="subtle">

    <a class="a-hidden" href="#spacing">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-ellipsis pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Spacing</span>
        </p>
    </a>
    <a class="a-hidden" href="#rounding">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-bezier-curve pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Rounding</span>
        </p>
    </a>

    <hr class="subtle">

    <a class="a-hidden" href="#lists">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-list pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Lists</span>
        </p>
    </a>

    <hr class="subtle">

    <a class="a-hidden" href="#grids">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-table-cells-large pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Grids</span>
        </p>
    </a>

    <a class="a-hidden" href="#tables">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-table pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Tables</span>
        </p>
    </a>

    <hr class="subtle">

    <a class="a-hidden" href="#horizontal-rulers">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-ruler pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Horizontal Rulers</span>
        </p>
    </a>

    <hr class="subtle">

    <a class="a-hidden" href="#buttons">
        <p class="t-size-18 t-w-500 py-xs sidebar-entry">
            <i class="fa-solid fa-stop pr-xs t-size-12 t-half-muted"></i>
            <span class="t-size-12">Buttons</span>
        </p>
    </a>
</nav>
