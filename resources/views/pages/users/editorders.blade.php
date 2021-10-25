@extends('layouts.users.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Pesanan</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
<div class="row">

    <div class="col-lg-6">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>

                    <h2 class="card-title">Data Pengantin Pria</h2>
                </header>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <div class="col-lg-6">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">Data Pengantin Wanita</h2>

            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>


<div class="row mt-3">

    <div class="col-lg-6">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>

                    <h2 class="card-title">Data Pengantin Pria</h2>
                </header>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                                <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <div class="col-lg-6">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">Data Pengantin Wanita</h2>

            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label" for="formGroupExampleInput">Example label</label>
                            <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<button type="submit" class="btn btn-primary btn-block text-align-center">
    Ubah Data
</button>
</form>
</div>

@endsection