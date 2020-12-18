#!/bin/bash
echo " "
echo "Iniciando proceso automatico."
echo " "

mkdir -p $1
d=$1
 	echo $2 | cat > $d/index.php
	mkdir $d/css
		mkdir $d/css/user
			> $d/css/user/estilos.css
		mkdir $d/css/admin
			> $d/css/admin/estilos.css
	mkdir $d/img
		mkdir $d/img/avatars
		mkdir $d/img/buttons
		mkdir $d/img/products
		mkdir $d/img/pets
	mkdir $d/js
		mkdir $d/js/validations
		> $d/js/validations/login.js
		> $d/js/validations/register.js
		mkdir $d/js/effects
			> $d/js/effects/panels.js
	mkdir $d/tpl
		> $d/tpl/main.tpl
		> $d/tpl/login.tpl
		> $d/tpl/register.tpl
		> $d/tpl/panel.tpl
		> $d/tpl/profile.tpl
		> $d/tpl/crud.tpl
	mkdir $d/php
		> $d/php/create.php
		> $d/php/read.php
		> $d/php/update.php
		> $d/php/delete.php
		> $d/php/dbconnect.php

echo "--------------------------------"
echo "Finalizo el proceso automatico."
echo "--------------------------------"