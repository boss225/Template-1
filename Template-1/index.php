<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Social</title>
        <meta name="robots" content="index,follow" />
        <meta name="author" content="" />
        <meta name="generator" content="" />
        <meta name="keywords" content="<%= model.keywords.join(',') %>" />
        <meta name="description" content="<%= model.description %>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<%= model.title %>" />
        <meta property="og:url" content="<%= model.url %>" />
        <meta property="og:description" content="<%= model.description %>" />
        <meta property="og:image" content="<%= model.image %>" />
        <meta property="og:site_name" content="codequs" />
        <meta property="article:publisher" content="https://www.facebook.com/codequs" />
        <meta property="article:author" content="https://www.facebook.com/codequs" />
        <% if(model.keywords) {
        model.keywords.forEach(function(t){
        %>
        <meta property="article:tag" content="<%= t %>" />
        <% })} %>

        <meta name="twitter:title" content="<%= model.title %>" />
        <meta name="twitter:url" content="<%= model.url %>" />
        <meta name="twitter:description" content="<%= model.description %>" />
        <meta name="twitter:image" content="<%= model.image %>" />

        <meta itemprop="name" content="<%= model.title %>" />
        <meta itemprop="url" content="<%= model.url %>" />
        <meta itemprop="description" content="<%= model.description %>" />
        <meta itemprop="image" content="<%= model.image %>" />

        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="canonical" href="<%= model.url %>" />
        <link rel="alternate" type="application/rss+xml" title="<%= model.title %>" href="https://codequs.com/feed" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://school.codequs.com/css/widget.css" rel="stylesheet" />
        <link href="/css/social-share-kit.css" rel="stylesheet" />
        <link href="/css/layout.css" rel="stylesheet" />


    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="/" class="navbar-brand">
                        <img src="/logo.png" alt="codequs.com" />
                    </a>

                </div>

                <form class="navbar-form navbar-left quick-search hidden-xs" role="search" action="/search/">
                    <div class="input-group">
                        <input class="form-control" name="kwd" autocomplete="off" id="kwd" placeholder="Quick search" type="text">
                        <div class="input-group-addon">
                            <button type="submit" class="btn"><i class="fa fa-send"></i></button>
                        </div>
                    </div>
                </form>


                <form class="navbar-form navbar-right hidden-xs" role="search">
                    <div class="form-group">
                        <button type="button" onclick="alert('Comming soon!')" class="btn btn-primary">Sign up</button>
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="alert('Comming soon!')" class="btn btn-success">Login</button>
                    </div>

                </form>


            </div>
            <!-- /.container-fluid -->
        </nav>

        <div class="container main-content">

            <%- body %>

        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>About</h3>
                        This blog is dedicated to provide quality tutorials on various programming language. If you want to cooperate, write articles...
                        <br />Plz contact us: hello[at]codequs.com <br />

                    </div>

                    <div class="col-lg-4">
                        <h3>Popular</h3>
                        <div class="row">
                            <% populars.forEach(function(x){%>
                            <div class="col-lg-3 col-sm-6 white-b">
                                <a href="/p/<%= x.sid %>" title="<%= x.tl %>">
                                    <img class="img-responsive" src="<%= x.img %>" alt="<%= x.tl %>" />
                                </a>
                            </div>
                            <%})%>
                        </div>


                    </div>

                    <div class="col-lg-4">
                        <h3>Connect</h3>
                        <form class="ajax" action="/subscribe" method="POST">
                            <div class="form-group">
                                Get weekly updates on new Code courses and free tutorials via email.
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="mail" placeholder="yourmail@domain.com" class="form-control">
                                    <span class="input-group-btn"><button class="btn btn-primary" type="submit">Subscribe</button></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="ssk-group ssk-rounded">
                                    <a class="ssk ssk-facebook" href=""></a>
                                    <a class="ssk ssk-twitter" href=""></a>
                                    <a class="ssk ssk-google-plus" href=""></a>
                                    <a class="ssk ssk-pinterest" href=""></a>
                                    <a class="ssk ssk-tumblr" href=""></a>
                                    <a class="ssk ssk-email" href=""></a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyright">
            <div class="container">
                &copy; 2016 codequs.com
            </div>
        </div>


        <script data-main="/js/main" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.2.0/require.min.js"></script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=687615191258150";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>


    </body>

</html>