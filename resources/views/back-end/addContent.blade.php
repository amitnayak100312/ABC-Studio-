@extends('back-end.maindesign') 

@section('content')

    <div class="main-content">
       <form action="/add-project" method="POST">
    @csrf 
    
    <div class="form-row">
        
        <div class="form-group">
            <label>Project Title</label>
            <input type="text" name="title" required>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category">
                <option value="web">Web Development</option>
                <option value="mern">MERN Stack</option>
            </select>
        </div>

        <div class="form-group full-width">
            <label>Thumbnail Image URL</label>
            <input type="url" name="image_url" required>
        </div>

        <div class="form-group full-width">
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>

    </div>

    <button type="submit" class="btn-save">
        <i class="fas fa-check-circle"></i> Add Content
    </button>
</form>
    </div>

@endsection