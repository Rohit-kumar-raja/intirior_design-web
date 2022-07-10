<x-layout>
    @slot('title', 'page not found')
    @slot('body')
        <section class="error-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-content text-center">
                            <div class="title">Thank You</div>
                            <p>  Thank You for your Valuable feedback !!! </p>
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
