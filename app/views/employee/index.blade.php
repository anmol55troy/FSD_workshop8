@extends('layout')
@section('title','Employee Database')

@section('content')
<div style="margin-bottom: 30px;">
    <a href="index.php?action=create" class="btn">+ Add New Employee</a>
</div>

<ul>
@foreach ($employees as $e)
<li>
    <strong>{{ $e['name'] }}</strong> – <em style="color: #666;">{{ $e['title'] }}</em>
    <br><br>
    <strong style="color: #764ba2;">Skills:</strong>
    <ul>
    @foreach (explode(',', $e['skills']) as $skill)
        <li>{{ trim($skill) }}</li>
    @endforeach
    </ul>
    <div class="action-links">
        <a href="index.php?action=edit&id={{ $e['id'] }}">✏️ Edit</a>
        <a href="index.php?action=delete&id={{ $e['id'] }}" class="delete" onclick="return confirm('Are you sure?');">🗑️ Delete</a>
    </div>
</li>
@endforeach
</ul>
@endsection