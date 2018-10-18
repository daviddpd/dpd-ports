# $FreeBSD$

PORTNAME=	OpenNetAdmin-dcm
PORTVERSION=	20160610
DISTNAME=	dcm-${GH_TAGNAME}
PORTREVISION=   1
DISTVERSIONPREFIX=v
CATEGORIES=	dpd 

MAINTAINER=	dpd@dpdtech.com
COMMENT=	DCM.pl command line interface for OpenNetAdmin http://opennetadmin.com

LICENSE=	GPLv2


USE_GITHUB=	yes
GH_ACCOUNT=	opennetadmin
GH_PROJECT=	dcm
GH_TAGNAME=	214231d

NO_ARCH=	yes
NO_BUILD=	yes
STRIP=
USES=shebangfdpd
SHEBANG_FILES=bin/dcm.pl
#PATCHFILES=patch-bin-dcm.pl

do-install:
	${MKDIR} ${STAGEDIR}${PREFIX}/share/dcm/
	${INSTALL_DATA} ${WRKSRC}/dcm-completion ${STAGEDIR}${PREFIX}/share/dcm/
	${INSTALL_DATA} ${WRKSRC}/README.md ${STAGEDIR}${PREFIX}/share/dcm/
	${INSTALL_DATA} ${WRKSRC}/etc/dcm.conf ${STAGEDIR}${PREFIX}/share/dcm/
	${INSTALL_DATA} ${WRKSRC}/etc/dcm.conf ${STAGEDIR}${PREFIX}/etc
	${INSTALL_SCRIPT} ${WRKSRC}/bin/dcm.pl ${STAGEDIR}${PREFIX}/bin
	${MV} ${STAGEDIR}${PREFIX}/etc/dcm.conf ${STAGEDIR}${PREFIX}/etc/dcm.conf.sample


.include <bsd.port.mk>
