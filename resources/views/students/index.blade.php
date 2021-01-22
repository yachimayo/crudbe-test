<html>
<body>
<h1>CRUD TEST</h1>
<a class="btn btn-success" href="{{ route('students.create') }}"> create </a>


<table class="table table-bordered">
    <tr>
        
        <th>Email</th>
        <th>Name</th>
        <th>Code</th>
        <th>Subject</th>
        <th width="280px">action</th>
    </tr>
    @foreach($students as $student)
    <tr>

    <td>{{ $student -> email }}</td>
    <td>{{ $student -> name }}</td>
    <td>{{ $student -> code }}</td>
    <td>{{ $student -> subject }}</td>
    <td>
        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
              <a class="btn btn-info"  href="{{ route('students.edit',$student->id) }}"> edit </a> 
              @csrf
              @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
</table>
</body>
</html> 