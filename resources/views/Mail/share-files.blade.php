<p>Hello {{$user->name}} </p>

<p>User {{ $author->name }} shared the following files to you.</p>
<hr>
@foreach($files as $file)
    <p>{{ $file->is_folder ? 'Folder' : 'File' }} - {{ $file->name }}</p>
@endforeach
