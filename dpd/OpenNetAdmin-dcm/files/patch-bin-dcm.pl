--- bin/dcm.pl.orig	2018-03-21 18:09:58 UTC
+++ bin/dcm.pl
@@ -1334,8 +1334,10 @@ sub getPage {
 initialize();
 
 ## Get contents of /etc/onabase, and trim it
-my $onabase =  qx(cat /etc/onabase 2>/dev/null);
-$onabase =~ s/\s+$//;
+#my $onabase =  qx(cat /etc/onabase 2>/dev/null);
+#$onabase =~ s/\s+$//;
+# This is FreeBSD, put the config file in the correct location.
+my $onabase = "/usr/local";
 
 ## Search for a configuration file
 my $homedir = "~";
