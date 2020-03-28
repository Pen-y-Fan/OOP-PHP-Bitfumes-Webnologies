<?php
include "fns.php";
include "sns.php";

use second\A as NewA;

$a = new A; // fully qualified class name FQCN
// I am at Global name space

$sns = new NewA; // unqualified class name
// I am at second name space
