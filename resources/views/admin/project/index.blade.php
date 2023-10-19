@extends('admin.includes.app')
@section('title', 'All Projects')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">All Project</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Projects
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="card-options">
                        <a href="{{ route('admin.project.create') }}" class="btn btn-primary mr-1">
                            Add Project
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">#No</th>
                                            <th style="text-align: center;">Media</th>
                                            <th>Project Title</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($projects as $key => $project)
                                            <tr style="vertical-align: middle;">
                                                <th style="text-align: center;" scope="row">
                                                    {{ $key + 1 }}</th>
                                                <td style="text-align: center;">
                                                    <img src="{{ url('project/preview/' . $project->preview_img) }}"
                                                        class="img-responsive" style="max-height:100px; max-width:100px"
                                                        alt="">
                                                </td>
                                                <td>{{ $project->title }}</td>
                                                <td style="text-align: center;">
                                                    <a href="{{ route('admin.project.show', $project->id) }}"
                                                        class="btn btn-flat-success border">
                                                        Manage
                                                    </a>
                                                    <a class="btn btn-flat-danger border"
                                                        onclick="return confirm('Are you sure?');"
                                                        href="{{ route('admin.project.destroy', $project->id) }}">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No records found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $projects->links() }}
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- END: Content-->
    <footer  style="bottom: -70px" class="col-12 admin-footer footer-static footer-light">
        <div class="row pdt-30 footer-copyright-area">
            <div class="col-xl-12">
                <div class="text-center">
                    <span>Copyright ©2023 AL Yasmeen All Rights Reserved Developed by
                        <span>
                            <a style="color: #ec2024;" href="https://publicize360.com/"
                                target="_blank">Publicize 360</a>
                            CMS by <a style="color: #04733b;" href="https://acsinsights.com/"
                                target="_blank">ACS Insights</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </footer>
@endsection
