<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Course</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student->name }}</td>
                <td>{{ $attendance->course->course_name }}</td>
                <td>{{ $attendance->attendance_date }}</td>
                <td>{{ ucfirst($attendance->status) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
