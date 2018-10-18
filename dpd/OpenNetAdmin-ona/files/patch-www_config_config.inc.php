--- www/config/config.inc.php.orig	2018-03-21 18:50:58 UTC
+++ www/config/config.inc.php
@@ -15,7 +15,7 @@
 $base;
 $include;
 
-$onabase = dirname($base);
+$onabase = "/usr/local/share/ona"
 
 
 //$baseURL = preg_replace('+' . dirname($_SERVER['DOCUMENT_ROOT']) . '+', '', $base);
