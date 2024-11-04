@echo off
setlocal enabledelayedexpansion

:: Going into the script's directory
cd /D "%~dp0"


:minify
echo.
echo Minifying HTML
echo --------------

:minify-clean
echo Cleaning old files...
pushd %CD%
cd /d %~dp0\htdocs\
del /Q /S "*.min.html"
popd

:minify-run
echo Minifying HTML files...
pushd %CD%
cd /d %~dp0\htdocs
call html-minifier --case-sensitive ^
                   --collapse-whitespace ^
                   --decode-entities ^
                   --remove-attribute-quotes ^
                   --remove-comments ^
                   --sort-attributes ^
                   -o "index.min.html" ^
                   "index.html"
popd

:minify-end


:end
