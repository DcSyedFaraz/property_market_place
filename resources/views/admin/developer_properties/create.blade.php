@extends('admin.layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('developer_properties.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Property Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Developer</label>
                <select class="form-control select2" name="developer_id">
                    @foreach ($developers as $developer)
                        <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="new">New Launch</option>
                    <option value="under_construction">Under Construction</option>
                    <option value="ready_to_move">Ready to Move</option>
                </select>
            </div>



            <div class="form-group">
                <label for="price">Price (AED)</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <!-- Property Description with Summernote -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <!-- Multiple Key Highlights -->
            <div class="form-group">
                <label for="key_highlights">Key Highlights</label>
                <table class="table" id="keyHighlightsTable">
                    <tbody>
                        <tr>
                            <td><input type="text" name="key_highlights[]" class="form-control"></td>
                            <td><button type="button" class="btn btn-success add-key-highlight">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <label for="payment_plan">Payment Plan</label>
                <input type="text" class="form-control" id="payment_plan" name="payment_plan">
            </div>

            <div class="form-group">
                <label for="handover_date">Handover Date</label>
                <input type="text" class="form-control" id="handover_date" name="handover_date">
            </div>

            <div class="form-group">
                <label for="handover_percentage">Handover Percentage</label>
                <input type="text" class="form-control" id="handover_percentage" name="handover_percentage">
            </div>

            <div class="form-group">
                <label for="down_percentage">Down Payment Percentage</label>
                <input type="text" class="form-control" id="down_percentage" name="down_percentage">
            </div>

            <div class="form-group">
                <label for="construction_percentage">Construction Percentage</label>
                <input type="text" class="form-control" id="construction_percentage" name="construction_percentage">
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" accept="image/*" class="form-control" id="logo" name="logo">
            </div>

            <div class="form-group">
                <label for="cover_image">Cover Image</label>
                <input type="file" accept="image/*" class="form-control" id="cover_image" name="cover_image">
            </div>

            <div class="form-group">
                <label for="community">Community</label>
                <input type="text" class="form-control" id="community" name="community">
            </div>

            <div class="form-group">
                <label for="master_plan_image">Master Plan Image</label>
                <input type="file" accept="image/*" class="form-control" id="master_plan_image" name="master_plan_image">
            </div>

            <div class="form-group">
                <label for="location_map">Location Map</label>
                <input type="file" accept="image/*" class="form-control" id="location_map" name="location_map">
            </div>


            <!-- Multiple Locations with Distance -->
            <div class="form-group">
                <label for="locations">Locations</label>
                <table class="table" id="locationsTable">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Distance (minutes)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-control w-full select2" name="locations[0][location_id]">
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input type="number" name="locations[0][distance]" class="form-control" required></td>
                            <td><button type="button" class="btn btn-success add-location">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- Multiple Property Types -->
            <div class="form-group">
                <label for="property_types">Property Types</label>
                <table class="table" id="propertyTypesTable">
                    <thead>
                        <tr>
                            <th>Property Type</th>
                            <th>Unit Type</th>
                            <th>Size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="property_types[0][property_type]" class="form-control"
                                    required>
                            </td>
                            <td><input type="text" name="property_types[0][unit_type]" class="form-control"></td>
                            <td><input type="text" name="property_types[0][size]" class="form-control"></td>
                            <td><button type="button" class="btn btn-success add-property-type">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>



            <!-- Multiple Floor Plans -->
            <div class="form-group">
                <label for="floor_plans">Floor Plans</label>
                <table class="table" id="floorPlansTable">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Unit Type</th>
                            <th>Floor Details</th>
                            <th>Sizes</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="floor_plans[0][category]" class="form-control" required></td>
                            <td><input type="text" name="floor_plans[0][unit_type]" class="form-control"></td>
                            <td><input type="text" name="floor_plans[0][floor_details]" class="form-control"></td>
                            <td><input type="text" name="floor_plans[0][sizes]" class="form-control"></td>
                            <td><input type="text" name="floor_plans[0][type]" class="form-control"></td>
                            <td><input type="file" name="floor_plans[0][image]" class="form-control"></td>
                            <td><button type="button" class="btn btn-success add-floor-plan">+</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Master Plan -->
            <div class="form-group">
                <label for="master_plan">Master Plan</label>
                <select class="form-control select2" id="master_plan" name="master_plan_id[]" multiple>
                    @foreach ($master_plans as $master_plan)
                        <option value="{{ $master_plan->id }}">{{ $master_plan->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Amenities -->
            <div class="form-group">
                <label for="amenities">Amenities</label>
                <select class="form-control select2" id="amenities" name="amenity_ids[]" multiple>
                    @foreach ($amenities as $amenity)
                        <option value="{{ $amenity->id }}">{{ $amenity->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            $('#description').summernote({
                height: 200, // Set the height of the editor
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Location Add Row
            var locationIndex = 1;
            $('.add-location').click(function() {
                $('#locationsTable tbody').append(`
        <tr>
            <td>
                <select class="form-control select2" name="locations[${locationIndex}][location_id]">
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </td>
            <td><input type="number" name="locations[${locationIndex}][distance]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger remove-location">-</button></td>
        </tr>
    `);
                locationIndex++;
                $('.select2').select2(); // Reinitialize select2 for new rows
            });

            $(document).on('click', '.remove-location', function() {
                $(this).closest('tr').remove();
            });


            // Property Type Add Row
            var propertyTypeIndex = 1;
            $('.add-property-type').click(function() {
                $('#propertyTypesTable tbody').append(`
                <tr>
                    <td><input type="text" name="property_types[${propertyTypeIndex}][property_type]" class="form-control"></td>
                    <td><input type="text" name="property_types[${propertyTypeIndex}][unit_type]" class="form-control"></td>
                    <td><input type="text" name="property_types[${propertyTypeIndex}][size]" class="form-control"></td>
                    <td><button type="button" class="btn btn-danger remove-property-type">-</button></td>
                </tr>
            `);
                propertyTypeIndex++;
            });

            $(document).on('click', '.remove-property-type', function() {
                $(this).closest('tr').remove();
            });

            // Key Highlight Add Row
            $('.add-key-highlight').click(function() {
                $('#keyHighlightsTable tbody').append(`
                <tr>
                    <td><input type="text" name="key_highlights[]" class="form-control"></td>
                    <td><button type="button" class="btn btn-danger remove-key-highlight">-</button></td>
                </tr>
            `);
            });

            $(document).on('click', '.remove-key-highlight', function() {
                $(this).closest('tr').remove();
            });

            // Floor Plan Add Row
            var floorPlanIndex = 1;
            $('.add-floor-plan').click(function() {
                $('#floorPlansTable tbody').append(`
                <tr>
                    <td><input type="text" name="floor_plans[${floorPlanIndex}][category]" class="form-control"></td>
                    <td><input type="text" name="floor_plans[${floorPlanIndex}][unit_type]" class="form-control"></td>
                    <td><input type="text" name="floor_plans[${floorPlanIndex}][floor_details]" class="form-control"></td>
                    <td><input type="text" name="floor_plans[${floorPlanIndex}][sizes]" class="form-control"></td>
                    <td><input type="text" name="floor_plans[${floorPlanIndex}][type]" class="form-control"></td>
                    <td><input type="file" name="floor_plans[${floorPlanIndex}][image]" class="form-control"></td>
                    <td><button type="button" class="btn btn-danger remove-floor-plan">-</button></td>
                </tr>
            `);
                floorPlanIndex++;
            });

            $(document).on('click', '.remove-floor-plan', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>
@endsection
