<?php
if ( ! defined( 'WPINC' ) ) { die; }
?>
<div id="mojo-wrapper" class="<?php echo mm_brand( 'mojo-%s-branding' );?>">
<?php
require_once( MM_BASE_DIR . 'pages/header-small-w-nav.php' );
?>
	<style type="text/css">
	#main.home .panel-body .pull-left.dashicons{
		margin-right: 10px;
		font-size: 24px;
	}
	#main.home .performance-card .dashicons{
		font-size: 64px;
		height: 80px;
		width: 80px;
	}
	#main.home .performance-card p{
		margin: 30px;
	}
	#main.home .container > h2{
		margin-left: 15px;
	}
	.fixed-nav{
		margin-top: 40px;
		position: fixed;
		top: -8px;
		width: 100%;
		z-index: 10;
	}
	</style>
	<main id="main" class="home">
		<div class="container">
			<h2 id="content">Content</h2>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
						<span class="pull-left dashicons dashicons-admin-post"></span>
						<h2>Blog Posts</h2>
						<p>Add blog posts to your site. You can also organize them into categories.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-link btn-sm" href="<?php echo add_query_arg( array( 'taxonomy' => 'category' ), admin_url( 'edit-tags.php' ) ); ?>" target="_blank"><small>Manage Categories</small></a>
							<a class="btn btn-success btn-sm" href="<?php echo admin_url( 'post-new.php' ); ?>" target="_blank">Add New Post</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-admin-page"></span>
						<h2>Pages</h2>
						<p>Add pages to your site.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-success btn-sm" href="<?php echo add_query_arg( array( 'post_type' => 'page' ), admin_url( 'post-new.php' ) ); ?>" target="_blank">Add New Page</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-menu"></span>
						<h2>Menus</h2>
						<p>Help visitors navigate your site with beautiful menus.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="<?php echo admin_url( 'nav-menus.php' ); ?>" target="_blank">Manage</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-cart"></span>
						<h2>Products</h2>
						<p>Sell products and services from your site.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<?php
							if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
								echo '<a class="btn btn-primary btn-sm" href="' . add_query_arg( array( 'post_type' => 'product' ), admin_url( 'edit.php' ) ) . '" target="_blank">Manage Products</a>';
								//edit.php?post_type=product
							} elseif ( is_plugin_inactive( 'woocommerce/woocommerce.php' ) ) {
								echo '<a class="btn btn-primary btn-sm" href="' . admin_url( 'plugins.php' ) .'" target="_blank">Activate WooCommerce</a>';
								//plugins.php
							} else {
								echo '<a class="btn btn-primary btn-sm" href="" target="_blank">Install WooCommerce</a>';
								//plugin-install.php?s=ecommerce&tab=search&type=tag
							}
							?>
						</div>
					</div>
				</div>
			</div>

			<h2 id="design">Design &amp; Build</h2>
			<div class="col-xs-12 col-sm-8">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-admin-customizer"></span>
						<h2>Customizer</h2>
						<p>Customize visual and navigation elements of your site, and preview your changes before going live.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-success btn-sm" href="" target="_blank">Customize</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-admin-appearance"></span>
						<h2>Themes</h2>
						<p>Find a theme that inspires you.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Browse Themes</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-screenoptions"></span>
						<h2>Staging</h2>
						<p>Staging allows you to create a seperate copy of your site that only you can see. You can test new ideas there before going live.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Get Started</a>
						</div>
					</div>
				</div>
			</div>

			<h2 id="traffic">Traffic &amp; Engagement</h2>
			<div class="col-xs-12 col-sm-12">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-share"></span>
						<h2>Social</h2>
						<p>Add social sharing buttons to your site for facebook, twitter, and others, so your visitors can share your content with their friends.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Manage</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-megaphone"></span>
						<h2>Publicize</h2>
						<p>Share your content with your social networks automatically when you publish content on your site.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Configure</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-chart-bar"></span>
						<h2>Stats</h2>
						<p>Stats show you which posts are most popular. You can even stay informed of when you get surges in traffic.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-success btn-sm" href="" target="_blank">View Stats</a>
						</div>
					</div>
				</div>
			</div>

			<h2 id="performance">Performance</h2>
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default panel-body text-center performance-card">
					<div>
					<span class="dashicons dashicons-performance"></span>
						<h2>Page Cache</h2>
						<p>Page Caching allows your server to keep a copy of a page for a short time to dramatically improve speed.</p>
						<div class="col-xs-12 col-sm-12">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Configure</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default panel-body text-center performance-card">
					<div>
					<span class="dashicons dashicons-cloud"></span>
						<h2>CDN</h2>
						<p>A Content Delivery Network will distribute your assets to servers around the globe for faster retrieval.</p>
						<div class="col-xs-12 col-sm-12">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Manage</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="panel panel-default panel-body text-center performance-card">
					<div>
					<div><span class="dashicons dashicons-visibility"></span></div>
						<h2>Photon</h2>
						<p>Photon is an image acceleration service that will resize your images an serve them from a CDN.</p>
						<div class="col-xs-12 col-sm-12">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Learn More</a>
						</div>
					</div>
				</div>
			</div>

			<h2 id="hosting">Hosting</h2>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-desktop"></span>
						<h2>Manage My Sites</h2>
						<p>Manage your site from Bluehost's control panel. You can take backups, keep things secure, and improve performance.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-success btn-sm" href="" target="_blank">Manage</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-email-alt"></span>
						<h2>Email</h2>
						<p>Create accounts, compose, send, and recieve all your email in your Bluehost control panel.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Manage</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-admin-site"></span>
						<h2>Domains</h2>
						<p>Find a new domain and assign it to your site, or start a new site with a new domain.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Find a Domain</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default panel-body">
					<div>
					<span class="pull-left dashicons dashicons-editor-help"></span>
						<h2>Help</h2>
						<p>Need help from the folks at Bluehost? We are here to help 24/7.</p>
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a class="btn btn-primary btn-sm" href="" target="_blank">Help Me</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>
</div>
<script type="text/javascript">
	jQuery(window).scroll(function (event) {
	    console.log(event);
	});
	jQuery( document ).ready( function( $ ) {


		var hashTagActive = "";
	    $( '.scroll' ).on( 'click touchstart' , function ( event ) {
	    	$( '.nav li' ).removeClass( 'active' );
	    	$( this ).parent( 'li' ).addClass( 'active' );
	        if( hashTagActive != this.hash ) {
	            event.preventDefault();
	            var dest = 0;
	            if ( $( this.hash ).offset().top > $( document ).height() - $( window ).height() ) {
	                dest = $( document ).height() - $( window ).height();
	            } else {
	                dest = $( this.hash ).offset().top;
	            }
	            $( 'html,body' ).animate( {
	                scrollTop: dest
	            }, Math.round( dest * 1.5 ), 'swing' );
	            hashTagActive = this.hash;
	        }
	    });
	} );
</script>
