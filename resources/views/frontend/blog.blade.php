@extends('frontend.layout.app')

@section('content')
    <!-- Hero Banner Section -->
    <section class="banner bg-primary text-white py-5">
        <div class="container">
            <div class="text-center">
                   <h2 class="bannerh2">{{ __('Blogs') }}</h2>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Blog Grid -->
            <div class="row g-4 mb-5">
                @forelse ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <article class="card h-100 shadow-sm border-0 hover-card">
                            <!-- Blog Image -->
                            <div class="position-relative overflow-hidden">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://thumb.ac-illust.com/b1/b170870007dfa419295d949814474ab2_t.jpeg' }}"
                            alt="{{ $blog->translate()?->title }}"
                            class=" blog-image"
                            style="height: 200px; object-fit: cover;" />
                                {{-- <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary rounded-pill">{{ __('Blogs') }}</span>
                                </div> --}}
                            </div>

                            <!-- Blog Content -->
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center text-muted mb-3">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <small>{{ $blog->created_at->format('F j, Y') }}</small>
                                </div>

                                <h3 class="card-title h5 fw-bold text-dark mb-3">
                                    <a href="{{ route('blog.show', $blog->id) }}">
                                        {{ $blog->translate()?->title }}
                                    </a>
                                </h3>

                                <p class="card-text text-muted mb-4 flex-grow-1">
                                    {{ Str::limit(strip_tags($blog->translate()?->description), 120) }}
                                </p>

                                <div class="mt-auto">
                                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-outline-primary btn-sm">
                                        {{ __('Read More') }}
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-12">
                        <div class="text-center py-5">
                            <div class="card border-0 shadow-sm mx-auto" style="max-width: 400px;">
                                <div class="card-body p-5">
                                    <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                                    <h3 class="h4 fw-bold text-dark mb-3">{{ __('No blogs yet') }}</h3>
                                    <p class="text-muted">{{ __('Stay tuned') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($blogs->hasPages())
                <div class="d-flex justify-content-center">
                    <div class="pagination-wrapper">
                        {{ $blogs->links() }}
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('styles')
<style>
    .hover-card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    .blog-image {
        transition: transform 0.3s ease;
    }
    .hover-card:hover .blog-image {
        transform: scale(1.05);
    }
    .card-title {
        transition: color 0.2s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .hover-card:hover .card-title {
        color: var(--bs-primary) !important;
    }
    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .btn-outline-primary {
        transition: all 0.2s ease;
    }
    .btn-outline-primary:hover {
        transform: translateX(2px);
    }
    .pagination-wrapper .pagination {
        gap: 0.25rem;
    }
    .pagination-wrapper .page-link {
        border-radius: 0.375rem;
        margin: 0 0.125rem;
        transition: all 0.2s ease;
    }
    .pagination-wrapper .page-link:hover {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
        color: white;
    }
    .pagination-wrapper .page-item.active .page-link {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
    }
    .pagination-wrapper .page-item.disabled .page-link {
        opacity: 0.5;
    }
    .banner {
        background: linear-gradient(135deg, var(--bs-primary), var(--bs-purple, #6f42c1));
    }
</style>
@endpush
