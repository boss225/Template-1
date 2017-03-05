angular.module('myTem1').controller('headerCtrl', function ($scope, $http) {
    $http({method: 'GET', url: $scope.urlothersetting + 'get-logo-by-shop-name?shop_name=sunshopseles'
    }).then(function mySucces(response) {
        $scope.logoshop = response.data;
    }, function myError(response) {
        $scope.logoshop = response.statusText;
    });
    
    $http({method: 'GET', url: $scope.urlprod + 'get-all-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.allprods = response.data;
    }, function myError(response) {
        $scope.allprods = response.statusText;
    });

}).controller('footerCtrl', function ($scope, $http) {
    $http({method: 'GET', url: $scope.urlwebsetting + 'get-all-partner-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.partner = response.data;
    }, function myError(response) {
        $scope.partner = response.statusText;
    });

    $http({method: 'GET', url: $scope.urlothersetting + 'get-logo-by-shop-name?shop_name=sunshopseles'
    }).then(function mySucces(response) {
        $scope.logoshop = response.data;
    }, function myError(response) {
        $scope.logoshop = response.statusText;
    });

    $http({method: 'GET', url: $scope.urlwebsetting + 'get-about-by-shop-name?shop_name=sunshopseles&language=vi-VN'
    }).then(function mySucces(response) {
        $scope.abouts = response.data;
    }, function myError(response) {
        $scope.abouts = response.statusText;
    });
}).controller('homeCtrl', function ($scope, $http) {
    $http({method: 'GET', url: $scope.urlcategory + 'get-all-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.alldm = response.data;
    }, function myError(response) {
        $scope.alldm = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod + 'get-all-by-shop-name-and-is-sellest?shop_name=sunshopseles&is_sellest=1&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.prodseles = response.data;
    }, function myError(response) {
        $scope.prodseles = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod + 'get-all-by-shop-name-and-category-id-and-level?shop_name=sunshopseles&category_id=466&level=2&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.prodwomen = response.data;
    }, function myError(response) {
        $scope.prodseles = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod + 'get-all-by-shop-name-and-category-id-and-level?shop_name=sunshopseles&category_id=470&level=2&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.prodman = response.data;
    }, function myError(response) {
        $scope.prodseles = response.statusText;
    });

}).controller('contactCtrl', function ($scope, $http) {
    $http({method: 'GET', url: $scope.urlwebsetting + 'get-about-by-shop-name?shop_name=sunshopseles&language=vi-VN'
    }).then(function mySucces(response) {
        $scope.abouts = response.data;
    }, function myError(response) {
        $scope.abouts = response.statusText;
    });

}).controller('policyCtrl', function ($scope, $http, $stateParams) {
    $scope.pol = $stateParams.ten;
    $scope.poli = "";
    if ($scope.pol === "mua") {
        $scope.poli = "payment";
    } else {
        $scope.poli = "privacy";
    }

    $http({method: 'GET', url: $scope.urlwebsetting + 'get-policy-' + $scope.poli + '-by-shop-name?shop_name=sunshopseles&language=vi-VN'
    }).then(function mySucces(response) {
        $scope.policys = response.data;
    }, function myError(response) {
        $scope.policys = response.statusText;
    });

})


