<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">District Wise Data</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 control-label pt-2" for="inputDefault"><b>Select District</b></label>
                        <div class="col-lg-6">
                            <select class="form-control" id="inputDefault">
                                <option value="">Select</option>
                                <option value="ALL">State</option>
                                @foreach ($districts as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Export as Excel</button>
                </div>
            </div>
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>Scheme name</th>
                        <th>Fund Disbursed</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody id="api_table">

                </tbody>
            </table>
        </div>
    </div>

</div>
{{-- getDashboardTable ajax --}}
<script>
    $(document).ready(function() {
        $('#inputDefault').change(function() {
            var district_id = $(this).val();
            $.ajax({
                url: "{{ route('getDashboardTable') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "district_id": district_id
                },
                success: function(response) {
                //
                    var table = '';
                    $.each(response, function(key, value) {
                        table += '<tr>';
                        table += '<td>' + value.scheme_name + '</td>';
                        table += '<td>' + value.amount_disbursed + '</td>';
                        table += '<td>' + value.department + '</td>';
                        table += '</tr>';
                    });
                    $('#api_table').html(table);

                }
            });
        });
    });
</script>
