:: Starts up PHPWrapper
:: Author: octanuary#6596
:: Recreation Author: joseph the animator#2292
:: License: GPLv3
set PWRAP_VER=0.1.1
title PHPWrapper v%PWRAP_VER%

:: Initialize (stop command spam, clean screen, make variables work, set to UTF-8)
@echo off && cls
SETLOCAL ENABLEDELAYEDEXPANSION
chcp 65001 >nul

:: Move to base folder, and make sure it worked
pushd "%~dp0"
if not exist ungoogled-chromium ( goto starting_error )
if not exist notinstalled ( goto starting_error )
goto no_start_error
:starting_error
echo It doesn't seem like this script is in the PHPWrapper lvm.
goto end
:no_start_error

if exist notinstalled (
ren "notinstalled" "installed"
)

:: Option
echo:
echo Enter 1 to start with options
echo Enter 2 to start without options
echo Enter 0 to exit
echo:
:reask_a
set /p OPTION= What would you like to do? 
if !OPTION!==1 ( goto launch )
if !OPTION!==2 ( goto launch_no_option )
if !OPTION!==0 ( goto end )
echo You have not chosen a valid option.
goto reask_a


:launch_no_option
:: Launch ungoogled-chromium
title PHPWrapper v!PWRAP_VER! [Starting...]
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo this project was adapted by Joseph Animate 2021.
echo Launching ungoogled-chromium...
pushd ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --app=http://localhost:6596 --allow-outdated-plugins
popd

:: Start PHPWrapper
pushd phpwrapper
echo:
echo Starting PHPWrapper...
echo:
call php\php.exe -S 127.0.0.1:6596
echo:
popd
echo PHP has been closed.
goto end

:: Install Flash Player
if !VERBOSEWRAPPER!==y ( echo Checking for Flash installation... )
if exist "!windir!\SysWOW64\Macromed\Flash\*pepper.exe" set FLASH_CHROMIUM_DETECTED=y
if exist "!windir!\System32\Macromed\Flash\*pepper.exe" set FLASH_CHROMIUM_DETECTED=y
if exist "!windir!\SysWOW64\Macromed\Flash\*plugin.exe" set FLASH_FIREFOX_DETECTED=y
if exist "!windir!\System32\Macromed\Flash\*plugin.exe" set FLASH_FIREFOX_DETECTED=y
if !BROWSER_TYPE!==chrome (
	if !FLASH_CHROMIUM_DETECTED!==n (
		echo Flash for Chrome could not be found.
		echo:
		set NEEDTHEDEPENDERS=y
		set ADMINREQUIRED=y
		goto flash_checked
	) else (
		echo Flash is installed.
		echo:
		set FLASH_DETECTED=y
		goto flash_checked
	)
)
if !BROWSER_TYPE!==firefox (
	if !FLASH_FIREFOX_DETECTED!==n (
		echo Flash for Firefox could not be found.
		echo:
		set NEEDTHEDEPENDERS=y
		set ADMINREQUIRED=y
		goto flash_checked
	) else (
		echo Flash is installed.
		echo:
		set FLASH_DETECTED=y
		goto flash_checked
	)
)
:: just assume chrome it's what everyone uses
if !BROWSER_TYPE!==n (
	if !FLASH_CHROMIUM_DETECTED!==n (
		echo Flash for Chrome could not be found.
		echo:
		set NEEDTHEDEPENDERS=y
		set ADMINREQUIRED=y
		goto flash_checked
	) else (
		echo Flash is installed.
		echo:
		set FLASH_DETECTED=y
		goto flash_checked
	)
)
:flash_checked

:: http-server
if !VERBOSEWRAPPER!==y ( echo Checking for http-server installation... )
npm list -g | findstr "http-server" >nul
if !errorlevel! == 0 (
	echo http-server is installed.
	echo:
	set HTTPSERVER_DETECTED=y
) else (
	echo http-server could not be found.
	echo:
	set NEEDTHEDEPENDERS=y
)
:httpserver_checked

:: HTTPS cert
if !VERBOSEWRAPPER!==y ( echo Checking for HTTPS certificate... )
certutil -store -enterprise root | findstr "WOCRTV3" >nul
if !errorlevel! == 0 (
	echo HTTPS cert installed.
	echo:
	set HTTPSCERT_DETECTED=y
) else (
	:: backup check in case non-admin method used
	if exist "utilities\checks\httpscert.txt" (
		echo HTTPS cert probably installed.
		echo:
		set HTTPSCERT_DETECTED=y
	) else (
		echo HTTPS cert could not be found.
		echo:
		set NEEDTHEDEPENDERS=y
	)
)
popd

:: Check for admin if installing Flash
:: Skipped in Safe Mode, just in case anyone is running Wrapper in safe mode... for some reason
:: and also because that was just there in the code i used for this and i was like "eh screw it why remove it"
if !ADMINREQUIRED!==y (
	if !VERBOSEWRAPPER!==y ( echo Checking for Administrator rights... && echo:)
	if /i not "!SAFE_MODE!"=="y" (
		fsutil dirty query !systemdrive! >NUL 2>&1
		if /i not !ERRORLEVEL!==0 (
			color cf
			if !VERBOSEWRAPPER!==n ( cls )
			echo:
			echo ERROR
			echo:
			if !FLASH_DETECTED!==n (
					echo PHPWrapper needs to install Flash
          
          )
          
			echo To do this, it must be started with Admin rights.
			echo:
			echo Close this window and re-open Wrapper: Offline as an Admin.
			echo ^(right-click start_wrapper.bat and click "Run as Administrator"^)
			echo:
				pause
				goto postadmincheck
			)
			pause
			exit
		)
	)
	if !VERBOSEWRAPPER!==y ( echo Admin rights detected. && echo:)
)
:postadmincheck

