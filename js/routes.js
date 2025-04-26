// Configure routes for the application
eduGuardApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'views/home.html',
            controller: 'HomeController'
        })
        .when('/about', {
            templateUrl: 'views/about.html',
            controller: 'AboutController'
        })
        .when('/courses', {
            templateUrl: 'views/courses.html',
            controller: 'CoursesController'
        })
        .when('/courses/:id', {
            templateUrl: 'views/course-details.html',
            controller: 'CourseDetailsController'
        })
        .when('/mentors', {
            templateUrl: 'views/mentors.html',
            controller: 'MentorsController'
        })
        .when('/news', {
            templateUrl: 'views/news.html',
            controller: 'NewsController'
        })
        .when('/contact', {
            templateUrl: 'views/contact.html',
            controller: 'ContactController'
        })
        .when('/login', {
            templateUrl: 'views/login.html',
            controller: 'LoginController'
        })
        .otherwise({
            redirectTo: '/'
        });
}]); 