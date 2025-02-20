<div>
    <!-- <h1>Welcome to the Dashboard</h1> -->
    <div class="container">
        <div class="row">
            <h1>Welcome {{auth()->user()->first_name." ".auth()->user()->last_name}}</h1>
            <div class="col-md-6">
                <div class="card m-b-30">
                    <div class="card-header">                                
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h5 class="card-title mb-0">List of added Events</h5>
                            </div>
                            <div class="col-4">
                                <ul class="list-inline-group text-right mb-1 pl-0">
                                    <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                                </ul>                                        
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-file-type">
                            <ul class="list-unstyled">
                            @foreach ($events as $event)
                                <li class="media mb-3">
                                    <!-- <span class="mr-3 align-self-center img-icon primary-rgba text-primary">.example</span> -->
                                    <div class="media-body">
                                    <h5 class="font-16 mb-1">{{$event->name}}<i class="feather icon-download-cloud float-right"></i></h5>
                                    <p>{{ $event->date->format('Y-m-d H:i') }}</p>
                                    </div>
                                </li>
                            @endforeach
                                <!-- <li class="media mb-3">
                                    <span class="mr-3 align-self-center img-icon success-rgba text-success">.xls</span>
                                    <div class="media-body">
                                    <h5 class="font-16 mb-1">Complete Product Sheet<i class="feather icon-download-cloud float-right"></i></h5>
                                    <p>.xls, 2.5 MB</p>
                                    </div>
                                </li>
                                <li class="media mb-3">
                                    <span class="mr-3 align-self-center img-icon danger-rgba text-danger">.pdf</span>
                                    <div class="media-body">
                                    <h5 class="font-16 mb-1">Annual Sales Report 2018-19<i class="feather icon-download-cloud float-right"></i></h5>
                                    <p>.pdf, 10.5 MB</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="mr-3 align-self-center img-icon info-rgba text-info">.zip</span>
                                    <div class="media-body">
                                    <h5 class="font-16 mb-1">Brand Photography<i class="feather icon-download-cloud float-right"></i></h5>
                                    <p>.zip, 53.2 MB</p>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>