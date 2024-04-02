@extends('layouts.app')


@section('content')
    <h1 class="text-center text-capitalize m-3  ">Inserisci i dati per il nuovo progetto</h1>

    <form class="container" action="{{ route('dashboard.wallets.store') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex flex-column gap-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title"
                class="form-control  @error('title') is-invalid @enderror"
                placeholder="" aria-describedby="helpId" />

            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror


            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="60" rows="10" class=" @error('title') is-invalid @enderror"></textarea>

            @error('description')
            <div class="alert alert-danger">
                    {{ $message }}
            </div>
            @enderror


            <label for="new_image" class="form-label">Image</label>
            <input type="file" name="new_image" id="new_image" class="form-control  @error('new_image') is-invalid @enderror"
            />

            @error('new_image')
            <div class="alert alert-danger">
                    {{ $message }}
            </div>
            @enderror
            <h1>ciao</h1>

            <label for="category" class="form-label">Category</label>
            {{-- <input type="text" name="category" id="category" class="form-control" placeholder=""
                aria-describedby="helpId" /> --}}

            <div class="mb-3">
                <label for="" class="form-label">City</label>
                <select
                    class="form-select form-select-lg"
                    name=""
                    id=""
                >
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>



            <label for="client" class="form-label">Client</label>
            <input type="text" name="client" id="client" class="form-control" placeholder=""
                aria-describedby="helpId" />

            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" placeholder=""
                aria-describedby="helpId" />
        </div>

        <button type="submit" class="btn btn-primary ">Invia</button>
    </form>
@endsection
