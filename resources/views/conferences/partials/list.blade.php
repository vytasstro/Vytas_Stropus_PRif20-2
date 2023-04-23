<div>
    <p>{{ $conference['id'] }}</p>
    <h4>{{ $conference['title'] }}</h4>
    <p>{{ $conference['content'] }}</p>
    <p>{{ $conference['date'] }}</p>
    <p>{{ $conference['address'] }}</p>
    <a href="{{ route('conferences.edit', ['id' => $conference['id']]) }}">
        <button type="button" class="btn btn-success">Edit</button>
    </a>
    <form action="{{ route('conferences.destroy', ['id' => $conference->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <br>
</div>