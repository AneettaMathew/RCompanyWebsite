<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary admin-logo-wrp">
                        <img src="{{asset('backend/img/logo.png')}}" alt="">
                    </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('backend/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Reubro International</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Aboutus</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{route('Aboutus')}}" class="dropdown-item">About Us</a>
                        <a href="{{route('add.teams')}}" class="dropdown-item">Add Team Members</a>
                        <a href=" {{route('list.teams')}}" class="dropdown-item">All Team Members</a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Clients</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('client.add')}}" class="dropdown-item">Add Clients</a>
                            <a href="{{route('client.list')}}" class="dropdown-item">List Clients</a>
                        </div>
                    </div>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage portfolio</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="product-list.html" class="dropdown-item">portfoliosection</a>
                            <a href="category-list.html" class="dropdown-item">Portfolio Page</a>
                        </div>
                    </div> -->
                    <div class="navbar-nav dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Services</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('services')}}" class="dropdown-item">Add Services</a>
                            <a href="{{route('serviceslist')}}" class="dropdown-item">List Services</a>
                        </div>
                    </div>
                    <div class="navbar-nav dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Testimonial</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('Testimonial')}}" class="dropdown-item">Add Testimonial</a>
                            <a href="{{route('testimoniallist')}}" class="dropdown-item">List Testimonial</a>
                        </div>
                    </div>
                    <div class="navbar-nav dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Contact Message</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('listmessage')}}" class="dropdown-item">List Messages</a>
                        </div>
                    </div>
                    <div class="navbar-nav dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Request a Quotes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('listrequest')}}" class="dropdown-item">List All Request</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Careers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('careers')}}" class="dropdown-item">Career Designation</a>
                            <a href="{{route('listcareers')}}" class="dropdown-item">All Job options</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manage Applictants</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('listapplicatants')}}" class="dropdown-item">List Applicatants</a>
                            <a href="{{route('listcareers')}}" class="dropdown-item">All Job options</a>
                            
                        </div>
                    </div>
                    <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a> -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->