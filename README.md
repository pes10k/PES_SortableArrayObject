PES_SortableArrayObject
===

What is It?
---
Just a simple, clean method of sorting complex arrays in PHP.  Having to create copies of your array and then using array_mulitsort, etc.  Its ugly and the kind of thing that gives python and ruby guys nightmares.  This is just a simple class that I use on lots of projects, so I wanted to put it somehere easy to get to and publicly accessible.

Using PES_SortableArrayObject
---
Its dead simple.  Other than including the class in your project, you can easily do the following:

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
    
    // $sorted_results[0]['name'] ==== 'Diddy'

More Info
---
Pete Snyder <snyderp@gmail.com> wrote this in 2011 from a hotel room w/ a broken chair