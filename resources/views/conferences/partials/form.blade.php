<div>
    <label for="title-input">Title</label>
    <input id="title-input" type="text" name="title" value="{{ old('title') }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content-input" name="content">{{ old('content') }}</textarea>
    @error('content')
        <p>{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="date-input">Date</label>
    <input type="date-input" type="date" name="date" value="{{ old('date') }}">
    @error('date')
        <p>{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="address-input">Address</label>
    <input type="address-input" type="address" name="address" value="{{ old('address') }}">
    @error('address')
        <p>{{ $message }}</p>
    @enderror
</div>