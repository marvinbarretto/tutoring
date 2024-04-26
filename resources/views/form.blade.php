@extends('layouts.app')

@section('content')

    @if(session('formData'))
        <script>
            console.log('Form Data:', @json(session('formData')));
        </script>
    @endif

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf <!-- CSRF Token for security -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="">Choose...</option>
            <option value="query">Query</option>
            <option value="feedback">Feedback</option>
            <option value="complaint">Complaint</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>

@endsection
