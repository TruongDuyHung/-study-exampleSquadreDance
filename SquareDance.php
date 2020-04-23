<?php


class SquareDance
{
    public $squareMale, $squareFemale;

    public function __construct()
    {
        $this->squareMale = new SplQueue();
        $this->squareFemale = new SplQueue();
    }

    public function pair()
    {
        return $this->squareMale->dequeue()->name. "-" . $this->squareFemale->dequeue()->name;
    }

    public function printPair()
    {
        $message = '';
        while (!$this->squareMale->isEmpty() && !$this->squareFemale->isEmpty()) {
            $message .= $this->pair() . "<br>";
        }
        $message.= $this->warring();
        return $message;
    }

    public function warring()
    {
        if ($this->squareMale->isEmpty()) {
            echo 'Hang doi trong';
            return $this->squareFemale->count() . "Nu dang doi";
        } elseif ($this->squareFemale->isEmpty()) {
            return $this->squareMale->count() . "Nam dang doi";
        }
    }

    function add($dancer)
    {
        if ($dancer->gender == "Nam") {
            $this->squareMale->enqueue($dancer);
        } else {
            $this->squareFemale->enqueue($dancer);
        }
    }
}