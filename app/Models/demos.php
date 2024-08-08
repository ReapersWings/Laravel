<?php
namespace App\Models;
class demos 
{
    public static function all(){
        return [
            [
                'd_id'=>1,
                'd_name'=>'ccy',
                'd_age'=>'20',
                'd_class'=>'1A'
            ],[
                'd_id'=>2,
                'd_name'=>'cct',
                'd_age'=>'20',
                'd_class'=>'1B'
            ]
        ];
    }
    public static function find($id){
        $list=self::all();
        foreach ($list as $row) {
            if ($row['d_id']==$id) {
                return $row ;
            }
        }
        
    }
}
?>