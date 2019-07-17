<?php namespace MastodonApi\Entities;

/**
 * Class AccountField
 *
 * @package MastodonApi\Entities
 */
class AccountField
{
	/**
	 * @var string $name
	 */
	public $name;

	/**
	 * @var string $value
	 */
	public $value;

	/**
	 * @var string $verified_at
	 */
	public $verified_at;

	public function __construct(array $data)
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
