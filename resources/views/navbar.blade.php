<nav class="navbar navbar-expand-lg navbar-light" style="background-color: orange;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/posts/">Posts</a>
        </div>
        @include('flash_message')
        <a class="btn btn-secondary float-end" href="/post/create">New Post</a>
    </div>
</nav>