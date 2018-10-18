#!/bin/sh
rm -f Makefile 
echo "# \$FreeBSD\$" >> Makefile
echo "    COMMENT = Ports internally for iX System" >> Makefile
echo >> Makefile
for f in `/bin/ls -d1 * | grep -v Makefile | grep -v makemake.sh | xargs `; do
	echo "    SUBDIR += $f" >> Makefile
done
