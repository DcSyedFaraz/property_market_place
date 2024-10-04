@extends('frontend.layouts.app')
@section('content')
    <div class="detail">
        <div class="row">
            <div class="col-md-12">
                <div class="payment-detail">
                    <h3>{{ $developer_property->name }}</h3>
                    <p>{{ $developer_property->floor_plan_description }} </p>
                </div>
            </div>
        </div>
    </div>

    <div class="detail">
        <div class="row">
            <div class="col-md-12">
                <div class="floor-plan-main">
                <div class="download">
                    <a href="#">Download</a>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-wrap">
                            <div class="filter-label">
                                <label>Property Type</label>
                            </div>

                            <select id="PropertyTypeId">
                                <option value="0" selected="selected">All</option>
                                <option value="Apartment">Apartment</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-wrap">
                            <div class="filter-label">
                                <label>Category</label>
                            </div>

                            <select id="PropertyTypeId">
                                <option value="0" selected="selected">All</option>
                                <option value="Apartment">Apartment</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-wrap">
                            <div class="filter-label">
                                <label>Unit Type</label>
                            </div>

                            <select id="PropertyTypeId">
                                <option value="0" selected="selected">All</option>
                                <option value="Apartment">Apartment</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

                <div class="floor-plan mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Floor Plan</th>
                                <th>Category</th>
                                <th>Floor Details</th>
                                <th>Sizes</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">
                                    <img src="{{ asset('storage/' . $developer_property->logo) }}" width="100" alt="logo" class="logo">
                                </a></td>
                                <td>2 Bedroom</td>
                                <td>2 Bedroom</td>
                                <td>On Request</td>
                                <td>Apartment</td>
                            </tr>
                            <tr>
                                <td><a href="#">
                                    <img src="{{ asset('storage/' . $developer_property->logo) }}" width="100" alt="logo" class="logo">
                                </a></td>
                                <td>2 Bedroom</td>
                                <td>2 Bedroom</td>
                                <td>On Request</td>
                                <td>Apartment</td>
                            </tr>
                            <tr>
                                <td><a href="#">
                                    <img src="{{ asset('storage/' . $developer_property->logo) }}" width="100" alt="logo" class="logo">
                                </a></td>
                                <td>2 Bedroom</td>
                                <td>2 Bedroom</td>
                                <td>On Request</td>
                                <td>Apartment</td>
                            </tr>
                            <tr>
                                <td><a href="#">
                                    <img src="{{ asset('storage/' . $developer_property->logo) }}" width="100" alt="logo" class="logo">
                                </a></td>
                                <td>2 Bedroom</td>
                                <td>2 Bedroom</td>
                                <td>On Request</td>
                                <td>Apartment</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
