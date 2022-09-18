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
        <a href="/" class="btn btn-secondary mt-2">Index</a>
        <form  method="POST" action="{{ url('create-task') }}">
            {{ csrf_field() }}
            <div class="rows">
                <div class="col-6 mb-2">
                    <label for="detail">Details</label>
                    <input type="text" name="detail" id="detail" class="form-control">
                </div>
                <div class="col-6 mb-2">
                    <label for="status">Status</label>
                    <select name="status" class="form-select">
                            <option value="" style="display: none">Choose</option>
                            <option value="pending">Pending</option>
                            <option value="done">Done</option>
                    </select>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
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