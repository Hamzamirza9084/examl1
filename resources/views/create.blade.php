<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <input type="hidden" name="name" value="hamza">

    <input name="student_name" placeholder="Student Name">
    <input name="email" placeholder="Email">

    <button>Save</button>
</form>
