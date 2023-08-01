/* Use PHP-provided URL to current version's build directory instead of root */
import './webpack-public-path';

import App from './app';
import domReady from '@wordpress/dom-ready';
import { createRoot } from '@wordpress/element';

const WP_ADM_PAGE_ROOT_ELEMENT = 'wppbh-app';
const W_ASCI = `
        Welcome to Bluehost!
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@(((((((((@@((((((((((@@(((((((((@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
`;
console.log( W_ASCI );

const WPPBHRender = () => {
	const DOM_ELEMENT = document.getElementById( WP_ADM_PAGE_ROOT_ELEMENT );
	if ( null !== DOM_ELEMENT && 'undefined' !== typeof createRoot ) {
		const root = createRoot( DOM_ELEMENT );
		root.render( <App /> );
	}
};

domReady( WPPBHRender );
