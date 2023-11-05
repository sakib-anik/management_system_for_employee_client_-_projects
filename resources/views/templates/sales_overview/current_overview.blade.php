<div class="col-xl-8 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Employee Status</h3>
            <div class="card-options">
            </div>
        </div>
        <div class="card-body">
            <!-- on-progress work table start -->
            <div class="col-md-12">
                <table class="table table-hover table-striped text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Employee Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $key => $employee)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$employee->nickName}}</td>
                            <td>{{$employee->phone1}}</td>
                            <td>{{$employee->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>