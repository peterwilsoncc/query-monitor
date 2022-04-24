<?php
/**
 * HTTP data transfer object.
 *
 * @package query-monitor
 */

class QM_Data_HTTP extends QM_Data {
	/**
	 * @var array<string, array<string, mixed>>
	 * @phpstan-var array<string, array{
	 *   args: array<string, mixed>,
	 *   component: stdClass,
	 *   end: float,
	 *   filtered_trace: array<int, array<string, mixed>>,
	 *   info: array<string, mixed>|null,
	 *   local: bool,
	 *   ltime: float,
	 *   redirected_to?: string,
	 *   response: mixed[]|WP_Error,
	 *   start: float,
	 *   transport: string|null,
	 *   type: int,
	 *   url: string,
	 * }>
	 */
	public $http;

	/**
	 * @var float
	 */
	public $ltime;

	/**
	 * @var array<string, array<int, string>>
	 * @phpstan-var array{
	 *   alert?: array<int, string>,
	 *   warning?: array<int, string>,
	 * }
	 */
	public $errors;
}