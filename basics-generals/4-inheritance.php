<?php

// base class or parent class

abstract class Shape {
	protected $color;
	
	public function __construct($color = 'red')
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}

	abstract protected function getArea();

}

// sub classes or child classes

class Square extends Shape {

	protected $length = 4;
	
	public function getArea() {
		return pow($this->length, 2);
	}

}

class Triangle extends Shape {

	//just overwrite the function to calculate triangle shape area

	protected $base = 4;
	protected $height = 7;

	public function getArea()
	{
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape {
	
	protected $radius = 5;
	
	public function getArea()
	{
		return M_PI * pow($this->radius, 2);
	}
}


// echo (new Square)->getArea();
// echo '<br>';
// echo (new Triangle)->getArea();
// echo '<br>';
// echo (new Circle)->getArea();
// echo '<br>';
//echo (new Square('green'))->getColor();

echo (new Circle())->getArea();