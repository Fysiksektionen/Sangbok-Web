sangbok.controller('SongCtrl', ['$scope', '$routeParams', 'Song',
    function($scope, $routeParams, Song) {
    'use strict';
    $scope.song = Song.get({songId: $routeParams.id}, function() {
        console.log($scope.song);
        if ($scope.song.melodyfile) {
            var path, melody;

            path = 'sound/' + $scope.song.melodyfile;

            melody = new Audio();
            melody.addEventListener('ended', function() {
                $scope.$apply($scope.pause);
            });

            melody.addEventListener('canplay', function() {
                $scope.$apply(function() {
                    $scope.melody = melody;
                });
            });

            melody.src = path + '.' + (melody.canPlayType("audio/ogg") ? 'ogg' : 'mp3');
        }
    });

    $scope.play = function() {
        $scope.melody.currentTime = 0;
        $scope.melody.play();
    };

    $scope.pause = function() {
        $scope.melody.pause();
    };
}]);