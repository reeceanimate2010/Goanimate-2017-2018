:: opens phpwraper in a standalone batch so that i can use a tool that silently runs batch files
:: this is stupid
:: please help
@echo off
pushd "%~dp0"
title PHP Wrapper Launcher.
pushd .\
echo Starting PHP server for PHPWrapper...
echo:
.\php\php.exe -S 127.0.0.1:6596
echo:
.\ungoogled-chromium\chromium.exe --user-data-dir=the_profile --app=http://localhost:6596 --allow-outdated-plugins
pause & exit
