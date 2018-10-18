--- install/install.php.orig	2018-03-21 18:52:01 UTC
+++ install/install.php
@@ -10,7 +10,7 @@ $base = dirname(__FILE__);
 // Init and setup some variables.
 $text = '';
 $status = 0;
-$onabase = dirname($base);
+$onabase = "/usr/local/share/ona"
 $runinstall = $onabase.'/www/local/config/run_install';
 $xmlfile_tables = $base.'/ona-table_schema.xml';
 $xmlfile_data = $base.'/ona-data.xml';
