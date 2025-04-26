// Controllers for the EduGuard application
eduGuardApp.controller('HomeController', ['$scope', 'CourseService', function($scope, CourseService) {
    $scope.featuredCourses = [];
    
    CourseService.getCourses()
        .then(function(response) {
            $scope.featuredCourses = response.data.slice(0, 3);
        });
}]);

eduGuardApp.controller('CoursesController', ['$scope', 'CourseService', function($scope, CourseService) {
    $scope.courses = [];
    $scope.filteredCourses = [];
    $scope.searchTerm = '';
    
    CourseService.getCourses()
        .then(function(response) {
            $scope.courses = response.data;
            $scope.filteredCourses = $scope.courses;
        });
    
    $scope.filterCourses = function() {
        $scope.filteredCourses = $scope.courses.filter(function(course) {
            return course.name.toLowerCase().includes($scope.searchTerm.toLowerCase());
        });
    };
}]);

eduGuardApp.controller('LoginController', ['$scope', 'AuthService', '$location', function($scope, AuthService, $location) {
    $scope.credentials = {
        email: '',
        password: ''
    };
    
    $scope.login = function() {
        AuthService.login($scope.credentials)
            .then(function(response) {
                if (response) {
                    $location.path('/');
                }
            })
            .catch(function(error) {
                $scope.error = 'Invalid credentials';
            });
    };
}]);

eduGuardApp.controller('ContactController', ['$scope', '$http', function($scope, $http) {
    $scope.contactForm = {
        name: '',
        email: '',
        subject: '',
        message: ''
    };
    
    $scope.submitForm = function() {
        $http.post('/api/contact', $scope.contactForm)
            .then(function(response) {
                $scope.success = 'Message sent successfully!';
                $scope.contactForm = {};
            })
            .catch(function(error) {
                $scope.error = 'Error sending message. Please try again.';
            });
    };
}]); 