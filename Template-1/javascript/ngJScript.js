var app = angular.module("myTem1",
        ["ui.router", "ngMaterial", "ui.bootstrap", "ngAnimate", "ngMessages", 'ngCookies', 'ngCart', 'ngSanitize', 'ui-notification']);
app.config(function ($stateProvider, $urlRouterProvider, $locationProvider) {
//    $locationProvider.html5Mode({enabled: true, requireBase: false});
    $urlRouterProvider.otherwise('/');
    $stateProvider.state('home', {
        url: "/",
        templateUrl: "content/home.php",
        controller: "homeCtrl"
    }).state('products', {
        url: "/chi-tiet/:name-:id",
        templateUrl: "content/section/products.php",
        controller: "detailCtrl"
    }).state('allprods', {
        url: "/danh-muc/:name/:name1-:id.:lv",
        templateUrl: "content/section/allproducts.html",
        controller: "allprodsCtrl"
    }).state('allprods1', {
        url: "/danh-muc/:name-:id.:lv",
        templateUrl: "content/section/allproducts.html",
        controller: "allprodsCtrl"
    }).state('allprods2', {
        url: "/danh-muc/:name",
        templateUrl: "content/section/allproducts.html",
        controller: "allprodsCtrl"
    }).state('allprods3', {
        url: "/tim-kiem/:key",
        templateUrl: "content/section/allproducts.html",
        controller: "allprodsCtrl"
    }).state('about', {
        url: "/gioi-thieu",
        templateUrl: "content/section/about.html"
    }).state('cart', {
        url: "/gio-hang",
        templateUrl: "content/section/shoppingcart.html",
        controller: "homeCtrl"
    }).state('error404', {
        url: "/error404",
        templateUrl: "content/error404.html",
        controller: "error404"
    }).state('contact', {
        url: "/contact",
        templateUrl: "content/contact.html"
    }).state('policy', {
        url: "/chinh-sach/:ten-:ten2",
        templateUrl: "content/policy.html"
    });
});

app.controller("mainCtrl", function ($scope, $http ,Notification) {
    $scope.imageslide = "https://a2fshop.com/uploads/customer/23/sunshopseles/";
    $scope.urlprod = "https://a2fshop.com/api/v1/product/";
    $scope.urlcategory = "https://a2fshop.com/api/v1/product-category/";
    $scope.urlwebsetting = "https://a2fshop.com/api/v1/setting-web/";
    $scope.urlothersetting = "https://a2fshop.com/api/v1/setting-other/";
    $scope.urlsearchprods = "https://a2fshop.com/api/v1/search-product/";

    $http({method: 'GET', url: $scope.urlwebsetting + 'get-all-image-slider-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.imgslide = response.data;
    }, function myError(response) {
        $scope.imgslide = response.statusText;
    });

    
}).directive("owlCarousel", function () {
    return {
        restrict: 'E',
        transclude: false,
        link: function (scope) {
            scope.initCarousel = function (element) {
                // provide any default options you want
                var defaultOptions = {
                };
                var customOptions = scope.$eval($(element).attr('data-options'));
                // combine the two options objects
                for (var key in customOptions) {
                    defaultOptions[key] = customOptions[key];
                }
                // init carousel
                $(element).owlCarousel(defaultOptions);
            };
        }
    };
})
        .directive('owlCarouselItem', [function () {
                return {
                    restrict: 'A',
                    transclude: false,
                    link: function (scope, element) {
                        // wait for the last item in the ng-repeat then call init
                        if (scope.$last) {
                            scope.initCarousel(element.parent());
                        }
                    }
                };
            }]);
