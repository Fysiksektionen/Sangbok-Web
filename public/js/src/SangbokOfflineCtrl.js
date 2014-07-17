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