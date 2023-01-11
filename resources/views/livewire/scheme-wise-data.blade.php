<div class="col-md-12 mb-4">
    <div class="card">
        <div class="card-header">
            Scheme Wise Data
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="district">Select a District</label>
                        <select class="form-control" id="district" wire:model="district">
                            <option value="ALL">All</option>
                            @foreach ($districts as $d)
                                <option value="{{ $d->id }}">{{ $d->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>Scheme name</th>
                            <th>Approved Applications</th>
                            <th>Sanctioned Applications</th>
                            <th>Fund Disbursed</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d['scheme_name'] }}</td>
                                <td>{{ $d['application_approved'] }}</td>
                                <td>{{ $d['application_sanctioned'] }}</td>
                                <td>{{ $d['amount_disbursed'] }}</td>
                                <td>{{ $d['department'] }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
