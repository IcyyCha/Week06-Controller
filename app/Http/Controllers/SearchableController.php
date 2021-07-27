<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchableController extends Controller
{
    function filterByTerm($items, $term) {

        $results = [];
        foreach($items as $item) {
        if(stripos($item['name'], $term) !== false) $results[] = $item;
        }
        return $results;
        }
        
        function search($data) {
        $term = (empty($data['term']))? '' : $data['term'];
        // We use static keyword to refer to caller class.
        $items = static::ITEMS;
        if(!empty($term)) {
        $items = $this->filterByTerm($items, $term);
        }
        return $items;
        }
}
