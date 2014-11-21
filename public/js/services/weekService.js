/**
 * Created by alexstorm13 on 21/11/14.
 */
angular.module('weekService', [])

    .factory('Week', function ($http) {

        return {
            // get all the weeks
            get: function () {
                return $http.get('/api/weeks');
            },

            // save a comment (pass in comment data)
            save: function (weekData) {
                return $http({
                    method: 'POST',
                    url: '/api/weeks',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(weekData)
                });
            },

            complete : function (id){
                return $http({
                    method: 'GET',
                    url: '/api/weeks/' + id + '/edit',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(id)
                });
            },

            // destroy a week
            destroy: function (id) {
                return $http.delete('/api/weeks/' + id);
            }
        }

    });