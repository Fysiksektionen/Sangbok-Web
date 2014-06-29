/*global angular, document, console */
var HomeCtrl = function($scope, ChaptersResource) {
    'use strict';
    $scope.chapters = ChaptersResource.query();
};

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

var OfflineCtrl = function($scope, $http, ChaptersResource, SongsResource) {
    $scope.ONLINE = 0;
    $scope.OFFLINE = 1;
    $scope.SYNCING = 2;
    $scope.SYNCED = 3;

    $scope.status = $scope.OFFLINE;
    $scope.progress = 0;

    $http.get('online').success(function(data) {
        if(data.online) {
            $scope.status = $scope.ONLINE;
        } else {
            $scope.status = $scope.OFFLINE;
        }
    });

    $scope.sync = function() {
        var chapters;

        $scope.status = $scope.SYNCING;

        songs = SongsResource.query(function() {
            var left = songs.length;
            for (i = 0; i < songs.length; ++i) {

                $http.get('song/' + songs[i].id, { cache: true }).success(function(data) {
                    $scope.progress += 100*(1/songs.length);
                    left--;

                    if(left === 0) {
                        $scope.status = $scope.SYNCED;
                    }
                });
            }
        });        
    }
};

var sangbok = angular.module('sangbok', ['ngResource'], function($routeProvider, $locationProvider, $provide) {
    'use strict';
    $routeProvider.when('/', {
        templateUrl: 'partials/home.html',
        controller: HomeCtrl
    });
    $routeProvider.when('song/:id', {
        templateUrl: 'partials/song.html',
        controller: SongCtrl
    });

    $locationProvider.html5Mode(false);

    $provide.factory('ChaptersResource', function($resource) {
        return $resource('chapter/:chapterId', {chapterId: '@_id'});
    });

    $provide.factory('SongsResource', function($resource) {
        return $resource('song/:songId', {songId: '@_id'});
    });

    //$provide.decorator('$httpBackend', angular.mock.e2e.$httpBackendDecorator);

});

sangbok.filter('newlines', function () {
    return function(text) {
        if(!text) return '';
        return text.replace(/\n/g, '<br/>');
    }
});