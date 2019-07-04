@extends('admin-ui.layout')
@section('page-title')
    User
@stop
@section('page-header')
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Blank</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                        <i class="icon-bars-alt text-pink-300"></i>
                        <span>Statistics</span>
                    </a>
                    <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                        <i class="icon-calculator text-pink-300"></i>
                        <span>Invoices</span>
                    </a>
                    <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                        <i class="icon-calendar5 text-pink-300"></i>
                        <span>Schedule</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('home.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">User</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page-content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">User List</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <table class="table datatable-show-all">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>DOB</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td><span class="badge badge-success">Active</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Jackelyn</td>
                <td>Weible</td>
                <td><a href="#">Airline Transport Pilot</a></td>
                <td>3 Oct 1981</td>
                <td><span class="badge badge-secondary">Inactive</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Aura</td>
                <td>Hard</td>
                <td>Business Services Sales Representative</td>
                <td>19 Apr 1969</td>
                <td><span class="badge badge-danger">Suspended</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nathalie</td>
                <td><a href="#">Pretty</a></td>
                <td>Drywall Stripper</td>
                <td>13 Dec 1977</td>
                <td><span class="badge badge-info">Pending</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Sharan</td>
                <td>Leland</td>
                <td>Aviation Tactical Readiness Officer</td>
                <td>30 Dec 1991</td>
                <td><span class="badge badge-secondary">Inactive</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Maxine</td>
                <td><a href="#">Woldt</a></td>
                <td><a href="#">Business Services Sales Representative</a></td>
                <td>17 Oct 1987</td>
                <td><span class="badge badge-info">Pending</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Sylvia</td>
                <td><a href="#">Mcgaughy</a></td>
                <td>Hemodialysis Technician</td>
                <td>11 Nov 1983</td>
                <td><span class="badge badge-danger">Suspended</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Lizzee</td>
                <td><a href="#">Goodlow</a></td>
                <td>Technical Services Librarian</td>
                <td>1 Nov 1961</td>
                <td><span class="badge badge-danger">Suspended</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Kennedy</td>
                <td>Haley</td>
                <td>Senior Marketing Designer</td>
                <td>18 Dec 1960</td>
                <td><span class="badge badge-success">Active</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Chantal</td>
                <td><a href="#">Nailor</a></td>
                <td>Technical Services Librarian</td>
                <td>10 Jan 1980</td>
                <td><span class="badge badge-secondary">Inactive</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Delma</td>
                <td>Bonds</td>
                <td>Lead Brand Manager</td>
                <td>21 Dec 1968</td>
                <td><span class="badge badge-info">Pending</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Roland</td>
                <td>Salmos</td>
                <td><a href="#">Senior Program Developer</a></td>
                <td>5 Jun 1986</td>
                <td><span class="badge badge-secondary">Inactive</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Coy</td>
                <td>Wollard</td>
                <td>Customer Service Operator</td>
                <td>12 Oct 1982</td>
                <td><span class="badge badge-success">Active</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Maxwell</td>
                <td>Maben</td>
                <td>Regional Representative</td>
                <td>25 Feb 1988</td>
                <td><span class="badge badge-danger">Suspended</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Cicely</td>
                <td>Sigler</td>
                <td><a href="#">Senior Research Officer</a></td>
                <td>15 Mar 1960</td>
                <td><span class="badge badge-info">Pending</span></td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
@push('page-js')
    {{--User js--}}
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/demo_pages/datatables_advanced.js')}}"></script>
    {{--User js--}}
@endpush
@push('page-css')
@endpush
