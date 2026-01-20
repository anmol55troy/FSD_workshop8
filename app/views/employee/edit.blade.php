@extends('layout')
@section('title','Edit Employee')
@section('content')

<h3>Edit Employee Information</h3>

<form method="post" action="index.php?action=update">
    <input type="hidden" name="id" value="{{ $employee['id'] }}">
    
    <input type="text" name="name" value="{{ $employee['name'] }}" placeholder="Full Name" required>
    
    <input type="text" name="title" value="{{ $employee['title'] }}" placeholder="Job Title" required>
    
    <input type="text" name="skills" value="{{ $employee['skills'] }}" placeholder="Skills (comma separated)" required>
    
    <button type="submit">✅ Update Employee</button>
</form>

<p style="margin-top: 20px; text-align: center;">
    <a href="index.php" style="color: #999;">← Back to Employee List</a>
</p>

@endsection