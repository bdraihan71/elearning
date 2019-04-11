@include('layouts.partials.head')
<body>
    <!-- Navbar Start -->
    @include('layouts.partials.nav')
    <!-- Navbar End   -->
    <!-- Main Body start -->
    <div class="container">
        <div class="row ">
            <!-- Right sidebar start -->
            @include('layouts.partials.sidenav')
            <!-- Right sidebar End -->
            <!-- Main body start -->
            <div class="col-9"> <br>
                <!-- Overview section start -->
                <div class="card bg-tomato">
                    <div class="card-header text-center">
                        <b>Overview</b>
                    </div>
                    <div class="container bg-white"> <br>
                        <div class="row tt">
                            <div class="col-3">
                                <div class="card card-color">
                                    <div class="card-body">
                                        <i class="fas fa-chalkboard-teacher fa-2x"></i> <b>120</b>
                                        <H3>Teachers</H3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card card-color">
                                    <div class="card-body">
                                        <i class="fas fa-user-graduate fa-2x"></i> <b>120</b>
                                        <H3>Students</H3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card card-color">
                                    <div class="card-body">
                                        <i class="fas fa-university fa-2x"></i> <b>120</b>
                                        <H3>courses</H3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card card-color">
                                    <div class="card-body">
                                        <i class="fas fa-book fa-2x"></i> <b>120</b>
                                        <H3>classes</H3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- Overview section start -->
                <div class="card bg-tomato">
                    <div class="card-header text-center">
                        Settings
                    </div>
                    <div class="container bg-white"> <br>
                        <div class="row tt">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Main body End -->
        </div>
    </div>
    <!-- Main Body End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>

</html> 