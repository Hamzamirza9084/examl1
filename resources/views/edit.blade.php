<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')

    <input type="hidden" name="name" value="hamza">

    <input name="student_name" value="{{ $student->student_name }}">
    <input name="email" value="{{ $student->email }}">

    <button>Update</button>
</form>
