<div class="container">
    <div class="content">

        <h1>File Upload</h1>
        <form action="{{route('upload') }}" method="post" enctype="multipart/form-data">
            {{ csrf_token() }}
            <label>Select image to upload:</label>
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
        </form>

    </div>
</div>