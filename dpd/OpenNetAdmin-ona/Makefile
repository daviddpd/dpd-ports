# $FreeBSD$

PORTNAME=	OpenNetAdmin-ona
PORTVERSION=	18.1.1	
DISTNAME=	ona-${PORTVERSION}
DISTVERSIONPREFIX=v
CATEGORIES=	dpd 

MAINTAINER=	dpd@dpdtech.com
COMMENT=	OpenNetAdmin IP Address Management (IPAM) system http://opennetadmin.com

LICENSE=	GPLv2


USE_GITHUB=	yes
GH_ACCOUNT=	opennetadmin
GH_PROJECT=	ona

NO_ARCH=	yes
NO_BUILD=	yes
ONABASE_PATH=	${PREFIX}/share/ona
ONABASE_FILE=	${PREFIX}/etc/onabase

do-install:
	(cd ${WRKSRC} && ${COPYTREE_SHARE} . ${STAGEDIR}${PREFIX}/share/ona)
	${RLN} ${STAGEDIR}${PREFIX}/share/ona/www ${STAGEDIR}${PREFIX}/www/ona
	${MKDIR} ${STAGEDIR}${PREFIX}/etc/ona/
	${MV} ${STAGEDIR}${PREFIX}/share/ona/www/local/config  ${STAGEDIR}${PREFIX}/etc/ona/
	${RLN} ${STAGEDIR}${PREFIX}/etc/ona/config ${STAGEDIR}${PREFIX}/share/ona/www/local
	#${CHOWN} -R www:www ${PREFIX}/etc/ona/config 
	#${CHMOD} -R 775 ${STAGEDIR}${PREFIX}/etc/ona/config 
	${MKDIR} ${STAGEDIR}/var/db/ona/nmap_scans
	#${CHOWN} www:www /var/db/ona/nmap_scans


.include <bsd.port.mk>
