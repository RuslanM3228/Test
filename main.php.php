<?php
class RegistBox
{
    public $CawCount;
    public $HenCount;
    public function __construct($cawCount, $henCount)
    {
        $this->cawCount = $cawCount;
        $this->henCount = $henCount;
    }
}

class Caw
{
    public $milk;
    public $id;
    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 4); 
        $this->milk = rand(8, 12);
    }
}



class Hen
{
    public $eggs;
    public $id; //
    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 4); // getting random id with length of 3 symbols
        $this->eggs = rand(0, 1);
    }
}


class result
{
    public $TotalEggs;
    public $TotalMilk;
    public $regist_box;
    public function Box_id()
    {
        $this->regist_box = new RegistBox(10, 20);
    }

    public function returnEggs()
    {

        for ($i = 0; $i < $this->RegistBox->henCount; $i++) {
            $henNew = new Hen;
            $this-TotalEggs += $HenNew->eggs;
        }
        echo $this->TotalEggs;
    }

    public function returnMilk()
    {
        for ($i = 0; $i < $this->RegistBox->cawCount; $i++) {
            $cawNew = new Caw;
            $this->TotalMilk += $CawNew->milk;
        }
        echo $this->TotalMilk;
    }
}

$Farm = new result;
echo 'Молока надоено ' . $Farm->returnMilk() . '<br>';
echo 'Яиц собрано ' . $Farm->returnEggs() . '<br>';

?>