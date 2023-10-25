@extends('layouts.app')

@section('title', 'User Add')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                </i>
            </div>
            <div>Users Add
                <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                {{-- <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-user-plus fa-w-20"></i>
                    </span>
                    User Import
                </button> --}}
            </div>
        </div>
    </div>
</div>
@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br/>
    @endforeach
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <form action="{{ route('store_users') }}" method="POST">
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" id="name" placeholder="Input Name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" id="email" placeholder="Input Email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" id="password" placeholder="Input Password" type="password"
                                class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirim Password</label>
                        <div class="col-sm-10">
                            <input name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" type="password"
                                class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select name="level" id="level" class="form-control">
                                <option value="sekolah">Sekolah</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
