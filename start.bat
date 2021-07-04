:: Important stuff
@echo off && cls
title PHPWrapper

::::::::::::::::::::
:: Initialization ::
::::::::::::::::::::

:: Terminate existing php apps
TASKKILL /IM php.exe /F 2>nul
cls

::::::::::::::::::::::
:: Start PHPWrapper ::
::::::::::::::::::::::

:: Check for installation
if exist notinstalled (
	echo PHPWrapper is not installed! Installing...
	call npm install
	ren "notinstalled" "installed"
	cls
	goto start
) else (
	goto start
)

:: Run npm start
:start
echo PHPWrapper is now starting...
echo Please navigate to http://localhost on your browser.
npm start
