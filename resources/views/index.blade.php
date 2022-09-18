<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
     <div class="container mt-2">
        <div class="d-flex mb-3">
            <a href="/create-task"  class="btn btn-md btn-warning me-2"
               style="display: flex;align-items: center;justify-content: space-between;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                <i>New Task</i>
            </a>
            <div class="dropdown">
                <button class="btn btn-md btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                    </svg>
                    Task Filter
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">All</a></li>
                <li><a class="dropdown-item" href="/tasks/done">Done</a></li>
                <li><a class="dropdown-item" href="/tasks/pending">Pending</a></li>
                </ul>
            </div>
        </div>
        <table class="table table-sm table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Task</th>  
                    <th style="width: 8.33%;">Status</th>
                    <th style="width: 16.66%;">Actions</th>      
                </tr>  
            </thead>
            <tbody>
                @foreach ($tasks as $key=>$task)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $task->detail }}</td>
                        <td>{{ $task->status }}</td>
                        <td>
                            <form action="/task-delete/{{ $task->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <a href="/task-edit/{{ $task->id }}"><i class="bi bi-pencil-square"></i></a> |
                                <a href="javascript:void(0)" onclick="this.parentElement.submit();"><i class="bi bi-trash3"></i></a> |
                                <a href="/task-detail/{{ $task->id }}"><i class="bi bi-eye-fill"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" 
            crossorigin="anonymous"></script>
            
    </body>
</html>
