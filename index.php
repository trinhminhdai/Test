<?php
/*define
*
 * S = Spades
 * H = Hearts
 * D = Diamonds
 * C = Clovers
*/
/*array data*/
$A = [
    [
        'value' => 2,
        'type'  => 'S',
        'alias'=> 'S2'
    ],
    [
    'value' => 2,
    'type'  => 'C',
    'alias'=> 'C2'
    ],
    [
        'value' => 2,
        'type'  => 'D',
        'alias'=> 'D2'
    ],
    [
        'value' => 2,
        'type'  => 'H',
        'alias'=> 'H2'
    ],
    /*3*/
    [
        'value' => 3,
        'type'  => 'S',
        'alias'=> 'S3'
    ],
    [
        'value' => 3,
        'type'  => 'C',
        'alias'=> 'C3'
    ],
    [
        'value' => 3,
        'type'  => 'D',
        'alias'=> 'D3'
    ],
    [
        'value' => 3,
        'type'  => 'H',
        'alias'=> 'H3'
    ],
    /*4*/
    [
        'value' => 4,
        'type'  => 'S',
        'alias'=> 'S4'
    ],
    [
        'value' => 4,
        'type'  => 'C',
        'alias'=> 'C4'
    ],
    [
        'value' => 4,
        'type'  => 'D',
        'alias'=> 'D4'
    ],
    [
        'value' => 4,
        'type'  => 'H',
        'alias'=> 'H4'
    ],
    /*5*/
    [
        'value' => 5,
        'type'  => 'S',
        'alias'=> 'S5'
    ],
    [
        'value' => 5,
        'type'  => 'C',
        'alias'=> 'C5'
    ],
    [
        'value' => 5,
        'type'  => 'D',
        'alias'=> 'D5'
    ],
    [
        'value' => 5,
        'type'  => 'H',
        'alias'=> 'H5'
    ],
    /*6*/
    [
        'value' => 6,
        'type'  => 'S',
        'alias'=> 'S6'
    ],
    [
        'value' => 6,
        'type'  => 'C',
        'alias'=> 'C6'
    ],
    [
        'value' => 6,
        'type'  => 'D',
        'alias'=> 'D6'
    ],
    [
        'value' => 6,
        'type'  => 'H',
        'alias'=> 'H6'
    ],
    /*7*/
    [
        'value' => 7,
        'type'  => 'S',
        'alias'=> 'S7'
    ],
    [
        'value' => 7,
        'type'  => 'C',
        'alias'=> 'C7'
    ],
    [
        'value' => 7,
        'type'  => 'D',
        'alias'=> 'D7'
    ],
    [
        'value' => 7,
        'type'  => 'H',
        'alias'=> 'H7'
    ],
    /*8*/
    [
        'value' => 8,
        'type'  => 'S',
        'alias'=> 'S8'
    ],
    [
        'value' => 8,
        'type'  => 'C',
        'alias'=> 'C8'
    ],
    [
        'value' => 8,
        'type'  => 'D',
        'alias'=> 'D8'
    ],
    [
        'value' => 8,
        'type'  => 'H',
        'alias'=> 'H8'
    ],
    /*9*/
    [
        'value' => 9,
        'type'  => 'S',
        'alias'=> 'S9'
    ],
    [
        'value' => 9,
        'type'  => 'C',
        'alias'=> 'C9'
    ],
    [
        'value' => 9,
        'type'  => 'D',
        'alias'=> 'D9'
    ],
    [
        'value' => 9,
        'type'  => 'H',
        'alias'=> 'H9'
    ],
    /*10*/
    [
        'value' => 10,
        'type'  => 'S',
        'alias'=> 'S10'
    ],
    [
        'value' => 10,
        'type'  => 'C',
        'alias'=> 'C10'
    ],
    [
        'value' => 10,
        'type'  => 'D',
        'alias'=> 'D10'
    ],
    [
        'value' => 10,
        'type'  => 'H',
        'alias'=> 'H10'
    ],
    /*J*/
    [
        'value' => 11,
        'type'  => 'S',
        'alias'=> 'SJ'
    ],
    [
        'value' => 11,
        'type'  => 'C',
        'alias'=> 'CJ'
    ],
    [
        'value' => 11,
        'type'  => 'D',
        'alias'=> 'DJ'
    ],
    [
        'value' => 11,
        'type'  => 'H',
        'alias'=> 'HJ'
    ],
    /*Q*/
    [
        'value' => 12,
        'type'  => 'S',
        'alias'=> 'SQ'
    ],
    [
        'value' => 12,
        'type'  => 'C',
        'alias'=> 'CQ'
    ],
    [
        'value' => 12,
        'type'  => 'D',
        'alias'=> 'DQ'
    ],
    [
        'value' => 12,
        'type'  => 'H',
        'alias'=> 'HQ'
    ],
    /*K*/
    [
        'value' => 13,
        'type'  => 'S',
        'alias'=> 'SK'
    ],
    [
        'value' => 13,
        'type'  => 'C',
        'alias'=> 'CK'
    ],
    [
        'value' => 13,
        'type'  => 'D',
        'alias'=> 'DK'
    ],
    [
        'value' => 13,
        'type'  => 'H',
        'alias'=> 'HK'
    ],
    /*A*/
    [
        'value' => 14,
        'type'  => 'S',
        'alias'=> 'SA'
    ],
    [
        'value' => 14,
        'type'  => 'C',
        'alias'=> 'CA'
    ],
    [
        'value' => 14,
        'type'  => 'D',
        'alias'=> 'DA'
    ],
    [
        'value' => 14,
        'type'  => 'H',
        'alias'=> 'HA'
    ],
];
/*Class*/
class Check{
    public $output           = '--';

