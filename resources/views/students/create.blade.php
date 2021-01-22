<html>
<body>

<form action="{{route('students.store') }}" method="POST">
@csrf
<input type="text" name="email" class="form-control" placeholder="email">
<input type="text" name="name" class="form-control" placeholder="name">
<input type="text" name="code" class="form-control" placeholder="code">
<input type="text" name="subject" class="form-control" placeholder="subject">
<button type="submit">submit</button>
</form>

</body>
</html>