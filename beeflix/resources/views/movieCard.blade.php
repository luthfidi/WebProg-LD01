<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    @foreach ($movies as $movie)
        <div class="col">
            <div class="card h-100 shadow-sm hover-card">
                <div class="position-relative">
                    <img src="{{ asset($movie->photo) }}" class="card-img-top" alt="{{$movie->title}}" 
                         style="height: 400px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-2">
                        <span class="badge bg-warning text-dark">{{$movie->genre->name}}</span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-truncate">{{$movie->title}}</h5>
                    <p class="card-text" style="height: 4.5em; overflow: hidden;">
                        {{$movie->description}}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="far fa-calendar-alt me-1"></i>
                            {{$movie->publish_date->format('d M Y')}}
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pb-3">
                    <div class="d-grid">
                        <button type="button" class="btn btn-danger" 
                                onclick="confirmDelete('{{ route('homePage.deleteMovie', $movie->id) }}')">
                            <i class="fas fa-trash-alt me-2"></i>Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this movie?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="deleteButton" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-card {
        transition: transform 0.3s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-5px);
    }
</style>

<script>
    function confirmDelete(deleteUrl) {
        document.getElementById('deleteButton').href = deleteUrl;
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }
</script>