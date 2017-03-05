<div ng-controller="footerCtrl" class="foters"><br>
    <div class="paners">
        <data-owl-carousel class="container owl-carousel" data-options="{autoPlay:3000 ,navigation: false, pagination: false, rewindNav : true, items: 6}">
            <div owl-carousel-item="" ng-repeat="item in ::partner" class="item">
                <img class="img-responsive" src="{{imageslide + item.logo}}">
            </div>
        </data-owl-carousel>
    </div>
    <div class="foter">
        <div class="container">
            <br>
            <div class="col-md-4 col-sm-6 col-xs-12 foter1">
                <a href="#/"><img src="{{imageslide + logoshop.company_logo}}"></a>
                <br><br class="hidden-sm">
                <p ng-bind-html="abouts.about_short_vi"></p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 foter2">
                <h3><strong>CHÍNH SÁCH</strong></h3>
                <hr>
                <p><a href="#/chinh-sach/bao-mat">Chính sách bảo mật</a></p>
                <p><a href="#/chinh-sach/mua-hang">Chính sách vận chuyển</a></p>
                <p><a href="#/chinh-sach/bao-mat">Chính sách đổi trả</a></p>
                <p><a href="#/chinh-sach/mua-hang">Chính sách mua hàng</a></p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 foter3">
                <h3><strong>LIÊN KẾT</strong></h3>
                <hr>
                <p><a ui-sref="home">Trang chủ</a></p>
                <p><a ui-sref="about">Giới thiệu</a></p>
                <p><a ui-sref="contact">Liên hệ</a></p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 fanpage">
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/a2hot/?fref=ts" data-tabs="timeline" width="300" height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/a2hot/?fref=ts">
                            <a href="https://www.facebook.com/a2hot/?fref=ts">A2HOT Việt Nam</a></blockquote>
                    </div>
                </div>
            </div>
        </div>       
        <div class="container">
            <hr>
            <p>© Sun Shop - All Rights Reserved </p>
        </div>
    </div>
</div>

