@extends('frontend.layouts.app')
@section('content')
    <!-- Left Side -->
    <div class="row">
        <div class="col-md-9">
            <div class="ico-text">
                <p><i class="bi bi-house-add"></i> Home / <a
                        href="{{ route('community_page', $developer_property->community) }}">{{ $developer_property->community_name->name ?? '' }}</a>

                    / <a href="#">{{ $developer_property->developer->name ?? '' }}</a> /
                    {{ $developer_property->name }} / Overview
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <a class="btn10" href="#">Download Brochure</a>
        </div>
    </div>
    <div class="detail">
        <h3>{{ $developer_property->name }}</h3>
        <p>By {{ $developer_property->developer->name ?? '' }} |
            {{ $developer_property->community_name->name ?? '' }}</p>
        @foreach ($developer_property->propertyTypes as $propertyType)
            <div class="row cardse1">
                <div class="col-md-4">
                    <p><strong>Property Type:</strong> {{ $propertyType->property_type }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p><strong>Unit type:</strong> {{ $propertyType->unit_type }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Size:</strong> {{ $propertyType->size }}</p>
                </div>
            </div>
        @endforeach

        <h4>Direct Sales & 0% Commission</h4>
    </div>
    <div class="detail">
        <div class="row">
            <div class="col-md-12">
                <div class="le2">
                    <h3>Overview</h3>
                    <p>{{ $developer_property->description }}</p>
                    <h3>Key Highlights:</h3>
                    <ul>
                        @php
                            $keyHighlights = explode(',', $developer_property->key_highlights);
                        @endphp
                        @forelse ($keyHighlights as $key_highlight)
                            <li>
                                {{ $key_highlight }}
                            </li>
                        @empty
                            <li> No highlights available.</li>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="detail serv-icon10">
        <h3>Address Residences at {{ $developer_property->name }}</h3>
        <div class="row mt-4">
            @forelse ($developer_property->Amenity as $amenitiy)
                <div class="col-md-3">
                    <div class="icon-with-text">
                        <img src="{{ asset('storage/' . $amenitiy->logo) }}" alt="">
                        <h4>{{ $amenitiy->name }}</h4>
                        <p>{{ $amenitiy->description }}</p>
                    </div>
                </div>
            @empty
            @endforelse

        </div>

        <div class="btn-sec mt-4 d-flex justify-content-center">
            <a href="{{ route('address_residence', $developer_property->id) }}" class="btn10">Read More..</a>
        </div>

    </div>

    <div class="detail">
        <div class="textwithbtn">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h2>Payment Plan</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="#" class="btn10">Download Payment Plan</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="icon-with-text1">
                    <img src="{{ asset('assets/img/pay01.png') }}" alt="">
                    <h4>{{ $developer_property->down_percentage }}%</h4>
                    <p>Down Payment</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-with-text1">
                    <img src="{{ asset('assets/img/pay01.png') }}" alt="">
                    <h4>{{ $developer_property->construction_percentage }}%</h4>
                    <p>During Construction</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-with-text1">
                    <img src="{{ asset('assets/img/pay01.png') }}" alt="">
                    <h4>{{ $developer_property->handover_percentage }}%</h4>
                    <p>On Handover</p>
                </div>
            </div>
        </div>
        <div class="btn-sec mt-4 d-flex justify-content-end">
            <a href="{{ route('payment_plan', $developer_property->id) }}" class="btn10">Read More..</a>
        </div>
    </div>

    <div class="detail map-locat1">
        <h2>Location Map</h2>
        <div class="map-inner mt-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $developer_property->location_map) }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @forelse ($developer_property->locations as $location)
                            <div class="col-md-3">
                                <div class="icon-with-text20">
                                    <img src="{{ asset('storage/' . $location->image) }}" alt="">
                                    <h4>{{ $location->name }}</h4>
                                    <p>{{ $location->pivot->distance }} minutes</p>
                                    <!-- Print the distance from pivot table -->
                                </div>
                            </div>
                        @empty
                            <p>No locations found.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
        <div class="btn-sec mt-4 d-flex justify-content-end">
            <a href="{{ route('location_map', $developer_property->id) }}" class="btn10">Read More..</a>
        </div>
    </div>
    <div class="detail plan-master">
        <h2>Master Plan</h2>
        <div class="map-inner2 mt-4">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $developer_property->master_plan_image) }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @forelse ($developer_property->masterPlans as $masterPlan)
                            <div class="col-md-4">
                                <div class="icon-with-text201">
                                    <p> <img src="{{ asset('storage/' . $masterPlan->image) }}" alt="">
                                        {{ $masterPlan->name }}</p>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-sec mt-4 d-flex justify-content-end">
            <a href="{{ route('master_plan', $developer_property->id) }}" class="btn10">Read More..</a>
        </div>
    </div>
    <div class="detail">
        <h2>Floor Plan</h2>
        <div class="map-inner2">
            <div class="tables-data">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Floor Plan</th>
                            <th scope="col">Category</th>
                            <th scope="col">Unit Type</th>
                            <th scope="col">Floor Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($developer_property->floorPlans as $floorPlan)
                            <tr>
                                {{-- <td><img src="{{ $floorPlan->image}}"
                                                                    alt=""></td> --}}
                                <td><img src="{{ asset('storage/' . $floorPlan->image) }}" alt=""></td>
                                <td>{{ $floorPlan->category }}</td>
                                <td>{{ $floorPlan->unit_type }}</td>
                                <td>{{ $floorPlan->floor_details }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <p>no floor plans available</p>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
        <div class="btn-sec mt-4 d-flex justify-content-end">
            <a href="{{ route('floor_plan', $developer_property->id) }}" class="btn10">Read More..</a>
        </div>
    </div>
    <div class="detail" id="gallery">
        <h2>Image Gallery</h2>
        <div class="gallery-inner">
            <div class="row">
                <div class="col-md-8">
                    @if ($developer_property->images->count() > 0)
                        <img src="{{ asset('storage/' . $developer_property->images[0]->image) }}" alt="">
                    @else
                        <img src="{{ asset('assets/img/default.png') }}" alt="">
                    @endif
                </div>
                <div class="col-md-4 d-flex flex-column gap-3">
                    @foreach ($developer_property->images as $image)
                        <img src="{{ asset('storage/' . $image->image) }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Left Side -->


    <!-- Logo Carousel End -->
@endsection
