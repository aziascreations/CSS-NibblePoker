@echo off
setlocal enabledelayedexpansion

:: Going into the script's directory
cd /D "%~dp0"


:sass
echo.
echo Handling the SASS files
echo -----------------------

:sass-clean
echo Cleaning old files...
pushd %CD%
cd /d %~dp0\htdocs\
rmdir /Q /S ".\css"
mkdir css
popd

:sass-compile
echo Compiling SASS files...
pushd %CD%
cd /d %~dp0\htdocs\css\
call sass "../../scss/nibblepoker.scss" -q --no-source-map > "nibblepoker.css"
call sass "../../scss/nibblepoker.scss" -q --no-source-map --style compressed > "nibblepoker.min.css"
call sass "../../scss/debugger.scss" -q --no-source-map > "debugger.css"
call sass "../../scss/debugger.scss" -q --no-source-map --style compressed > "debugger.min.css"
popd

:sass-assets
echo Copying assets...
pushd %CD%
cd /d %~dp0
copy ".\bkgds\*.png" ".\htdocs\css\"
popd

:sass-end


:end
