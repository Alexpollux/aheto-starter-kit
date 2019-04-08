<?php
/**
 * The Sample Shortcode.
 *
 * @since      1.0.0
 * @package    Aheto_Kit
 * @subpackage Aheto_Kit
 * @author     Upqode <info@upqode.com>
 */

namespace Aheto_Kit;

use Aheto\Helper;
use Aheto\Shortcode;

defined( 'ABSPATH' ) || exit;

/**
 * Sample class.
 */
class Sample extends Shortcode {

	/**
	 * Setup
	 */
	public function setup() {
		$this->slug        = 'sample';
		$this->title       = esc_html__( 'Starter Kit Sample', 'aheto' );
		$this->icon        = 'fa fa-clock-o';
		$this->description = esc_html__( 'Starter Kit Sample Shortcode', 'aheto' );

		$this->register();
	}

	/**
	 * Set shortcode params
	 */
	public function set_params() {
		$this->params = [
			'title' => [
				'type'    => 'text',
				'heading' => esc_html__( 'Title', 'aheto' ),
			],
		];
	}
}
