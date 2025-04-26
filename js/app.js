// Main AngularJS application module
var eduGuardApp = angular.module('eduGuardApp', ['ui.bootstrap']);

// Main controller for the application
eduGuardApp.controller('MainController', ['$scope', '$http', function($scope, $http) {
    // Initialize scope variables
    $scope.isLoggedIn = false;
    $scope.currentUser = null;
    
    // Navigation items
    $scope.navItems = [
        { title: 'Home', url: 'index.html' },
        { title: 'About Us', url: 'elements.html' },
        { title: 'Courses', url: 'courses.html' },
        { title: 'Mentors', url: 'teachers.html' },
        { title: 'News', url: 'news.html' },
        { title: 'Contact', url: 'contact.html' }
    ];
    
    // Login function
    $scope.login = function() {
        // TODO: Implement login functionality
    };
    
    // Logout function
    $scope.logout = function() {
        // TODO: Implement logout functionality
    };
}]); 