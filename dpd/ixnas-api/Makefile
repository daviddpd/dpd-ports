# $FreeBSD$

PORTNAME=	dpdnas-api
PORTVERSION=	0.1
DISTVERSIONPREFIX=v
CATEGORIES=	dpd sysutils

PKGNAMEPREFIX=  ${PYTHON_PKGNAMEPREFIX}

CONFLICTS=	*dpdnas-api*
MAINTAINER=	dpd@dpdtech.com
COMMENT=	Basic scripts for a subset of FreeNAS/TrueNAS API functions

LICENSE=	BSD2CLAUSE

OPTIONS_DEFINE=	EXAMPLES
EXAMPLES_DESC=	Install example guest templates

RUN_DEPENDS=	${PYTHON_PKGNAMEPREFIX}requests>=0:www/py-requests@${PY_FLAVOR}
USES=           python

USE_GITHUB=	yes
GH_ACCOUNT=	daviddpd
GH_PROJECT=	dpdnas-api
GH_TAGNAME=	0.2

NO_ARCH=	yes
NO_BUILD=	yes

do-install:
	${INSTALL_SCRIPT} ${WRKSRC}/config/dpdnas-api.sample.ini ${STAGEDIR}${PREFIX}/etc/
	(cd ${WRKSRC}/bin/ && ${COPYTREE_BIN} . ${STAGEDIR}${PREFIX}/libexec/dpdnas-api)

.include <bsd.port.mk>
