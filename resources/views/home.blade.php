<x-app>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('_sidebar')
            </div>
            <div class="col-6">
                @include('_comments')
            </div>
            <div class="col-3">
                @include('_latest-upload-books')
            </div>
        </div>
    </div>
</x-app>
