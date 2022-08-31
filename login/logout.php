<?php

setcookie("login","mohamed",time() - 60 * 60 * 24,"/");


header("location: login.php");
