@echo off
setlocal enabledelayedexpansion

:: Going into the script's directory
cd /D "%~dp0"


:dockerize
echo.
echo Preparing the container
echo -----------------------

:dockerize-up
pushd %CD%
docker-compose -f docker-compose.dev.yml up -d --force-recreate
popd

:dockerize-end


:end
