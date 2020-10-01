<?php
namespace App;

class Qa {
	public function hello(string $name = null):string {
		if($name) {
			return "Hello, $name!";
		}

		return "Hello!";
	}
}