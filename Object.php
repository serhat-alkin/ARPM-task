<?php
class Foo
{
	/** @var string **/
	private $sHelloString = 'Hello world!';
	
	/** @var array **/
	public $aArray = [];

	public function printString(): void
	{
			echo $this->helloString;
	}

	/** Write here the method */

	public function __toString(): string
  {
    return json_encode(get_object_vars($this));
  }
}

$foo = new Foo();
echo $foo;