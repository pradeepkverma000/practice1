<?php
// creating a class;
class fruit{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function write()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
$obj = new fruit();
//echo $obj->public;
//echo $obj->protected;
echo $obj->private;
?>