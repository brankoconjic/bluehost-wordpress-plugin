import { 
	HomeIcon,
	ShoppingBagIcon,
	WrenchScrewdriverIcon,
	BoltIcon, 
	AdjustmentsHorizontalIcon,
	BuildingStorefrontIcon,
	QuestionMarkCircleIcon } 
from '@heroicons/react/24/outline';
import { Route, Routes } from 'react-router-dom';
import { __ } from '@wordpress/i18n';
import Home from '../pages/home';
import Marketplace from '../pages/marketplace';
import Performance from '../pages/performance';
import Settings from '../pages/settings';
import Staging from '../pages/staging';
import Example from '../pages/example';
import Store from '../pages/ecommerce/page';

const addPartialMatch = (prefix, path) =>
  prefix === path ? `${prefix}/*` : path;

const HelpDeskAI = (e) => {
	e.preventDefault();
	return alert('Open AI Help');
}

export const AppRoutes = () => {
	return (
		<Routes>
			{ routes.map( ( page ) => (
				<Route
					end
					key={ page.name }
					path={ addPartialMatch(
						'/marketplace',
						addPartialMatch( '/store', page.name )
					)}
					element={ <page.Component /> }
				/>
			) ) }
			<Route path="/" element={ <Home /> } />
			<Route
				path="*"
				element={
					<main style={ { padding: '1rem' } }>
						<p>
							{ __( "There's nothing here!", 'wp-plugin-bluehost' ) }
						</p>
					</main>
				}
			/>
		</Routes>
	);
};

const topRoutePaths = [
	'/home',
	'/store',
	'/marketplace',
	'/performance',
	'/settings',
	'/staging',
	'/example',
];
const utilityRoutePaths = [ '/help' ];

export const routes = [
	{
		name: '/home',
		title: __( 'Home', 'wp-plugin-bluehost' ),
		Component: Home,
		Icon: HomeIcon,
	},
	{
		name: '/store',
		title: __( 'Store', 'wp-plugin-bluehost' ),
		Component: Store,
		Icon: BuildingStorefrontIcon,
		subRoutes: [
			{
				name: '/store/products',
				title: __( 'Products & Services', 'wp-plugin-bluehost' ),
			},
			{
				name: '/store/details',
				title: __( 'Store Details', 'wp-plugin-bluehost' ),
			},
		],
	},
	{
		name: '/marketplace',
		title: __( 'Marketplace', 'wp-plugin-bluehost' ),
		Component: Marketplace,
		Icon: ShoppingBagIcon,
		subRoutes: [
			{
				name: '/marketplace/featured',
				title: __( 'Featured', 'wp-plugin-bluehost' ),
			},
			{
				name: '/marketplace/services',
				title: __( 'Services', 'wp-plugin-bluehost' ),
			},
			{
				name: '/marketplace/ecommerce',
				title: __( 'eCommerce', 'wp-plugin-bluehost' ),
			},
			{
				name: '/marketplace/seo',
				title: __( 'SEO', 'wp-plugin-bluehost' ),
			},
			{
				name: '/marketplace/security',
				title: __( 'Security', 'wp-plugin-bluehost' ),
			},
			{
				name: '/marketplace/themes',
				title: __( 'Themes', 'wp-plugin-bluehost' ),
			},

		],
	},
	{
		name: '/staging',
		title: __( 'Staging', 'wp-plugin-bluehost' ),
		Component: Staging,
		Icon: WrenchScrewdriverIcon,
	},
	{
		name: '/performance',
		title: __( 'Performance', 'wp-plugin-bluehost' ),
		Component: Performance,
		Icon: BoltIcon,
	},
	{
		name: '/settings',
		title: __( 'Settings', 'wp-plugin-bluehost' ),
		Component: Settings,
		Icon: AdjustmentsHorizontalIcon,
	},
	{
		name: '/example',
		title: __( 'Example', 'wp-plugin-bluehost' ),
		Component: Example,
		Icon: AdjustmentsHorizontalIcon,
	},
	{
		name: '/help',
		title: __( 'Help', 'wp-plugin-bluehost' ),
		Icon: QuestionMarkCircleIcon,
		action: HelpDeskAI,
	},
];

export const topRoutes = _filter( routes, ( route ) =>
	topRoutePaths.includes( route.name )
);

export const utilityRoutes = _filter( routes, ( route ) =>
	utilityRoutePaths.includes( route.name )
);

export default AppRoutes;