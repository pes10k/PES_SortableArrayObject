<?php

class PES_SortableArrayObject extends ArrayObject {

	/**
	 * If the current object is a multidimensional array,
	 * return a copy of the ArrayObject with the elements
	 * sorted by the given key.  The current object is
	 * left unaffected.
	 *
	 * If there is an error in sorting, return FALSE
	 * 
	 * @test
	 * @access public
	 * @param string $key
	 * @return array|bool
	 */
	public function sortArraysByKey($key, $direction = 'ASC') {

		$array = $this->getArrayCopy();
        
        if (empty($array)) {

            return new PES_SortableArrayObject();
        }

		$sort_values = array();
		$keys = array_keys($array);
		
		$is_array = ! empty($array[$keys[0]]) && is_array($array[$keys[0]]);
		
		foreach ($array as $k => $v) {
			$sort_values[$k] = $is_array ? $v[$key] : $v->{$key};
		}
		
		return array_multisort($sort_values, $direction === 'ASC' ? SORT_ASC : SORT_DESC, $array)
			? new PES_SortableArrayObject($array)
			: FALSE;
	}
}
