sangbok.run(function($httpBackend) {
    'use strict';
    $httpBackend.whenGET(/chapter/).respond([
        {name: "Alfa", songs: [
            {id: 1, name: "Song 1"},
            {id: 2, name: "Song 2"},
            {id: 3, name: "Song 3"}
        ]},
        {name: "Beta", songs: [
            {id: 4, name: "Song 4"},
            {id: 5, name: "Song 5"},
            {id: 6, name: "Song 6"}
        ]}
    ]);
    $httpBackend.whenGET(/\/song\/1/).respond({
        name: "Song Title 1",
        text: "This is the song text",
        author: "That guy",
        melody: "A catchy tune"
    });
    $httpBackend.whenGET(/\/song\/[2-6]/).respond({
        name: "Song Title 2",
        text: "This is the song text 2",
        author: "That guy 2",
        melody: "A catchy tune 2",
        melodyfile: "melody1"
    });
    $httpBackend.whenGET(/partials/).passThrough();
});