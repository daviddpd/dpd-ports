# $FreeBSD$

PORTNAME=	mod_auth_pubtkt_dpd
PORTVERSION=	0.9.1
CATEGORIES=	dpd www
MASTER_SITES=	https://neon1.net/mod_auth_pubtkt/
PKGNAMEPREFIX=	${APACHE_PKGNAMEPREFIX}
DIST_SUBDIR=	apache2

MAINTAINER=	dpd@dpdsystems.com
COMMENT=	Apache module to provide public key ticket based authentication

CONFLICTS=	www/mod_auth_pubtkt

USES=		apache:2.2+
AP_FAST_BUILD=	yes
AP_GENPLIST=	yes
SRC_FILE=	src/mod_auth_pubtkt.c

USE_GITHUB=     yes
GH_PROJECT=	mod_auth_pubtkt
GH_ACCOUNT=     daviddpd
GH_TAGNAME=     47c68aa

.include <bsd.port.pre.mk>

.if ${APACHE_VERSION} > 2.2
AP_EXTRAS=	-DAPACHE24
.else
AP_EXTRAS=	-DAPACHE22
.endif

.include <bsd.port.post.mk>
