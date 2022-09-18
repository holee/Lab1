<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <a href="/" class="btn btn-secondary mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
            Index
        </a>
        <form  method="POST" action="{{ url('task-edit',$task->id) }}">
            {{ csrf_field() }}
            @method('PUT')
            <div class="rows">
                <div class="col-6 mb-2">
                    <label for="detail">Details</label>
                    <input type="text" name="detail" id="detail" 
                            value="{{ $task->detail }}"
                           class="form-control">
                </div>
                <div class="col-6 mb-2">
                    <label for="status">Status</label>
                    <select name="status" class="form-select">
                            <option value="" style="display: none">Choose</option>
                            <option value="pending" {{ $task->status=='pending'?'selected':'' }} >Pending</option>
                            <option value="done" {{ $task->status=='done'?'selected':'' }}>Done</option>
                    </select>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-md btn-primary">Change</button>
                </div>
            </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" 
            crossorigin="anonymous"></script>
</body>
</html>