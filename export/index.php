<?php

include "contracts/typecontract.php";
include "types/excel.php";
include "types/word.php";
include "types/pdf.php";
include "export.php";


$export = new export("pdf");

$export->print();