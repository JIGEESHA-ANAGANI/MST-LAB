// Services for the EduGuard application
eduGuardApp.service('AuthService', ['$http', '$window', function($http, $window) {
    this.login = function(credentials) {
        return $http.post('/api/login', credentials)
            .then(function(response) {
                if (response.data.token) {
                    $window.localStorage.setItem('token', response.data.token);
                    return response.data;
                }
            });
    };

    this.logout = function() {
        $window.localStorage.removeItem('token');
    };

    this.isAuthenticated = function() {
        return !!$window.localStorage.getItem('token');
    };
}]);

eduGuardApp.service('CourseService', ['$http', function($http) {
    this.getCourses = function() {
        return $http.get('/api/courses');
    };

    this.getCourseDetails = function(courseId) {
        return $http.get('/api/courses/' + courseId);
    };
}]);

eduGuardApp.service('TeacherService', ['$http', function($http) {
    this.getTeachers = function() {
        return $http.get('/api/teachers');
    };

    this.getTeacherDetails = function(teacherId) {
        return $http.get('/api/teachers/' + teacherId);
    };
}]); 