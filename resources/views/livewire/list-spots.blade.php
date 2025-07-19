<div>
    <div class="container py-5">
        
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="professional-card">
                    <form wire:submit.prevent="search">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Search by</label>
                                <select wire:model.live="searchType" class="form-select">
                                    <option value="name">Destination Name</option>
                                    <option value="country">Country</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Find destinations</label>
                                <input type="text" 
                                       wire:model.live="search" 
                                       class="form-control" 
                                       placeholder="Search destinations...">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-professional w-100">
                                    <i class="fas fa-search me-2"></i>Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold">
                    @if($search)
                        Search Results for "{{ $search }}"
                    @else
                        All Destinations
                    @endif
                </h2>
                <p class="text-muted">{{ $spots->total() }} destinations found</p>
            </div>
        </div>

        
        <div class="row g-4">
            @forelse($spots as $spot)
                <div class="col-lg-4 col-md-6">
                    <div class="card spot-card h-100" style="cursor: pointer;" 
                         onclick="window.location.href='{{ route('spots.show', $spot->id) }}'">
                        <img src="{{ $spot->image_url }}" class="card-img-top" alt="{{ $spot->name }}">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0 fw-semibold">{{ $spot->name }}</h5>
                                <span class="badge badge-professional">{{ $spot->month }}</span>
                            </div>
                            
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>
                                {{ $spot->country }}
                            </p>
                            
                            <p class="card-text flex-grow-1 text-muted">
                                {{ Str::limit($spot->description, 100) }}
                            </p>
                            
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <div class="rating-stars">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($spot->rating))
                                            <i class="fas fa-star"></i>
                                        @elseif($i - 0.5 <= $spot->rating)
                                            <i class="fas fa-star-half-alt"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    <span class="ms-1 text-muted">{{ number_format($spot->rating, 1) }}</span>
                                </div>
                                <small class="text-muted">{{ $spot->location }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="professional-card text-center py-5">
                        <i class="fas fa-search fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">No destinations found</h4>
                        <p class="text-muted">Try adjusting your search criteria or browse all destinations.</p>
                        <button wire:click="$set('search', '')" class="btn btn-professional">
                            <i class="fas fa-globe me-2"></i>Show All Destinations
                        </button>
                    </div>
                </div>
            @endforelse
        </div>

        
        @if($spots->hasPages())
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="professional-card">
                        {{ $spots->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>