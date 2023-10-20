@extends('index1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <center>
            <table class="table table-bordered table-danger table-striped" style="width: 90%;">
                <tr>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>
                    <th>Employee ID</th>
                    <th>Leave Status</th>
                </tr>
                @foreach($data as $datas)
                <tr>
                    <td>{{ $datas->type }}</td>
                    <td>{{ $datas->start_date }}</td>
                    <td>{{ $datas->end_date }}</td>
                    <td>{{ $datas->reason }}</td>
                    <td>{{ $datas->id }}</td>
                    <td>
                        @if($datas->leave_status==0)
                        <a class="btn btn-primary" href="{{ route('update_status', $datas->id) }}">Approve</a>
                        @elseif($datas->leave_status==1)
                        <a class="btn btn-danger" href="">Approved</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </center>
    </div>
</div>
@endsection

