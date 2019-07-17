<?php namespace MastodonApi\Accounts;

/**
 * Class FollowingRequest
 *
 * @package MastodonApi\Accounts
 */
class FollowingRequest
{
	/**
	 * @var int $limit
	 */
	public $limit = 40;

	public function __construct(array $data = [])
	{
		foreach ($data as $key => $value)
		{
			$this->{$key} = $value;
		}
	}

	public function __set($name, $value)
	{
	}

	public function __get($name)
	{
	}
}
