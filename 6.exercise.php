<?php
//Create Inventory Class
//There should be add item method which can add the new item and qty into the list property
//There should be a sale method which will reduce the qty of the item
class Inventory{
    private $item_list = [];
    function addItem(string $item_name, int $qty){
        $new_item = $this->buildItem($item_name,$qty);
        array_push($this->item_list,$new_item);
        //var_dump($this->item_list);
    }
    private function buildItem(string $item_name,int $qty){
        return ['name' => $item_name,'qty' => $qty];
    }
    function saleItem(string $sale_item_name,int $sale_qty){
        if($sale_qty>0){
            // user input qty 1 or above
            foreach($this->item_list as $key => $value)
            {
                //find sale item 
                if($this->item_list[$key]['name']==$sale_item_name){
                    $resultQty =$this->item_list[$key]['qty'];  // avaiable qty with given item
                    if(($resultQty-$sale_qty)>=0){
                        //Qty enough to sell
                        $this->item_list[$key]['qty'] -=$sale_qty ;  //update Qty here
                    }else{
                        //Qty is not enough 
                        echo "Ahhh. we don't have enough ".$sale_item_name." Qty to sold out \n";
                    }
                }
            }
        }else{
            //Qty is 0 or minus values 
            echo "You must give valid Qty to sale \n";
        }
        var_dump($this->item_list);
    }
}
$inventory = new Inventory();
        $inventory-> addItem('Apple',40);
        $inventory->addItem('Orange',60);
        $inventory->saleItem('Apple',30);
        $inventory->saleItem('Orange',60);
        $inventory->saleItem('Apple',13);
        $inventory->saleItem('Orange',10);