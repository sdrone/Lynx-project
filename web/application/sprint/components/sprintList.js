angular.module('lynxModule').component('sprintList', {
    templateUrl: '/application/sprint/components/sprintList.html',
    controller: function SprintListController($http) {
        var self = this;
        self.sprintsList = [];
        self.loading = true;

        $http.get('/sprint/getList').then(function(response) {
            self.sprintsList = response.data;
        }).finally(function() {
            self.loading = false;
        });
    }
});