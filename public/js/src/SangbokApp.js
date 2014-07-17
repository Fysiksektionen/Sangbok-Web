var sangbok = angular.module('sangbok', ['ngResource'], function($routeProvider, $locationProvider, $provide) {
    'use strict';
    $routeProvider.when('/', {
        templateUrl: 'partials/home.html',
        controller: HomeCtrl
    })
    .when('/song/:id', {
        templateUrl: 'partials/song.html',
        controller: SongCtrl
    })
    .otherwise({
        redirectTo: '/'
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