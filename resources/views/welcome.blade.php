<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <title>Agilax</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                     <img src="/images/agilax.png"/>Agilax
                </div>
                 <div class="sub-title"><q>Stay hungry. Stay foolish.</q></div>
                 <div class="m-b-md">Accelerate <strong>Sustainable Development</strong>.</div>

                <div class="links">
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"> <img src="/images/cbma.png" alt="community based monitoring application" style="height: 50px; vertical-align: middle;margin-right: 10px;"/> Community Based Monitoring</a>
                    <a href="#"><span style="font-size:21px;">🚀</span> Re-usable Rockets</a>
                    <a href="#"><span style="font-size:21px;">📸</span> Blog</a>
                </div>
            </div>
        </div>


        <!-- Community Based Monitoring Application -->
        <div class="modal fade bd-example-modal-lg a-cbma-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h1>Your City. Through Data.</h1>
                        <div class="sub-head mt-1">Right at your fingertips.</div>
                        
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="row a-r1-img">
                                       
                                        <img class="a-household a-f-img" src="/images/cbma.png" alt="household_survey"/>
                                        <img class="a-household" src="/images/cbma.png" alt="household_survey"/>
                                    </div>
                                     <div class="row a-r2-img">
                                         <div class="m-circle"></div>
                                          <div class="s-circle"></div>
                                        <img class="a-household a-f-img" src="/images/cbma.png" alt="household_survey"/>
                                        <img class="a-household" src="/images/cbma.png" alt="household_survey"/>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12 col-sm-12">
                                            <h5>Community Based Monitoring Application</h5>
                                            <ul>
                                                <li>Mobile Household Data Collection</li>
                                                <li>Automated Data Collation</li>
                                                 <li>Barangay Profiling Summary</li>
                                                <li>Instant Heat Mapping Analysis</li>
                                                <li>In-house Server</li>
                                                <li>In-house Database</li>
                                                <small>*Server and Database can be managed by the City Planning Office.</small>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img class="a-geo-map" src="/images/geo-mapping.png" alt="geo-mapping"/>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <div class="modal-footer">
                        <a href="mailto:helloagilax@gmail.com?Subject=Hello%20there!" target="_top"><button type="button" class="btn btn-primary">Reach us!</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Community Based Monitoring Application -->

    </body>
</html>
