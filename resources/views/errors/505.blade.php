<x-layout>
    @slot('title', 'page not found')
    @slot('body')
        <section class="error-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-content text-center">
                            <span>Page Not Found</span>
                            <div class="title">505</div>
                            <p>We’re unable to find a page you are looking for, Try later or click the button.</p>
                            <div class="button">
                                <a class="btn-one" href="{{ route('index') }}">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endslot
</x-layout>
