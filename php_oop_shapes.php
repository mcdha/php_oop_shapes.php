<?php
abstract class Shape {
    protected $name;
    abstract public function description();
}

interface IShape {
    public function getArea($length, $width = null);
    public function getPerimeter($length, $width = null);
}

class Square extends Shape implements IShape {
    private $length;

    public function __construct($length = 0) {
        $this->length = $length;
    }

    public function description() {
        return "Description: Square has four equal sides.";
    }

    public function getArea($length, $width = null) {
        if ($length !== $width) {
            return "Area: invalid as length and width needs to be equal";
        }
        return "Area(4,4): " . $length * $length;
    }

    public function getPerimeter($length, $width = null) {
        if ($length !== $width) {
            return "Perimeter: invalid as length and width needs to be equal";
        }
        return "Area(4,4): " . 4 * $length;
    }
}

class Rectangle extends Shape implements IShape {
    private $length;
    private $width;

    public function __construct($length = 0, $width = 0) {
        $this->length = $length;
        $this->width = $width;
    }

    public function description() {
        return "Rectangle has two equal sides.";
    }

    public function getArea($length, $width = null) {
        return "Area: " . $length * $width;
    }

    public function getPerimeter($length, $width = null) {
        return "Perimeter: " . 2 * ($length + $width);
    }
}

class Triangle extends Shape implements IShape {
    private $side1;
    private $side2;
    private $side3;

    public function __construct($side1 = 0, $side2 = 0, $side3 = 0) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function description() {
        return "Triangle have three sides.";
    }

    public function getArea($length, $width = null) {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        $area = sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
        return "Area: " . round($area, 0);
    }

    public function getPerimeter($length, $width = null) {
        return "Perimeter: " . $this->side1 + $this->side2 + $this->side3;
    }
}

 class Circle extends Shape implements IShape {
            public function description() {
                return "Circle has no sides, only a curve.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return "Area: " . round(pi() * $length * $length, 2);
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return "Perimeter: " . round(2 * pi() * $length, 3);
            }
        }

$shape1 = new Square();
echo "<h1>Square</h1>";
echo $shape1->description() . "\n"; 
echo "<br>";
echo $shape1->getArea(4, 4) . "\n";
echo "<br>";
echo $shape1->getArea(4, 3) . "\n";
echo "<br>";
echo $shape1->getPerimeter(4, 4) . "\n";
echo "<br>"; 
echo $shape1->getPerimeter(4, 3) . "\n";
echo "<br>";

$shape2 = new Rectangle();
echo "<h1>Rectangle</h1>";
echo $shape2->description() . "\n";
echo "<br>";
echo $shape2->getArea(4, 6) . "\n";
echo "<br>";
echo $shape2->getPerimeter(4, 6) . "\n";
echo "<br>";

$shape3 = new Triangle(4, 6, 7);
echo "<h1>Triangle</h1>";
echo $shape3->description() . "<br>";
echo $shape3->getArea(0) . "<br>";
echo $shape3->getPerimeter(0) . "<br>";

$shape4 = new Circle();
echo "<h1>Circle</h1>";
echo $shape4->description() . "<br>";
echo $shape4->getArea(5) . "<br>";
echo $shape4->getPerimeter(5) . "<br>";
?>
