<?php
require "vendor/autoload.php";
use Carbon\Carbon;

printf("A data e hora de agora é: %s", Carbon::now('America/Campo_Grande')->format('d/m/Y - H:i:s'));