var sangbok = angular.module('sangbok', ['ngRoute', 'ngResource', 'mm.foundation'])
  .config(['$routeProvider', function($routeProvider) {
    'use strict';
    $routeProvider
      .when('/', {
        templateUrl: 'partials/home.html',
        controller: 'HomeCtrl'
      })
      .when('/song/:id', {
        templateUrl: 'partials/song.html',
        controller: 'SongCtrl'
      })
      .otherwise({
       redirectTo: '/'
      });
  }])
  
  .factory( 'Chapter', [ '$resource', function( $resource ) {
    return $resource('chapter/:chapterId', {chapterId: '@_id'});
  }])
  
  .factory( 'Song', [ '$resource', function( $resource ) {
    return $resource('song/:songId', {songId: '@_id'});
  }])
  
  .filter('sbNewlines', ['$sce', function ($sce) {
    return function(text) {
      console.log(text);
      if(!text) return '';
        return $sce.trustAsHtml(text.replace(/\n/g, '<br/>'));
    }
  }]);