@extends('admin.adminLayout')
@section('content')

@section('content')
   <h1>Edit FAQ</h1>

   <form action="{{ route('admin.updateQuestion', $question->id) }}" method="POST">
       @csrf
       @method('PUT')

       <label for="question">Question</label>
       <input type="text" id="question" name="question" value="{{ $question->question }}" required>

       <label for="answer">Answer</label>
       <textarea id="answer" name="answer" required>{{ $question->answer }}</textarea>

       <button type="submit">Update FAQ</button>
   </form>

@endsection