@extends('frontend.layout.app')

@section('content')
    <!-- Hero Banner Section -->
    <section class="banner bg-primary text-white py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 fw-bold mb-3">{{ __('Blogs') }}</h1>
                {{-- <p class="lead opacity-75">{{ __('Discover insights, stories, and updates from our team') }}</p> --}}
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
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    class="card-img-top blog-image" style="height: 200px; object-fit: cover;" />
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary rounded-pill">
                                        {{ __('Blogs') }}
                                    </span>
                                </div>
                            </div>

                            <!-- Blog Content -->
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center text-muted mb-3">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <small>{{ $blog->created_at->format('F j, Y') }}</small>
                                </div>

                                <h3 class="card-title h5 fw-bold text-dark mb-3">
                                    <a href="{{ route('blog.show', $blog->slug) }}">

                                        {{ $blog->title }}
                                    </a>
                                </h3>

                                @if ($blog->excerpt)
                                    <p class="card-text text-muted mb-4 flex-grow-1">
                                        {{ Str::limit($blog->excerpt, 120) }}
                                    </p>
                                @endif

                                <div class="mt-auto">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-outline-primary btn-sm">
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
                                    <p class="text-muted">
                                        {{ __('Stay tuned') }}</p>
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

    <!-- Newsletter Subscription Section -->
    {{-- <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card bg-primary text-white border-0 shadow-lg">
                        <div class="card-body p-4 p-md-5 text-center">
                            <h3 class="display-6 fw-bold mb-3">
                                {{ __('Stay in the Loop') }}
                            </h3>
                            <p class="lead mb-4">
                                {{ __('Subscribe to our newsletter and be the first to know about our latest updates, exclusive content, and special announcements.') }}
                            </p>

                            <form class="row g-3 justify-content-center" method="POST"
                                action="#">
                                @csrf
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        placeholder="{{ __('Enter your email address') }}" required />
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-light btn-lg w-100">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        {{ __('Subscribe') }}
                                    </button>
                                </div>
                            </form>

                            <p class="small mt-3 opacity-75">
                                {{ __('We respect your privacy. Unsubscribe at any time.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

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
    }

    .hover-card:hover .card-title {
        color: var(--bs-primary) !important;
    }

    .btn-outline-primary {
        transition: all 0.2s ease;
    }

    .btn-outline-primary:hover {
        transform: translateX(2px);
    }

    /* Custom pagination styling */
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

    /* Banner gradient background */
    .banner {
        background: linear-gradient(135deg, var(--bs-primary), var(--bs-purple, #6f42c1));
    }

    /* Newsletter card gradient */
    .card.bg-primary {
        background: linear-gradient(135deg, var(--bs-primary), var(--bs-purple, #6f42c1)) !important;
    }

    /* Responsive text truncation */
    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@push('styles')
@endpush
