<form action="{{ url('/attendance/record') }}" method="POST">
    @csrf
    <label for="student_id">Student</label>
    <select name="student_id" id="student_id">
        @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>

    <label for="course_id">Course</label>
    <select name="course_id" id="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
        @endforeach
    </select>

    <label for="attendance_date">Date</label>
    <input type="date" name="attendance_date" id="attendance_date">

    <label for="status">Status</label>
    <select name="status" id="status">
        <option value="present">Present</option>
        <option value="absent">Absent</option>
        <option value="late">Late</option>
    </select>

    <button type="submit">Record Attendance</button>
</form>