    const four_cards   = '4C'; 
    const full_house   = 'FH'; 
    const three_cards  = '3C';
    const two_pairs    = '2P'; 
    const one_pair     = '1P'; 

    public function checkCase($arr){
        $return['string'] = '';
        for ($i=0;$i<=4;$i++) {
            $return['string'] .= $arr[$i]['alias'];
        }

        for ($i=0;$i<=4;$i++){
            $arr_a = $arr[$i];
            unset($arr[$i]);
            $flash_arr = $this->array_search_all($arr_a['value'], $arr,'value');
            $flash_key = count($flash_arr);
            if($flash_key == 3){
                $this->output = self::four_cards;
                break;
            }
            if($flash_key == 1 || $flash_key == 2)
            {
                if($arr && count($arr) >= 2)
                {
                    foreach ($flash_arr as $key=>$value){
                        unset($arr[$value]);
                    }
                    foreach ($arr as $key=>$value){
                        $arr_b = $arr[$key];
                        unset($arr[$key]);
                        $flash_arr_b = $this->array_search_all($arr_b['value'], $arr,'value');

                        $flash_key_2 = count($flash_arr_b);
                        //1 doi va 3 la
                        if($flash_key == 1 && $flash_key_2 == 2){
                            $this->output = self::full_house;
                            break;
                        }
                        if($flash_key == 2 && $flash_key_2 == 1){
                            $this->output = self::full_house;
                            break;
                        }

                        //2 doi
                        if($flash_key == 1 && $flash_key_2 == 1){
                            $this->output = self::two_pairs;
                            break;
                        }
                    }
                    if($this->output == '--') {
                        if ($flash_key == 1) {
                            $this->output = self::one_pair;
                            break;
                        }
                        if ($flash_key == 2) {
                            $this->output = self::three_cards;
                            break;
                        }
                    }
                }elseif($flash_key == 1)
                {
                    $this->output = self::one_pair;
                    break;
                }
                elseif($flash_key == 2)
                {
                    $this->output = self::three_cards;
                    break;
                }
            }

        }
        $return['output'] = $this->output;
        return $return;
    }
    /**
     * @param $needle is a string or integer need search
     * @param $arr is array
     * @param $key is string
     * @intro array_search_match($needle, $arr) returns all the keys of the values that match $needle in $arr
     */

    protected function array_search_all($needle, $arr,$key)
    {

        foreach ($arr as $k=>$v) {

            if($arr[$k][$key]==$needle){

                $array[] = $k;
            }
        }
        return ($array);

    }

}

/**
 * Begin
 */

$select_cards   = array_random_assoc($A,5);
$ch         = new Check();
$return     = $ch->checkCase($select_cards);
echo $return['string']." => ".$return['output'];

/*function*/
function array_random_assoc($arr, $num = 1) {
    $keys = array_keys($arr);
    shuffle($keys);

    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[$i] = $arr[$keys[$i]];
    }
    return $r;
}


function pre($val)
{
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}

?>
