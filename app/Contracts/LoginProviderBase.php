<?php

namespace LoginMeNow\App\Contracts;

use LoginMeNow\App\DTO\ProviderSettingsFieldsDTO;
use LoginMeNow\App\DTO\ProviderUserDataDTO;

interface LoginProviderBase {

	public function boot();

	/**
	 * Unique Key of the Login Provider, like: email-magic-link
	 */
	public static function get_key(): string;

	/**
	 * Name of the Login Provider, like: Email Magic Link
	 */
	public static function get_name(): string;

	/**
	 * Login Button to be displayed on the login page
	 */
	public static function get_button(): string;

	/**
	 * Settings Fields to be displayed on the settings page
	 */
	public function get_settings(): ProviderSettingsFieldsDTO;

	/**
	 * Get user information from the provider
	 */
	public function user_data(): ProviderUserDataDTO;
}
