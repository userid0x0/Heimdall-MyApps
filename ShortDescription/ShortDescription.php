<?php namespace App\SupportedApps\ShortDescription;

use Illuminate\Support\Facades\Log;

class ShortDescription extends \App\SupportedApps implements \App\EnhancedApps
{
	public $config;

	function __construct()
	{
	}

	public function test()
	{
		echo "OK";
	}

	public function livestats()
	{
		$status = "inactive";

		$data = [];
		$data["shortdesc"] = $this->config->shortdesc;

		return parent::getLiveStats($status, $data);
	}

	public function url($endpoint)
	{
		return $this->config->url;
	}
}
