<?

class Goods
{
    public $allGoods, $special, $newGods, $common;

    function loadAllGoods()
    {
        global $results;

        $this->allGoods = $results;
        $this->getNew();
        $this->getSpecia();
        $this->getCommon();
    }
    private function getSpecia()
    {
        foreach ($this->allGoods as $good){
            if(isset($good['special'])){
                $this->special[$good['special']][] = $good;
            }
        }
    }
    private function getNew()
    {
        foreach ($this->allGoods as $good){
            if($good['new']==1){
                $this->newGods[] = $good;
            }
        }
    }
    private function getCommon(){
        foreach ($this->allGoods as $good){
            if(empty($good['new']) and empty($good['special'])){
                $this->common[] = $good;
            }
        }
    }

}


// вариант 1
//$special = $goods->getOnSpecial;

//вариант 2
//$goods = new Goods();
//$goods->loadGoods();
//$goods->special;







