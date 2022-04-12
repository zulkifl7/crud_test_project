<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <title>Edit {{ $student->studentname }}</title>
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
                    <h2>Edit {{ $student->studentname }}'s Details</h2>
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

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Name</h2>
                        <input class="placeholder" type="text" name="studentname"
                            value="{{ $student->studentname }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Course</h2>
                        <input class="placeholder" type="text" name="course" value="{{ $student->course }}"
                            class="form-control" placeholder="Course">
                    </div>
                </div>
                <div class="placeholder_section">
                    <div class="form-group">
                        <h2>Fee</h2>
                        <input class="placeholder" type="text" name="fee" value="{{ $student->fee }}"
                            class="form-control" placeholder="Fee">
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
