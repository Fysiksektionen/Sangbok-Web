var sangbok = angular.module('sangbok', ['ngRoute', 'mm.foundation'])
  .config(['$routeProvider', function($routeProvider) {
    'use strict';
    $routeProvider
      .when('/', {
        templateUrl: 'partials/home.html',
        controller: 'HomeCtrl'
      })
      .when('/song/:chapter/:song', {
        templateUrl: 'partials/song.html',
        controller: 'SongCtrl'
      })
      .otherwise({
       redirectTo: '/'
      });
  }])

  .factory( 'Songs', ['$http', function( $http ) {
    var promise;
    var songs = {
      async: function() {
        if ( !promise ) {
          promise = $http.get('chapter').then(function (response) {
            return response.data;
          });
        }
        return promise;
      }
    };
    return songs;
  }])

  .filter('sbNewlines', ['$sce', function ($sce) {
    return function(text) {
      if(!text) {
        return '';
      }
      return $sce.trustAsHtml(text.replace(/\n/g, '<br/>'));
    };
  }]);