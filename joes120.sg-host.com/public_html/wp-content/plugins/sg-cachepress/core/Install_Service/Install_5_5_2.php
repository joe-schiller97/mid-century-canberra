<?php
namespace SiteGround_Optimizer\Install_Service;
use SiteGround_Optimizer\Htaccess\Htaccess;
use SiteGround_Optimizer\Options\Options;
use SiteGround_Optimizer\Helper\Helper;

class Install_5_5_2 extends Install {

	/**
	 * The default install version. Overridden by the installation packages.
	 *
	 * @since 5.5.2
	 *
	 * @access protected
	 *
	 * @var string $version The install version.
	 */
	protected static $version = '5.5.2';

	public function __construct() {
		$this->htaccess_service = new Htaccess();
	}

	/**
	 * Run the install procedure.
	 *
	 * @since 5.5.2
	 */
	public function install() {

		if (
			Options::is_enabled( 'siteground_optimizer_enable_browser_caching' ) &&
			! Helper::is_siteground()
		) {
			$this->htaccess_service->enable( 'browser-caching' );
		}
	}
}
