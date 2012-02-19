<?php

include dirname(__FILE__) . '/../PES/SortableArrayObject.php';

class PES_SortableArrayObjectTest extends PHPUnit_Framework_TestCase {

    public function testEmptyArray() {

        $empty_array = array();

        $sorter = new PES_SortableArrayObject($empty_array);
        $result = $sorter->sortArraysByKey("non-existant-key");

        $this->assertEquals($empty_array, $result->getArrayCopy());
    }

    public function testSortArraysByKey() {
    
        $rap_masters = array(
            array(
                'name' => 'Ted Bardo',
                'cash_money' => 1000,
                'pet' => 'gopher',
            ),
            array(
                'name' => 'Franky D',
                'cash_money' => 999,
                'pet' => 'rabbit',
            ),
            array(
                'name' => 'Diddy',
                'cash_money' => 12341234,
                'pet' => 'charzard',
            ),
            array(
                'name' => 'Pete Snyder',
                'cash_money' => '1.75',
                'pet' => 'kitten',
            )
        );

        $sorter = new PES_SortableArrayObject($rap_masters);
        $sorted_results = $sorter->sortArraysByKey('cash_money', 'DESC');

        // First result should be the 3 item in the orignal array
        $first_result = $sorted_results[0];
        
        $this->assertEquals($first_result, $rap_masters[2]);
    }
}
