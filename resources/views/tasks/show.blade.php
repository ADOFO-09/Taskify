<x-app-layout>

@section('content')
<div class="container">
    <h2>Task Details</h2>

    <div class="mb-3">
        <strong>Title:</strong> {{ optional($task)->title ?? 'No title available' }}
    </div>

    <div class="mb-3">
        <strong>Description:</strong> {{ optional($task)->description ?? 'No description available' }}
    </div>

    <div class="mb-3">
        <strong>Status:</strong> {{ optional($task)->status ?? 'No status available'}}
    </div>

    <div class="mb-3">
        <strong>Due Date:</strong> {{ optional($task)->due_date ? (empty($task->due_date) ? 'No Due Date' : \Carbon\Carbon::parse($task->due_date)->format('Y-m-d')) : 'No Due Date' }}
     </div>

    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to List</a>
</div>
</x-app-layout>
