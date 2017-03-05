<div ng-controller="homeCtrl">
    <div class="row">
        <div class="col-md-3">
            <div ng-cloak="" layout-gt-sm="row" layout="column" class="listdemoBasicUsage">
                <div flex-gt-sm="50" flex="">
                    <md-toolbar layout="row" class="md-hue-3">
                        <div class="md-toolbar-tools">
                            <span>DANH MỤC SẢN PHẨM</span>
                        </div>
                    </md-toolbar>
                    <md-content class="catolog">
                        <md-list flex="">
                            <a href="#/danh-muc/giam-gia">
                                <md-list-item ng-click="null">
                                    <b>HÀNG GIẢM GIÁ</b>
                                </md-list-item>
                            </a>
                            <a href="#/danh-muc/ban-chay-nhat">
                                <md-list-item ng-click="null">
                                    <b>BÁN CHẠY NHẤT</b>
                                </md-list-item>
                            </a>
                            <div ng-repeat="alldm in alldm">
                                <a><md-list-item ng-if="alldm.level === 1 && alldm.id !== 465" ng-click="null">
                                        <p>{{alldm.name_vi}}</p><span class="fa fa-angle-down"></span>
                                    </md-list-item></a>
                                <a href="#/danh-muc/{{alldm.seo_vi}}-{{alldm.id}}.{{alldm.level}}"><md-list-item ng-if="alldm.id === 465" ng-click="null">
                                        <b>{{alldm.name_vi}}</b>
                                    </md-list-item></a>
                                <a href="#/danh-muc/{{alldm.seo_vi}}-{{alldm.id}}.{{alldm.level}}"><md-list-item ng-if="alldm.level !== 1 && alldm.id !== 476" ng-click="null">
                                        <li>{{alldm.name_vi}}</li>
                                    </md-list-item></a>
                            </div>
                        </md-list>
                    </md-content>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div id="wowslider-container1">
                <div class="ws_images"><ul>
                        <li><a><img src="data1/images/slider_1.jpg" title="" id="wows1_0"/></a></li>
                        <li><img src="data1/images/slider_2.jpg" alt="slider_2" title="slider_2" id="wows1_1"/></li>
                    </ul></div>
            </div>	
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
        </div>
    </div>
    <br><br/>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6 block-content">
            <img class="img-responsive" src="{{imageslide + imgslide[0].image}}">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 block-content">
            <img class="img-responsive" src="{{imageslide + imgslide[1].image}}">
        </div>
        <div class="col-md-4 col-sm-4 hidden-xs block-content">
            <img class="img-responsive" src="{{imageslide + imgslide[2].image}}">
        </div>
    </div>
    <div class="prodseles">
        <h3>
            <strong>SẢN PHẨM BÁN CHẠY</strong>
        </h3>
        <data-owl-carousel class="owl-carousel" data-options="{autoPlay:3000 ,navigation: true, pagination: false, rewindNav : true, items: 4}">
            <div owl-carousel-item="" ng-repeat="item in ::prodseles" class="item">
                <a href="#/chi-tiet/{{item.name_seo_vi}}-{{item.id}}">
                    <img class="img-responsive" src="{{imageslide + item.image}}">
                    <h4>
                        {{item.name_vi}}
                    </h4>
                </a>
                <h5>
                    <span ng-if="item.price_off_percent !== 0">{{(item.price_off_percent / 100 + 1)*item.price_vn|currency:'':0}}đ</span>
                    {{item.price_vn|currency:'':0}}đ
                </h5>
                <!--<md-button>THÊM VÀO GIỎ</md-button>-->
                <ngcart-addtocart id="{{item.id}}" name="{{item.name_vi}}" price="{{item.price_vn}}" quantity="1" img="{{imageslide + item.image}}">ĐẶT HÀNG</ngcart-addtocart>
                
            </div>
        </data-owl-carousel>
    </div>

    <div class="container block-content">
        <img src="{{imageslide + imgslide[3].image}}" width="100%">
    </div>

    <div class="prodseles">
        <h3>
            <strong>ÁO NAM</strong>
        </h3>
        <data-owl-carousel class="owl-carousel" data-options="{autoPlay:3000 ,navigation: true, pagination: false, rewindNav : true, items: 4}">
            <div owl-carousel-item="" ng-repeat="item in ::prodman" class="item">
                <a href="#/chi-tiet/{{item.name_seo_vi}}-{{item.id}}">
                    <img class="img-responsive" src="{{imageslide + item.image}}">
                    <h4>
                        {{item.name_vi}}
                    </h4>
                </a>
                <h5>
                    <span ng-if="item.price_off_percent !== 0">{{(item.price_off_percent / 100 + 1)*item.price_vn|currency:'':0}}đ</span>
                    {{item.price_vn|currency:'':0}}đ
                </h5>
                <ngcart-addtocart id="{{item.id}}" name="{{item.name_vi}}" price="{{item.price_vn}}" quantity="1" img="{{imageslide + item.image}}">THÊM VÀO GIỎ</ngcart-addtocart>
            </div>
        </data-owl-carousel>
    </div>
    <div class="prodseles">
        <h3>
            <strong>ÁO NỮ</strong>
        </h3>
        <data-owl-carousel class="owl-carousel" data-options="{autoPlay:3000 ,navigation: true, pagination: false, rewindNav : true, items: 4}">
            <div owl-carousel-item="" ng-repeat="item in ::prodwomen" class="item">
                <a href="#/chi-tiet/{{item.name_seo_vi}}-{{item.id}}">
                    <img class="img-responsive" src="{{imageslide + item.image}}">
                    <h4>
                        {{item.name_vi}}
                    </h4>
                </a>
                <h5>
                    <span ng-if="item.price_off_percent !== 0">{{(item.price_off_percent / 100 + 1)*item.price_vn|currency:'':0}}đ</span>
                    {{item.price_vn|currency:'':0}}đ
                </h5>
                <ngcart-addtocart id="{{item.id}}" name="{{item.name_vi}}" price="{{item.price_vn}}" quantity="1" img="{{imageslide + item.image}}">THÊM VÀO GIỎ</ngcart-addtocart>
            </div>
        </data-owl-carousel>
    </div>

</div>



