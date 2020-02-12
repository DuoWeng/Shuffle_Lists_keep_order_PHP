#!/bin/bash

echo "first run"

php third.php << AHEREA
AB
CD
AHEREA

echo "first run done"

echo "second run"

php third.php << AHEREA
ABC
DEF
AHEREA

echo "second run done"


