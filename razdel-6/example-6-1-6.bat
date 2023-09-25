@echo off 
set /a a = 5
set /a b = 1234566789
echo Outside setlocal a = %a%
echo Outside setlocal b = %b%

SETLOCAL
set /a b = 6
echo Inside setlocal a = %a%
echo Inside setlocal b = %b%
ENDLOCAL

SETLOCAL
set /a b = 7
echo Inside setlocal a = %a%
echo Inside setlocal b = %b%
ENDLOCAL

echo Outside setlocal a = %a%
echo Outside setlocal b = %b%
