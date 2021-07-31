:: opens phpwraper in a standalone batch so that i can use a tool that silently runs batch files
:: this is stupid
:: please help
@echo off
pushd "%~dp0"
title PHP Wrapper Launcher.
pushd \phpwrapper
echo Starting PHP server for PHPWrapper...
echo:
..\..\utilities\php\php.exe -S 127.0.0.1:8080
echo:
pause & exit
