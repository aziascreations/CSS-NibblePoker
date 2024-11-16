<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}

global $root_path;
?>

<div class="p-xs b r-s bkgd-grid">
    <h2 class="t-w-500 t-size-14">Welcome to <i class="ml-xxs">NibblePoker.com</i></h2>
</div>
<section class="p-s">
    <h3 class="t-size-12 mb-xxs">About the stylesheet</h3>
    <p class="ml-xs">
        <i>NibbleCSS</i> was originally conceived for internal use following a bout of performance issues with
        off-the-shelf stylesheets on low-end and mobile devices.<br>
        However, it rapidly got used outside its intended environment and was spun-off into a separate a
        publicly accessible and truly free project.
    </p>
    <p class="ml-xs mt-s">
        <i>NibbleCSS</i> is also released into the public domain as I do not believe forcing people to include licenses
        or disclaimers is truly free, especially when said licenses propagate themselves like tumorous growths.<br>
        Following that philosophy, <i>NibbleCSS</i> also makes use of
        <a href="https://meyerweb.com/eric/tools/css/reset/">Eric A. Meyer's Reset.css</a>
        which was also released into the public domain in 2011.
    </p>

    <h3 class="t-size-12 mb-xxs mt-m">Design philosophy</h3>
    <div class="ml-xs">
        <h4 class="t-size-11 mt-s mb-xxs">Core stylesheet rules:</h4>
        <ul class="l-bullets l-bullet-manual">
            <li>No implicit sizes, margins or paddings</li>
            <li>No styles from class-less DOM, except for styling elements</li>
            <li>Self-sufficient and embeddable as a single file or text blob</li>
            <li>Competitive minified size</li>
            <li>Standardized &amp; consistent naming scheme</li>
        </ul>

        <h4 class="t-size-11 mt-s mb-xxs">Site stylesheet rules:</h4>
        <ul class="l-bullets l-bullet-manual">
            <li>Prefabs for common elements</li>
            <ul class="l-bullets l-bullet-manual">
                <li>Bound to specific elements</li>
            </ul>
            <li>No forced smooth transition</li>
        </ul>

        <h4 class="t-size-11 mt-s mb-xxs">General rules</h4>
        <ul class="l-bullets l-bullet-manual">
            <li><b>Must</b> be snappy on low-end hardware, no snagging or slowdowns allowed</li>
            <ul class="l-bullets l-bullet-manual">
                <li>Tested on an old Chuwi Ubook X internally</li>
            </ul>
        </ul>
    </div>

    <h3 class="t-size-12 mb-xxs mt-m">Downloads</h3>
    <table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center ml-xs">
        <thead>
        <th>Stylesheet</th>
        <th>Minified CSS</th>
        <th>Regular CSS</th>
        </thead>
        <tbody>
            <tr>
                <td>NibbleCSS</td>
                <td>
                    <a href="/css/nibblepoker.min.css"
                       title="Download the minified full stylesheet"
                       class="a-hidden"
                       download>
                        <button class="success p-xs b r-m">
                            <i class="fa fa-download"></i>
                            nibblepoker.min.css
                            (<?php echo(formatBytes(filesize($root_path . "/css/nibblepoker.min.css"))) ?>)
                        </button>
                    </a>
                </td>
                <td>
                    <a href="/css/nibblepoker.css"
                       title="Download the full stylesheet"
                       class="a-hidden"
                       download>
                        <button class="p-xs b r-m">
                            <i class="fa fa-download"></i>
                            nibblepoker.css
                            (<?php echo(formatBytes(filesize($root_path . "/css/nibblepoker.css"))) ?>)
                        </button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Debugger</td>
                <td>
                    <a href="/css/debugger.min.css"
                       title="Download the minified debugging stylesheet"
                       class="a-hidden"
                       download>
                        <button class="p-xs b r-m">
                            <i class="fa fa-download"></i>
                            debugger.min.css
                            (<?php echo(formatBytes(filesize($root_path . "/css/debugger.min.css"))) ?>)
                        </button>
                    </a>
                </td>
                <td>
                    <a href="/css/debugger.css"
                       title="Download the debugging stylesheet"
                       class="a-hidden"
                       download>
                        <button class="p-xs b r-m">
                            <i class="fa fa-download"></i>
                            debugger.css
                            (<?php echo(formatBytes(filesize($root_path . "/css/debugger.css"))) ?>)
                        </button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</section>
