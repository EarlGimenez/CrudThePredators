<div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="mb-4">
                    <a href="{{ route('spots.list') }}" class="btn btn-outline-light">
                        <i class="fas fa-arrow-left me-2"></i>Back to Destinations
                    </a>
                </div>

                
                <div class="detail-card">
                    <img src="{{ $spot->image_url }}" class="w-100" alt="{{ $spot->name }}">
                    <div class="p-4">
                        <div class="row align-items-start mb-4">
                            <div class="col-md-8">
                                <h1 class="fw-bold text-primary mb-2">{{ $spot->name }}</h1>
                                <p class="text-muted lead mb-0">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    {{ $spot->location }}, {{ $spot->country }}
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <div class="tropical-badge d-inline-block mb-2">
                                    <i class="fas fa-calendar me-1"></i>
                                    Best in {{ $spot->month }}
                                </div>
                                <div class="rating-stars d-block">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($spot->rating))
                                            <i class="fas fa-star"></i>
                                        @elseif($i - 0.5 <= $spot->rating)
                                            <i class="fas fa-star-half-alt"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    <span class="ms-2 fw-semibold">{{ number_format($spot->rating, 1) }}/5.0</span>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="fw-semibold mb-3">
                                    <i class="fas fa-info-circle me-2 text-primary"></i>
                                    About This Destination
                                </h3>
                                <p class="lead text-muted">{{ $spot->description }}</p>
                            </div>
                        </div>

            
                        @if($spot->highlights)
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="fw-semibold mb-3">
                                        <i class="fas fa-star me-2 text-warning"></i>
                                        Highlights & Activities
                                    </h3>
                                    <div class="row">
                                        @php
                                            $highlights = explode(',', $spot->highlights);
                                        @endphp
                                        @foreach($highlights as $highlight)
                                            <div class="col-md-4 mb-2">
                                                <span class="badge bg-light text-dark p-2 w-100">
                                                    <i class="fas fa-check-circle text-success me-2"></i>
                                                    {{ trim($highlight) }}
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tropical-card p-3 h-100">
                                    <h5 class="fw-semibold mb-3">
                                        <i class="fas fa-lightbulb text-warning me-2"></i>
                                        Travel Tips
                                    </h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2">
                                            <i class="fas fa-plane text-primary me-2"></i>
                                            Best time to visit: {{ $spot->month }}
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-camera text-primary me-2"></i>
                                            Don't forget your camera!
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-sun text-warning me-2"></i>
                                            Pack sunscreen and comfortable shoes
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tropical-card p-3 h-100">
                                    <h5 class="fw-semibold mb-3">
                                        <i class="fas fa-chart-line text-success me-2"></i>
                                        Quick Stats
                                    </h5>
                                    <div class="row text-center">
                                        <div class="col-6 mb-3">
                                            <div class="fw-bold text-primary fs-4">{{ number_format($spot->rating, 1) }}</div>
                                            <small class="text-muted">Rating</small>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="fw-bold text-success fs-4">{{ $spot->month }}</div>
                                            <small class="text-muted">Best Month</small>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="badge bg-primary p-2">
                                            <i class="fas fa-globe me-1"></i>
                                            {{ $spot->country }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

              
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <a href="{{ route('spots.list') }}" class="btn tropical-btn-primary me-3">
                                    <i class="fas fa-search me-2"></i>
                                    Explore More Destinations
                                </a>
                                <button class="btn btn-outline-secondary" onclick="window.history.back()">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Go Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
