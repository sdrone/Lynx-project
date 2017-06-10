angular.module('taskModule').component('taskList', {
    templateUrl: '/app/task/components/taskList.html',
    controller: function ProjectListController($http) {
        var self = this;
        self.tasksList = [];
        self.loading = true;

        $http.get('/task/getList').then(function(response) {
            self.tasksList = response.data;
        }).finally(function() {
            self.loading = false;
        });
    }
});