# $FreeBSD$

PORTNAME=	vm-bhyve-iscsi
PORTVERSION=	1.2.1
DISTVERSIONPREFIX=v
CATEGORIES=	dpd sysutils
PORTREVISION=   1

CONFLICTS=	vm-bhyve vm-bhyve-devel

MAINTAINER=	dpd@dpdtech.com
COMMENT=	Management system for bhyve virtual machines with iSCSI Support

LICENSE=	BSD2CLAUSE
LICENSE_FILE=	${WRKSRC}/LICENSE

OPTIONS_DEFINE=	EXAMPLES
EXAMPLES_DESC=	Install example guest templates

USE_GITHUB=	yes
GH_ACCOUNT=	daviddpd
GH_PROJECT=	vm-bhyve
GH_TAGNAME=	v1.2.2

NO_ARCH=	yes
NO_BUILD=	yes

do-install:
	${INSTALL_SCRIPT} ${WRKSRC}/vm ${STAGEDIR}${PREFIX}/sbin
	${INSTALL_SCRIPT} ${WRKSRC}/rc.d/vm ${STAGEDIR}${PREFIX}/etc/rc.d
	(cd ${WRKSRC}/lib/ && ${COPYTREE_SHARE} . ${STAGEDIR}${PREFIX}/lib/vm-bhyve)
	(cd ${WRKSRC}/sample-templates/ && ${COPYTREE_SHARE} . ${STAGEDIR}${EXAMPLESDIR})
	${INSTALL_MAN} ${WRKSRC}/vm.8 ${STAGEDIR}${MAN8PREFIX}/man/man8

.include <bsd.port.mk>
