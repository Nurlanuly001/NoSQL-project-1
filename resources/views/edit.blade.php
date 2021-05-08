<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Milestone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<div ></div>
<div class="row mt-4">
    <div class="col-sm-6 offset-3">
        <h1>UPDATE</h1>
    </div>
    <div class="col-sm-6 offset-3">
        <a href="{{route('vacancy.index')}}" class="btn btn-outline-secondary" style="margin-bottom: 20px;">Back to all Vacancies</a>
    </div>

    <div class="col-sm-6 offset-3 card-body">
        <form action="{{route('vacancy.update'), $vacancy->id}}" method="post">
        @csrf <!-- {{ csrf_field() }} -->
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$vacancy->name}}">
            </div>
            <div class="form-group">
                <label for="color">Description</label>
                <input type="text" name="description" class="form-control" value="{{$vacancy->description}}">
            </div>
            <div class="form-group">
                <label for="color">Salary</label>
                <input type="text" name="salary" class="form-control" value="{{$vacancy->salary}}">
            </div>
            <div class="form-group">
                <label for="color">Company</label>
                <input type="text" name="company" class="form-control" value="{{$vacancy->company}}">
            </div>
            <div class="form-group">
                <label for="color">City</label>
                <input type="text" name="city" class="form-control" value="{{$vacancy->city}}">
            </div>
            <div class="form-group">
                <label for="color">Country</label>
                <input type="text" name="country" class="form-control" value="{{$vacancy->country}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary btn-lg">UPDATE</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
