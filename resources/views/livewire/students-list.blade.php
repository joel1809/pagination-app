<div>
<h1 class="text-center mt-5">Students</h1>
<div class='table-responsive'>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Adulte?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->isAnAdult ? 'Vrai' : 'Faux'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $students->links('pagination::bootstrap-5') }}
</div>
</div>
