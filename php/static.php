<?php

/* Exercise : 1
 Here statically accessed property prefer property of the class for which it is called. Where
as self keyword enforces use of current class only. Refer the below example:
*/

class a{

    static protected $test = "class a";

    public function static_test(){
        echo static::$test; // Results: class b
        echo '<br>';
        echo self::$test; // Results: class a
    }
}

class b extends a{
    static protected $test="class b";
}

$obj = new b(); // Create Instance and Run Constructor
$obj->static_test();

/*
  Output:
    Class B
    Class A
*/

/* Exercise : 2
It is important to understand the behavior of static properties in the context of class inheritance:

- Static properties defined in both parent and child classes will hold DISTINCT values for each class.
Proper use of self:: vs. static:: are crucial inside of child methods to reference the intended static property.

- Static properties defined ONLY in the parent class will share a COMMON value.
*/
class Foo {
    static $parent_only;
    static $both_distinct;

    function __construct() {
        static::$parent_only = 'fromparent';
        static::$both_distinct = 'fromparent';
    }
}

class Bar extends Foo {
    static $child_only;
    static $both_distinct;

    function __construct() {
        static::$parent_only = 'fromchild';
        static::$both_distinct = 'fromchild';
        static::$child_only = 'fromchild';
    }
}

$a = new Foo; // Create Instance and Run Constructor
$a = new Bar; // Create Instance and Run Constructor

echo 'Parent: parent_only=', Foo::$parent_only, ', both_distinct=', Foo::$both_distinct, "<br/>";
echo 'Child:  parent_only=', Bar::$parent_only, ', both_distinct=', Bar::$both_distinct, ', child_only=', Bar::$child_only, "<br/>";

/*
  Output:
    Parent: parent_only=fromchild, both_distinct=fromparent
    Child: parent_only=fromchild, both_distinct=fromchild, child_only=fromchild
*/

/* Exercise: 3
On PHP 5.2.x or previous you might run into problems initializing static variables in subclasses
 due to the lack of late static binding:
*/

class Foo3 {
    protected static $a;

    public static function init($value) {
        self::$a = $value;
    }

    public static function getA() {
        return self::$a;
    }
}

class Bar3 extends Foo {
    protected static $a; // redefine $a for own use

    // inherit the init() method
    public static function getA() {
        return self::$a;
    }
}

Bar3::init('Developer');
echo 'Foo3::$a = '.Foo3::getA().'<br/>Bar3::$a = '.Bar3::getA();

/*
 If the init() method looks the same for (almost) all subclasses there should be no need to implement init()
in every subclass and by that producing redundant code.
*/