:: Flash Player
if !FLASH_DETECTED!==n (
	:start_flash_install
	echo Installing Flash Player...
	echo:
	if !BROWSER_TYPE!==n (
		:: Ask what type of browser is being used.
		echo What web browser do you use? If it isn't here,
		echo look up whether it's based on Chromium or Firefox.
		echo If it's not based on either, then
		echo Wrapper: Offline will not be able to install Flash.
		echo Unless you know what you're doing and have a
		echo version of Flash made for your browser, please
		echo install a Chrome or Firefox based browser.
		echo:
		echo Enter 1 for Chrome
		echo Enter 2 for Firefox
		echo Enter 3 for Edge
		echo Enter 4 for Opera
		echo Enter 5 for Brave
		echo Enter 6 for Chrome-based browser
		echo Enter 7 for Firefox-based browser
		echo Enter 0 for a non-standard browser ^(skips install^)
		:browser_ask
		set /p FLASHCHOICE=Response:
		echo:
		if "!flashchoice!"=="1" goto chromium_chosen
		if "!flashchoice!"=="2" goto firefox_chosen
		if "!flashchoice!"=="3" goto chromium_chosen
		if "!flashchoice!"=="4" goto chromium_chosen
		if "!flashchoice!"=="5" goto chromium_chosen
		if "!flashchoice!"=="6" goto chromium_chosen
		if "!flashchoice!"=="7" goto firefox_chosen
		if "!flashchoice!"=="0" echo Flash will not be installed.&& goto after_flash_install
		echo You must pick a browser.&& goto browser_ask

		:chromium_chosen
		set BROWSER_TYPE=chrome && if !VERBOSEWRAPPER!==y ( echo Chromium-based browser picked. && echo:) && goto escape_browser_ask

		:firefox_chosen
		set BROWSER_TYPE=firefox && if !VERBOSEWRAPPER!==y ( echo Firefox-based browser picked. ) && goto escape_browser_ask
	)

	:escape_browser_ask
	echo To install Flash Player, PHPWrapper must kill any currently running web browsers.
	echo Please make sure any work in your browser is saved before proceeding.
	echo Wrapper: Offline will not continue installation until you press a key.
	echo:
	pause
	echo:

	:: Summon the Browser Slayer
	if !DRYRUN!==y (
		echo The users brought down the batch script upon the Browser Slayer, and in his defeat entombed him in the unactivated code.
		goto lurebrowserslayer
	)
	echo Rip and tear, until it is done.
	for %%i in (firefox,palemoon,iexplore,microsoftedge,chrome,chrome64,opera,brave) do (
		if !VERBOSEWRAPPER!==y (
			 taskkill /f /im %%i.exe /t
			 wmic process where name="%%i.exe" call terminate
		) else (
			 taskkill /f /im %%i.exe /t >nul
			 wmic process where name="%%i.exe" call terminate >nul
		)
	)
	:lurebrowserslayer
	echo:

	if !BROWSER_TYPE!==chrome (
		echo Starting Flash for Chrome installer...
		if not exist "installers\flash_windows_chromium.msi" (
			echo ...erm. Bit of an issue there actually. The installer doesn't exist.
			echo A normal copy of PHPWrapper should come with one.
			echo You may be able to find a copy on this website:
			echo https://helpx.adobe.com/flash-player/kb/archived-flash-player-versions.html
			echo Although Flash is needed, Wrapper will continue launching.
			pause
		)
		if !DRYRUN!==n ( msiexec /i "installers\flash_windows_chromium.msi" !INSTALL_FLAGS! /quiet )
	)
	if !BROWSER_TYPE!==firefox (
		echo Starting Flash for Firefox installer...
		if not exist "installers\flash_windows_firefox.msi" (
			echo ...erm. Bit of an issue there actually. The installer doesn't exist.
			echo A normal copy of PHPWrapper should come with one.
			echo You may be able to find a copy on this website:
			echo https://helpx.adobe.com/flash-player/kb/archived-flash-player-versions.html
			echo Although Flash is needed, Wrapper will try to install anything else it can.
			pause
			goto after_flash_install
		)
		if !DRYRUN!==n ( msiexec /i "installers\flash_windows_firefox.msi" !INSTALL_FLAGS! /quiet )
	)

	echo Flash has been installed.
	echo:
)
:after_flash_install

:: Launch ungoogled-chromium
:launch
title PHPWrapper v!PWRAP_VER! [Starting...]
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo this project was adapted by Joseph Animate 2021.
echo Launching ungoogled-chromium...
pushd ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --app=http://localhost:6596 --allow-outdated-plugins
popd

:: Launch PHPWrapper in separate window
pushd extras
start /MIN launch.bat
popd

:::::::::::::
:: Options ::
:::::::::::::

title PHPWrapper v!PWRAP_VER!
:cls
cls
echo:
echo Enter 1 to relaunch ungoogled-chromium
echo Enter cls to clear the screen
echo Enter 0 to exit
echo:
:reask_b
set /p OPTION= What would you like to do? 
if "!OPTION!"=="1" goto reopen_chromium
if /i "!OPTION!"=="cls" goto cls
if "!OPTION!"=="0" goto end
echo You have not chosen a valid option.
goto reask_b


:reopen_chromium
:: Launch ungoogled-chromium
echo:
echo PHPWrapper v!PWRAP_VER! is starting...
echo A project from Octanuary
echo this project was adapted by Joseph Animate 2021.
echo Launching ungoogled-chromium...
pushd dependencies\ungoogled-chromium
start chromium.exe --user-data-dir=the_profile --allow-outdated-plugins
popd
echo Chromium has been opened.
goto reask_b

:end
echo Closing script...
pause & exit
