var sangbok=angular.module("sangbok",["ngResource"],function(a,b,c){"use strict";a.when("/",{templateUrl:"partials/home.html",controller:HomeCtrl}).when("/song/:id",{templateUrl:"partials/song.html",controller:SongCtrl}).otherwise({redirectTo:"/"}),b.html5Mode(!1),c.factory("ChaptersResource",function(a){return a("chapter/:chapterId",{chapterId:"@_id"})}),c.factory("SongsResource",function(a){return a("song/:songId",{songId:"@_id"})})});sangbok.filter("newlines",function(){return function(a){return a?a.replace(/\n/g,"<br/>"):""}});var HomeCtrl=function(a,b){"use strict";a.chapters=b.query()},SongCtrl=function(a,b,c){"use strict";a.song=c.get({songId:b.id},function(){if(a.song.melodyfile){var b,c;b="sound/"+a.song.melodyfile,c=new Audio,c.addEventListener("ended",function(){a.$apply(a.pause)}),c.addEventListener("canplay",function(){a.$apply(function(){a.melody=c})}),c.src=b+"."+(c.canPlayType("audio/ogg")?"ogg":"mp3")}}),a.play=function(){a.melody.currentTime=0,a.melody.play()},a.pause=function(){a.melody.pause()}},OfflineCtrl=function(a,b,c,d){a.ONLINE=0,a.OFFLINE=1,a.SYNCING=2,a.SYNCED=3,a.status=a.OFFLINE,a.progress=0,b.get("online").success(function(b){a.status=b.online?a.ONLINE:a.OFFLINE}),a.sync=function(){a.status=a.SYNCING,songs=d.query(function(){var c=songs.length;for(i=0;i<songs.length;++i)b.get("song/"+songs[i].id,{cache:!0}).success(function(){a.progress+=100*(1/songs.length),c--,0===c&&(a.status=a.SYNCED)})})}};
//# sourceMappingURL=sangbok.js.map