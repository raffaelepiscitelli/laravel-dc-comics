@extends('layouts.app')

@section('main-content')

<section class="form-container container">
    <div class="row justify-content-center">
        <div class="col-6 my-5">
            <h1 class="title mb-4 pt-3 text-center">
                Add a new comic book:
            </h1>

            <form action="{{ route('comics.store') }}" method="POST">

            @csrf

                <div class="mb-3">
                    <label for="thumb" class="form-check-label">Image src:</label>
                    <input type="text" name="thumb" id="thumb" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series:</label>
                    <input type="text" name="series" id="series" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date:</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" name="type" id="type" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Add a new comic</button>
                <button type="reset" class="btn btn-warning">Clean the form</button>
            </form>

        </div>
    </div>
</section>

@endsection