<?php

namespace Craft;

class ReadonlyPlugin extends BasePlugin
{
	private $version = '1.0.0';
	private $description = 'Simple readonly fields for Craft CMS.';
	private $developer = 'Taylor Daughtry';
	private $developerUrl = 'https://github.com/taylordaughtry';

	public function getVersion()
	{
		return $this->version;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getDeveloper()
	{
		return $this->developer;
	}

	public function getdeveloperUrl()
	{
		return $this->developerUrl;
	}
}