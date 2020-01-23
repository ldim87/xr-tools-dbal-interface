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

	public function connect(array $settings);
	
}
