<?php
/**
 * SAML 1.1 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * This is just an example:
 */
$metadata['https://sp.shiblab.feide.no'] = array(
	'AssertionConsumerService' => 'http://sp.shiblab.feide.no/Shibboleth.sso/SAML/POST',
	'audience'                 => 'urn:mace:feide:shiblab',
	'base64attributes'         => FALSE,
);

$metadata['http://localhost/simplesaml/www/module.php/saml/sp/metadata.php/default-sp'] = array(
    'AssertionConsumerService' => 'http://localhost/simplesaml/www/module.php/saml/sp/saml2-acs.php/default-sp',
    'SingleLogoutService'      => 'http://localhost/simplesaml/www/module.php/saml/sp/saml2-logout.php/default-sp',
);

