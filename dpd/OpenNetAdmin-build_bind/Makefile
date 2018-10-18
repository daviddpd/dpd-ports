# $FreeBSD$

PORTNAME=	OpenNetAdmin-build_bind
PORTVERSION=	20160610	
DISTNAME=	build_bind-${PORTVERSION}
#DISTVERSIONPREFIX=v
CATEGORIES=	dpd 

MAINTAINER=	dpd@dpdtech.com
COMMENT=	OpenNetAdmin plugin to manage and build BIND DNS server configurations

LICENSE=	GPLv2


USE_GITHUB=	yes
GH_ACCOUNT=	opennetadmin
GH_PROJECT=	build_bind
GH_TAGNAME=	fe417d7

NO_ARCH=	yes
NO_BUILD=	yes
ONABASE_PATH=	${PREFIX}/share/ona
ONABASE_FILE=	${PREFIX}/etc/onabase

do-install:
	(cd ${WRKSRC} && ${COPYTREE_SHARE} . ${STAGEDIR}${ONABASE_PATH}/www/plugins/build_bind )
	${RLN} ${STAGEDIR}${ONABASE_PATH}/www/plugins/build_bind/build_bind ${STAGEDIR}${PREFIX}/bin/build_bind
	${CP} ${STAGEDIR}${ONABASE_PATH}/www/plugins/build_bind/build_bind.conf.sample ${STAGEDIR}${PREFIX}/etc/
#	${MKDIR} ${STAGEDIR}${PREFIX}/etc/ona/
#	${MV} ${STAGEDIR}${PREFIX}/share/ona/www/local/config  ${STAGEDIR}${PREFIX}/etc/ona/
#	${RLN} ${STAGEDIR}${PREFIX}/etc/ona/config ${STAGEDIR}${PREFIX}/share/ona/www/local
#	${CHOWN} -R www:www ${STAGEDIR}${PREFIX}/etc/ona/config 
#	${CHMOD} -R 775 ${STAGEDIR}${PREFIX}/etc/ona/config 
#	${MKDIR} ${STAGEDIR}/var/db/ona/nmap_scans
#	${CHOWN} www:www ${STAGEDIR}/var/db/ona/nmap_scans


.include <bsd.port.mk>
