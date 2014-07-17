var SongCtrl = function($scope, $routeParams, SongsResource) {
    'use strict';
    $scope.song = SongsResource.get({songId: $routeParams.id}, function() {
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
};

