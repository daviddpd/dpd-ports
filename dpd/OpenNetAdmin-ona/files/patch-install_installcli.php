--- install/installcli.php.orig	2018-03-21 18:52:32 UTC
+++ install/installcli.php
@@ -1,7 +1,7 @@
 <?php
 /* -------------------- COMMON HEADER ---------------------- */
 $base = dirname(__FILE__);
-$onabase = dirname($base);
+$onabase = "/usr/local/share/ona"
 ////while ($base and (!is_dir($base.'/include'))) $base = preg_replace('+/[^/]*$+', '', $base);
 $include = $onabase . '/www/include';
 if (!is_dir($include)) { print "ERROR => Couldn't find include folder!\n"; exit; }
