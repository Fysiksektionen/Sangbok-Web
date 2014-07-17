sangbok.controller('HomeCtrl', ['$scope', 'Chapter',
  function($scope, Chapter) {
    'use strict';
    $scope.chapters = Chapter.query();
}]);