sangbok.controller('OfflineCtrl', ['$scope', '$http',
    function($scope, $http) {
    $scope.ERROR = 0;
    $scope.OFFLINE = 1;
    $scope.SYNCED = 2;

    $scope.status = $scope.SYNCED;
    $scope.progress = 0;

    window.applicationCache.addEventListener('error', function () {
      $scope.status = $scope.ERROR;
    }, false);

    $http.get('online').success(function(data) {
        if(!data.online) {
            $scope.status = $scope.OFFLINE;
        }
    });
}]);