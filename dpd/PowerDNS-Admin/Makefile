# $FreeBSD$

PORTNAME=	PowerDNS-Admin
PORTVERSION=	20161209
PORTREVISION=   1
CATEGORIES=	dpd
PKGNAMEPREFIX=  ${PYTHON_PKGNAMEPREFIX}

MAINTAINER=	dpd@dpdsystems.com
COMMENT=	PowerDNS Web-GUI - Built by Flask

LICENSE=	MIT
LICENSE_FILE=	${WRKSRC}/LICENSE

USE_GITHUB=	yes
GH_ACCOUNT=	ngoduykhanh
GH_TAGNAME=	e49510c

NO_ARCH=	yes
NO_BUILD=	yes
NO_INSTALL=	yes

USES=           python:2.7+
USE_PYTHON=     autoplist
RUN_DEPENDS= ${PYTHON_PKGNAMEPREFIX}Flask-SQLAlchemy>0:databases/py-flask-sqlalchemy \
            ${PYTHON_PKGNAMEPREFIX}sqlalchemy-migrate>0:databases/py-sqlalchemy-migrate \
            ${PYTHON_PKGNAMEPREFIX}configobj>0:devel/py-configobj \
            ${PYTHON_PKGNAMEPREFIX}Flask-Babel>0:devel/py-flask-babel \
            ${PYTHON_PKGNAMEPREFIX}requestsexceptions>0:devel/py-requestsexceptions \
            ${PYTHON_PKGNAMEPREFIX}dnspython>0:dns/py-dnspython \
            ${PYTHON_PKGNAMEPREFIX}bcrypt>0:security/py-bcrypt \
            ${PYTHON_PKGNAMEPREFIX}Flask-HTTPAuth>0:security/py-flask-httpauth \
            ${PYTHON_PKGNAMEPREFIX}pyotp>0:security/py-pyotp \
            ${PYTHON_PKGNAMEPREFIX}requests-kerberos>0:security/py-requests-kerberos \
            ${PYTHON_PKGNAMEPREFIX}qrcode>0:textproc/py-qrcode \
	    ${PYTHON_PKGNAMEPREFIX}Flask>0:www/py-flask \
            ${PYTHON_PKGNAMEPREFIX}Flask-Admin>0:www/py-flask-admin \
            ${PYTHON_PKGNAMEPREFIX}Flask-Assets>0:www/py-flask-assets \
            ${PYTHON_PKGNAMEPREFIX}Flask-Bootstrap>0:www/py-flask-bootstrap \
            ${PYTHON_PKGNAMEPREFIX}Flask-Cache>0:www/py-flask-cache \
            ${PYTHON_PKGNAMEPREFIX}Flask-Compress>0:www/py-flask-compress \
            ${PYTHON_PKGNAMEPREFIX}Flask-Cors>0:www/py-flask-cors \
            ${PYTHON_PKGNAMEPREFIX}Flask-FlatPages>0:www/py-flask-flatpages \
            ${PYTHON_PKGNAMEPREFIX}Flask-Login>0:www/py-flask-login \
            ${PYTHON_PKGNAMEPREFIX}Flask-OAuthlib>0:www/py-flask-oauthlib \
            ${PYTHON_PKGNAMEPREFIX}Flask-Principal>0:www/py-flask-principal \
            ${PYTHON_PKGNAMEPREFIX}Flask-RESTful>0:www/py-flask-restful \
            ${PYTHON_PKGNAMEPREFIX}Flask-SocketIO>0:www/py-flask-socketio \
            ${PYTHON_PKGNAMEPREFIX}Flask-Sockets>0:www/py-flask-sockets \
            ${PYTHON_PKGNAMEPREFIX}Flask-Uploads>0:www/py-flask-uploads \
            ${PYTHON_PKGNAMEPREFIX}Flask-WTF>0:www/py-flask-wtf \
            ${PYTHON_PKGNAMEPREFIX}requests>0:www/py-requests \
            ${PYTHON_PKGNAMEPREFIX}requests-futures>0:www/py-requests-futures \
            ${PYTHON_PKGNAMEPREFIX}requests-oauthlib>0:www/py-requests-oauthlib \
            ${PYTHON_PKGNAMEPREFIX}requests-toolbelt>0:www/py-requests-toolbelt \
	    ${PYTHON_PKGNAMEPREFIX}MySQLdb>0:databases/py-MySQLdb \
            ${PYTHON_PKGNAMEPREFIX}ldap>0:net/py-ldap


do-install:
	${MKDIR} ${STAGEDIR}${WWWDIR}
	cd ${WRKSRC} && ${COPYTREE_SHARE} . ${STAGEDIR}${WWWDIR}

.include <bsd.port.mk>
