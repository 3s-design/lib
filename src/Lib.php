<?php


namespace classmap;


class Lib
{
	public $allowSymbols = ["(", ")", "\n", "\t", "\r"];
	function example ($string): bool
	{
		$arrRes["("] = 0;
		$arrRes[")"] = 0;
		$arr = str_split($string);
		foreach ($arr as $key => $value) {
			if (in_array($value, $this->allowSymbols)) {
				$arrRes[(string)$value]++;
			} else {
				throw new \InvalidArgumentException('found symbols'.$value);
			}
		}

		if ($arrRes["("] == $arrRes[")"]){
			return true;
		}else{
			return false;
		}
	}
}