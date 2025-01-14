<?php
$cfg['ExecTimeLimit'] = 300;
$cfg['MemoryLimit'] = '256M';
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['MaxRows'] = 50;
$cfg['SendErrorReports'] = 'never';
$cfg['ShowDatabasesNavigationAsTree'] = true;
$cfg['NavigationTreeEnableGrouping'] = false;
$cfg['NavigationWidth'] = 240;
$cfg['MaxNavigationItems'] = 100;
$cfg['FirstLevelNavigationItems'] = 100;
$cfg['AllowArbitraryServer'] = false;
$cfg['LoginCookieValidity'] = 1440;
$cfg['DefaultConnectionCollation'] = 'utf8mb4_unicode_ci';

// SSL and Cookie Settings
$cfg['ForceSSL'] = false;
$cfg['PmaAbsoluteUri'] = 'https://ruchicart.com/phpmyadmin/';
$cfg['Cookie_SameSite'] = 'Lax';
$cfg['AuthLog'] = 'syslog';
$cfg['TrustedProxies'] = ['nginx'];  // Trust the nginx proxy

// Session and Cookie Security
$cfg['LoginCookieDeleteAll'] = false;
$cfg['LoginCookieStore'] = 0;
$cfg['LoginCookieRecall'] = true;
$cfg['CookieSameSite'] = 'Lax';
$cfg['EnableAutocompleteForTablesAndColumns'] = true;

// Error Handling
$cfg['Error_Handler']['display'] = false;
$cfg['Error_Handler']['gather'] = false;

// Console Settings
$cfg['Console']['StartHistory'] = false;
$cfg['Console']['AlwaysExpand'] = false;
$cfg['Console']['CurrentQuery'] = false;