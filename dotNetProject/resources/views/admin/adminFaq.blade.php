@extends('admin.adminLayout')
@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Frequently Asked Questions (FAQ)</h1>

    <!-- Button for creating a new FAQ -->
    <a href="{{ route('admin.createQuestion') }}" class="btn btn-primary mb-3">Create New FAQ</a>
    <a href="{{ route('admin.createCategory') }}" class="btn btn-success mb-3">Create Category</a>

    <!-- Display FAQs by categories -->
    @foreach ($categories as $category)
        <div class="card mb-4" style="background: rgba(255, 255, 255, 0.5); backdrop-filter: blur(8px);">
            <div class="card-header d-flex justify-content-between align-items-center  ">
                <h2>{{ $category->name }}</h2>
                <div class="btn-group" role="group">
                    <!-- Edit button for the current category -->
                    <a href="{{ route('admin.editCategory', ['id' => $category->id]) }}" class="btn btn-warning">Edit Category</a>
                    <!-- Delete button for the current category -->
                    <form action="{{ route('admin.deleteCategory', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Category</button>
                    </form>
                </div>
            </div>
            <div class="card-body" id="faqContainer{{ $category->id }}">
                <button class="btn btn-info mb-2" onclick="toggleFAQs({{ $category->id }})">Show/Hide FAQs</button>
                <ul class="list-group d-none">
                    @foreach ($category->questions as $question)
                        <li class="list-group-item">
                            <h3>{{ $question->question }}</h3>
                            <p>{{ $question->answer }}</p>
                            <div class="btn-group" role="group">
                                <!-- Edit button for the current FAQ -->
                                <a href="{{ route('admin.editQuestion', $question->id) }}" class="btn btn-secondary">Edit FAQ</a>
                                <!-- Delete button for the current FAQ -->
                                <form action="{{ route('admin.deleteQuestion', $question->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete FAQ</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach

</div>

<script>
    function toggleFAQs(categoryId) {
        const faqContainer = document.getElementById(`faqContainer${categoryId}`);
        const faqList = faqContainer.querySelector('ul');

        if (faqList.classList.contains('d-none')) {
            faqList.classList.remove('d-none');
        } else {
            faqList.classList.add('d-none');
        }
    }
</script>

@endsection

