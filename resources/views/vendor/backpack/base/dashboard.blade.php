@extends(backpack_view('blank'))

@php

    $club = DB::table('clubs')->get()->count();
    $users = DB::table('users')->get()->count();
    $missions = DB::table('missions')->get()->count();
    $ressources = DB::table('ressources')->get()->count();

    // notice we use Widget::add() to add widgets to a certain group
    Widget::add()
        ->to('before_content')
        ->type('div')
        ->class('row')
        ->content([
            // notice we use Widget::make() to add widgets as content (not in a group)
            Widget::make()
                ->type('progress')
                ->class('card border-0 text-white bg-primary')
                ->progressClass('progress-bar')
                ->value($users)
                ->description('Membres')
                ->progress((100 * (int) $users) / 1000),

            Widget::make()
                ->type('progress')
                ->class('card border-0 text-white bg-primary')
                ->progressClass('progress-bar')
                ->value($club)
                ->description('Club')
                ->progress((100 * (int) $club) / 1000),

            Widget::make()
                ->type('progress')
                ->class('card border-0 text-white bg-warning')
                ->progressClass('progress-bar')
                ->value($missions)
                ->description('Missions')
                ->progress((100 * (int) $missions) / 1000),

            Widget::make([
                'type' => 'progress',
                'class' => 'card border-0 text-dark bg-secondary',
                'progressClass' => 'progress-bar',
                'value' => $ressources,
                'description' => 'Ressources',
                'progress' => (100 * (int) $ressources) / 1000,
            ]),
        ]);

@endphp
