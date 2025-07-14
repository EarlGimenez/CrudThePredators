<div>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="display-4 fw-bold mb-4">
                        <i class="fas fa-palm-tree me-3"></i>Discover Paradise
                    </h1>
                    <p class="lead mb-5">
                        Explore the world's most breathtaking destinations and create unforgettable memories
                    </p>
                    
                    <!-- Search Section -->
                    <div class="tropical-card p-4 mb-4">
                        <form wire:submit.prevent="search">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-3">
                                    <label class="form-label text-dark fw-semibold">Search by</label>
                                    <select wire:model="searchType" class="form-select tropical-search-bar">
                                        <option value="name">Destination Name</option>
                                        <option value="country">Country</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-dark fw-semibold">Find your dream destination</label>
                                    <input type="text" 
                                           wire:model="search" 
                                           class="form-control tropical-search-bar" 
                                           placeholder="e.g., Boracay, Philippines, Beach..."
                                           required>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn tropical-btn-primary w-100">
                                        <i class="fas fa-search me-2"></i>Explore
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="row text-center mt-5">
                        <div class="col-md-4 mb-3">
                            <div class="tropical-card p-3">
                                <i class="fas fa-map-marked-alt text-warning fa-2x mb-2"></i>
                                <h5 class="text-dark">20+ Destinations</h5>
                                <p class="text-muted mb-0">Handpicked locations</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tropical-card p-3">
                                <i class="fas fa-star text-warning fa-2x mb-2"></i>
                                <h5 class="text-dark">Top Rated</h5>
                                <p class="text-muted mb-0">5-star experiences</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tropical-card p-3">
                                <i class="fas fa-camera text-warning fa-2x mb-2"></i>
                                <h5 class="text-dark">Instagram Ready</h5>
                                <p class="text-muted mb-0">Perfect photo spots</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="text-white fw-bold">Why Choose Tourism App?</h2>
                    <p class="text-white-50">Your gateway to extraordinary adventures</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="tropical-card p-4 h-100 text-center">
                        <i class="fas fa-globe-asia text-primary fa-3x mb-3"></i>
                        <h4 class="text-dark mb-3">Global Destinations</h4>
                        <p class="text-muted">Discover amazing places from around the world, carefully curated for the best travel experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tropical-card p-4 h-100 text-center">
                        <i class="fas fa-heart text-danger fa-3x mb-3"></i>
                        <h4 class="text-dark mb-3">Personalized Experience</h4>
                        <p class="text-muted">Get recommendations based on your preferences and discover destinations that match your travel style.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tropical-card p-4 h-100 text-center">
                        <i class="fas fa-users text-success fa-3x mb-3"></i>
                        <h4 class="text-dark mb-3">Travel Community</h4>
                        <p class="text-muted">Join a community of travelers and share your experiences with fellow adventure seekers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
