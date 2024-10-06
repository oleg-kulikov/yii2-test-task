<?php

$seconds = 86400 * 30; // 86400 is 24 hours in seconds. Therefore, this is 30 days.
$cfg['LoginCookieValidity'] = $seconds;
ini_set('session.gc_maxlifetime', $seconds);
