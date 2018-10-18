# dpd-ports
David's FreeBSD Ports

##
Add  this subdir to @/usr/ports/Makefile@
```
	SUBDIR += dpd
```

Also, make.conf in /etc/ or /usr/local/etc/poudriere.d  add:
```
VALID_CATEGORIES+=dpd
```
