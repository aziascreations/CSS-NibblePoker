<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}
?>

<nav id="sidebar" class="sidebar">

    <div class="p-m pt-l">
        <a href="#intro" class="no-select">
            <img class="logo-sidebar-v2"
                 src="./img/logo-large-fluent-unshaded.svg"
                 alt="Website's logo"
                 draggable="false">
        </a>
    </div>

    <details class="by t-noselect" open>
        <summary class="p-xs bkgd-grid20 t-w-bold t-size-13">Core</summary>
        <div class="p-xs px-m bt bkgd-grey t-size-11">
            <a class="a-hidden" href="#text-weights">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-text-height pr-xs t-half-muted"></i>Weights
                </p>
            </a>
            <a class="a-hidden" href="#text-styles">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-italic pr-xs t-half-muted"></i>Styles
                </p>
            </a>
            <a class="a-hidden" href="#text-alignment">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-text-width pr-xs t-half-muted"></i>Alignment
                </p>
            </a>
            <a class="a-hidden" href="#text-modifiers">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-subscript pr-xs t-half-muted"></i>Modifiers
                </p>
            </a>
            <a class="a-hidden" href="#text-links">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-link pr-xs t-half-muted"></i>Links
                </p>
            </a>
            <a class="a-hidden" href="#text-misc">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-ellipsis pr-xs t-half-muted"></i>Miscellaneous
                </p>
            </a>

            <hr class="subtle">

            <a class="a-hidden" href="#spacing">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-ellipsis pr-xs t-half-muted"></i>Spacing
                </p>
            </a>
            <a class="a-hidden" href="#rounding">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-bezier-curve pr-xs t-half-muted"></i>Rounding
                </p>
            </a>

            <hr class="subtle">

            <a class="a-hidden" href="#lists-basic">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-list pr-xs t-half-muted"></i>Lists
                </p>
            </a>
            <a class="a-hidden" href="#grids">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-table-cells-large pr-xs t-half-muted"></i>Grids
                </p>
            </a>
            <a class="a-hidden" href="#tables-core">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-table pr-xs t-half-muted"></i>Tables
                </p>
            </a>
            <a class="a-hidden" href="#core-inputs">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-pen-to-square pr-xs t-half-muted"></i>Inputs
                </p>
            </a>
        </div>
    </details>

    <details class="by t-noselect" open>
        <summary class="p-xs bkgd-grid20 t-w-bold t-size-13">Site</summary>
        <div class="p-xs px-m bt bkgd-grey t-size-11">
            <a class="a-hidden" href="#horizontal-rulers">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-ruler pr-xs t-half-muted"></i>Horizontal Rulers
                </p>
            </a>
            <a class="a-hidden" href="#backgrounds">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-paint-roller pr-xs t-half-muted"></i>Backgrounds
                </p>
            </a>
            <a class="a-hidden" href="#buttons">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-stop pr-xs t-half-muted"></i>Buttons
                </p>
            </a>
            <a class="a-hidden" href="#tables-site">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-table pr-xs t-half-muted"></i>Tables
                </p>
            </a>
        </div>
    </details>

    <details class="by t-noselect" open>
        <summary class="p-xs bkgd-grid20 t-w-bold t-size-13">Examples</summary>
        <div class="p-xs px-m bt bkgd-grey t-size-11">
            <a class="a-hidden" href="#examples-inputs">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-pen-to-square pr-xs t-half-muted"></i>Inputs
                </p>
            </a>
            <a class="a-hidden" href="#examples-cards">
                <p class="t-w-500 py-xs sidebar-entry">
                    <i class="fa-solid fa-address-card pr-xs t-half-muted"></i>Cards
                </p>
            </a>
        </div>
    </details>

</nav>
