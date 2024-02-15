@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Projects') }}</div>

                <div class="card-body">
                    <div class="container">
                        <h2 class="mt-5 mb-4">Projects</h2>
                        <table class="table">
                            <thead>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Add Task</th>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>{{$project->start_date}}</td>
                                    <td>{{$project->end_date}}</td> <br>
                                    <td>
                                        <a href="{{route('add.task', $project->id)}}" class="btn btn-danger">Add</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footerScript')
@if(Session::has('success'))
<script type="text/javascript">
$(function() {
    toastr.success("{{ Session::get('success') }}");
})
</script>
@endif
@if(Session::has('fail'))
<script type="text/javascript">
$(function() {
    toastr.error("{{ Session::get('fail') }}");
})
</script>
@endif
@stop