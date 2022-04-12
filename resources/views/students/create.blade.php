<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <title>Create</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body background="{{ asset('img/stu.jpg') }}">
    <main>
        <div class="1">
            <div class="top">
                <div>
                    <a class="back" href="{{ route('students.index') }}"> Back</a>
                </div>
                <div class="topic">
                    <h1>Add New student</h1>
                </div>

            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Name</h2>
                        <input type="text" name="studentname" class="placeholder" placeholder="Name">
                    </div>
                </div>
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Course</h2>
                        <input type="text" name="course" class="placeholder" placeholder="Course">
                    </div>
                </div>
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Fee</h2>
                        <input type="text" name="fee" class="placeholder" placeholder="Fee">
                    </div>
                </div>

                <div class="add_">
                    <button type="submit" class="add">Submit</button>
                </div>
            </div>

        </form>
    </main>
</body>

</html>
