<?php

/**
 * Statistics class
 *
 * @author Павел Белоусов <pafnuty10@gmail.com>
 */
class ShowStatistics {
	/**
	 * @var string
	 */
	public $timeStart;

	/**
	 * @var int|string
	 */
	public $memoryStart;

	public function __construct() {
		$this->timeStart   = $this->timer();
		$this->memoryStart = $this->getMemory();
	}

	/**
	 * Подсчитываем время выполнения скрипта
	 *
	 * @param bool|string $stop
	 *
	 * @return float|mixed
	 */
	public function timer($stop = false) {
		return ($stop) ? (microtime(true) - $stop) : microtime(true);
	}

	/**
	 * Подсчитываем затраты памяти
	 *
	 * @param bool|string $stop
	 *
	 * @return int|string
	 */
	public function getMemory($stop = false) {
		if (function_exists('memory_get_usage')) {
			return ($stop) ? (memory_get_usage() - $stop) : memory_get_usage();
		}

		return 0;
	}

	/**
	 * Показываем статистику
	 *
	 * @return string
	 */
	public function showStat() {
		$timerStart   = $this->timeStart;
		$statistics[] = 'Run time: ' . round($this->timer($timerStart), 5) . ' s.';
		if (function_exists("memory_get_usage")) {
			$statistics[] = 'Memory consumption: ' . round($this->getMemory($this->memoryStart) / 1024 / 1024, 3) . ' Mb';
		}

		$showStat = "\n<!-- \n\t" . implode("\n\t", $statistics) . "\n -->\n";

		return $showStat;
	}

}
