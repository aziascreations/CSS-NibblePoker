@echo off
setlocal enabledelayedexpansion

:: Going into the script's directory
cd /D "%~dp0"


:setup
echo.
echo Setting up your system
echo ----------------------

:setup-npm
echo Updating NPM...
pushd %CD%
call npm update -g npm
popd

:setup-sass
echo Installing SASS...
pushd %CD%
call npm install -g sass
popd
:setup-sass-update
echo Updating SASS...
pushd %CD%
call npm update -g sass
popd

:setup-html-minify
echo Installing HTML Minifier...
pushd %CD%
call npm install -g html-minifier
popd

:setup-html-minify-update
echo Updating HTML Minifier...
pushd %CD%
call npm update -g html-minifier
popd

:setup-end


:end
