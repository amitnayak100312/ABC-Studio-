@extends('back-end.maindesign') 

@section('content')

    <div class="main-content">
        <div class="card">
            <div class="card-title">
                <i class="fas fa-code"></i> Add New Content
            </div>
            
            <form action="/add-project" method="POST">
                @csrf {{-- Don't forget this! --}}
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Project Title</label>
                        <input type="text" name="title" placeholder="e.g. Laravel E-Commerce" required>
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category">
                            <option value="web">Web Development</option>
                            <option value="mern">MERN Stack</option>
                            <option value="java">Java / Android</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Thumbnail Image URL</label>
                        <input type="url" name="image_url" placeholder="https://..." required>
                    </div>

                    <div class="form-group full-width">
                        <label>Description</label>
                        <textarea name="description" placeholder="Explain the project features..."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-save">
                    <i class="fas fa-check-circle"></i> Add Content
                </button>
            </form>
        </div>
    </div>

@endsection