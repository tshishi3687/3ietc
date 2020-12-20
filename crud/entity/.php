<?php

    require_once 'role.php';

    $prf = new Roles();

    $prf->roleroleName="proff";

    echo $prf->getRoleName();