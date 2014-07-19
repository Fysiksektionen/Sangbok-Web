sangbok.controller('HomeCtrl', ['$scope', 'Songs',
  function($scope, Songs) {
    'use strict';
    Songs.async().then(function(chapters) {
      $scope.chapters = chapters;
    });
}]);