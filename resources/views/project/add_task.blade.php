@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Task') }}</div>

                <div class="card-body">
                    <form action="{{route('store.task',$project->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="projectName">Project Name</label>
                            <input type="text" class="form-control" id="projectName" value="{{$project->name}}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="projectName">Task Name</label>
                            <input type="text" name="name" class="form-control" id="projectName">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"
                                placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="due_date">Due Date</label>
                            <input type="date" name="due_date" class="form-control" id="due_date">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option>Active</option>
                                <option>Inactive</option>

                            </select>
                        </div> <br>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
                </body>

                </html>

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