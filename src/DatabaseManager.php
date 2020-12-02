<?php
/**
 * @author Dmitriy Lukin <lukin.d87@gmail.com>
 */

namespace XrTools;

/**
 * Custom DBAL Interface
 */
interface DatabaseManager {

	public function query(string $query, array $params = null, array $opt = []);

	public function fetchColumn(string $query, array $params = null, array $opt = []);

	public function fetchRow(string $query, array $params = null, array $opt = []);

	public function fetchArray(string $query, array $params = null, array $opt = []);
	
	public function fetchArrayWithCount(string $query, array $params = null, array $opt = []);

	public function setConnectionParams(array $settings);

	public function getAffectedRows();

	public function getQueryCollection();

	public function start(bool $debug = false): bool;

	public function rollback(bool $debug = false): bool;

	public function commit(bool $debug = false): bool;

	/**
	 * Insert / Update table via params
	 * @param array  $data       Table data
	 * @param string $table_name Table name
	 * @param mixed  $index      Table update key (id or opt.index_key)
	 * @param array  $opt        Options
	 */
	public function set(array $data, string $table_name, $index = null, array $opt = []);

	public function genPartSQL(array $data = [], string $glue = ', '): array ;
}
