<?php

namespace LM\Services;

/**
 * Cache Service
 * For better cache service implementation,
 * "Implementing Laravel" guides me (https://leanpub.com/implementinglaravel).
 * @author Hein Zaw Htet
 */

use Illuminate\Cache\CacheManager;
use LM\Interfaces\CacheInterface;

class CacheService implements CacheInterface {
	protected $cache;
	protected $cacheKey;
	protected $minutes;

	public function __construct(CacheManager $cache, $cacheKey, $minutes = null)
	{
		$this->cache = $cache;
		$this->cacheKey = $cacheKey;
		$this->minutes = $minutes;
	}

	public function get($key)
	{
		return $this->cache->section($this->cacheKey)->get($key);
	}

	public function put($key, $value, $minutes = null)
	{
		if (is_null($minutes)) {
			$minutes = $this->minutes;
		}

		return $this->cache->section($this->cacheKey)->put($key, $value, $minutes);
	}

	public function has($key)
	{
		return $this->cache->section($this->cachekey)->($key);
	}


}