
<form action="{{route('students.update',$student->id) }}" method="POST">
@csrf
@method('PUT')
<input type="hidden" name="id" value="1">
<input type="text" name="email" value="{{ $student -> email }}" class="form-control" placeholder="email">
<input type="text" name="name"  value="{{ $student -> name }}"class="form-control" placeholder="name">
<input type="text" name="code"  value="{{ $student -> code }}" class="form-control" placeholder="code">
<input type="text" name="subject"  value="{{ $student -> subject }}" class="form-control" placeholder="subject">
<button type="submit">submit</button>
</form>

