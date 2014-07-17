var HomeCtrl = function($scope, ChaptersResource) {
    'use strict';
    $scope.chapters = ChaptersResource.query();
};