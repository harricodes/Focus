@extends('layouts.primary')


@section('content')

    <div class="page-header mb-4 border-radius-xl">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">

                    <h5 class="text-white fadeIn2 fadeInBottom mt-4">
                        {{__('“An hour of planning can save you 10 hours of doing.”')}}

                    </h5>
                    <p class="text-white opacity-8 fadeIn3 fadeInBottom">
                        {{__('— Dale Carnegie')}}

                    </p>
                </div>
            </div>
            <a  href="/weekly-plan" type="button" class="btn bg-gradient-light">
                {{__('Make a Weekly Plan')}}

            </a>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{__('List of Weekly Plans')}}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">

                        @foreach($plans as $plan)
                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">{{$plan->title}}</h6>

                                    <span class="text-xs mb-4">
                                        {{__('From Date:')}}

                                        <span class="text-dark ms-sm-2 font-weight-bold ">
                                            {{$plan->from_date}}
                                        </span>

                                    </span>
                                    <span class="text-xs">
                                        {{__('To Date:')}}

                                        <span class="text-dark ms-sm-2 font-weight-bold">
                                            {{$plan->to_date}}
                                        </span>

                                    </span>

                                </div>
                                <div class="ms-auto text-end">

                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="/delete/weekly-plan/{{$plan->id}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="/weekly-plan?id={{$plan->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                        @endforeach




                    </ul>
                </div>
            </div>
        </div>

    </div>




@endsection








