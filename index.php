<?php

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "podolskii/MyLog.php";
include "podolskii/Equation.php";
include "podolskii/QuEquation.php";

ini_set("display_errors", 1);
error_reporting (-1);
\podolskii\MyLog::log("12312313");
\podolskii\MyLog::write();

?>