<?php
class servisas extends autom
{
    public $ratai;

    function __construct($g, $mod, $m, $r)
    {
        $this->gamintojas = $g;
        $this->modelis = $mod;
        $this->metai = $m;
        $this->ratai = $r;
    }
        function info()
        {
            $rat = 'Šis %s %s yra pagamintas %s metais ir jis turi %s ratus!';
            return sprintf($rat, $this->gamintojas, $this->modelis, $this->metai, $this->ratai);
        }

};