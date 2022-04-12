@extends('students.layout')

@section('content')
    <main>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Aj's Tutorials</h2>
                </div>

            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="tbl">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>course</th>
                <th>fee</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->studentname }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->fee }}</td>
                    <td>
                        <form class="flexme" action="{{ route('students.destroy', $student->id) }}" method="POST">



                            <a class="edit-btn" href="{{ route('students.edit', $student->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="pull-right">
            <a class="create-btn" href="{{ route('students.create') }}"> Create New student</a>
        </div>
    </main>
    {!! $students->links() !!}
@endsection
